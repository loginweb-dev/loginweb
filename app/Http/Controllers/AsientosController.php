<?php

namespace App\Http\Controllers;

use App\Models\Asiento;
use App\Models\DetalleAsiento;
use App\Models\Estado;
use App\Models\AsientoUser;

use Illuminate\Http\Request;
use DB;
class AsientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');
        $query = $search ? "ufv like '%$search%' or tipo_cambio like '%$search%' or glosa like '%$search%'" : 1;
        $asientos = Asiento::with('estado')
                            ->whereRaw($query)
                            ->paginate(10);
        $message = request('alert');
        return view('admin.asientos.index', compact('asientos', 'search', 'message'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asientos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asiento = new Asiento;
        $asiento->user_id = auth()->user()->id;
        $asiento->ufv = $request->ufv;
        $asiento->tipo_cambio = $request->tipo;
        $asiento->glosa = $request->glosa;
        $estado = Estado::where('deleted_at',null)->first();
        $asiento->estado_id = $estado->id;
        $asiento->total_haber = collect($request->items)->sum(function($item) {
            return $item['haber'];
        });
        $asiento->total_debe = collect($request->items)->sum(function($item) {
            return $item['debe'];
        });
        $asiento = DB::transaction(function() use ($asiento, $request) {
            // custom method from app/Helper/HasManyRelation
            $asiento->storeHasMany([
                'items' => $request->items
            ]);
            return $asiento;
        });
        AsientoUser::create([
            'observacion'=> 'Registro de Asiento',
            'user_id' => $asiento->user_id,
            'asiento_id' => $asiento->id,
            'estado_id' => $estado->id
        ]);
        return response()
            ->json(['saved' => true, 'id' => $asiento->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function show(Asiento $asiento)
    {
        return view('admin.asientos.show',compact('asiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Asiento $asiento)
    {
        return view('admin.asientos.edit',compact('asiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asiento = Asiento::findOrFail($id);

        $items = collect($request->items)->transform(function($product) {
            return new DetalleAsiento($product);
        });

        $data = $request->except('items');
        $data['total_haber'] = $items->sum('haber');
        $data['total_debe'] = $items->sum('debe');

        $asiento->update($data);

        DetalleAsiento::where('asiento_id', $asiento->id)->delete();

        $asiento->items()->saveMany($items);

        return response()
            ->json(['updated' => true, 'id' => $asiento->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asiento $asiento)
    {
        //
    }

    public function agregarcomprobante(Request $request, $id){
        $asiento = Asiento::findOrFail($id);
        if($request->hasFile('archivo')){
            $asiento->comprobante = $request->file('archivo')->store('comprobante','public');
        }
        $asiento->update();
      return back()->with([
        'message' => "El comprobante, se agrego crrectamente.",
        'alert-type' => 'info'
        ]);
    }

    public function buscarCuenta(Request $request){
        $filtro = $request->filtro;
        $cuenta = \App\Models\DetalleCuenta::join('cuentas as plan','plan.id','=','detalle_cuentas.cuenta_id')
                                  ->where('detalle_cuentas.code',$filtro)
                                  ->select('detalle_cuentas.id','detalle_cuentas.code','detalle_cuentas.name','plan.tipo')
                                  ->orderBy('detalle_cuentas.id','asc')
                                  ->take(1)
                                  ->get();
        return response()->json([
            'cuenta' => $cuenta
        ]);
    }

    public function listarCuentas(Request $request)
    {
        if (!$request->ajax()) return redirect('/admin');
        $buscar = $request->buscar;
        if ($buscar==''){
            $cuentas = \App\Models\DetalleCuenta::join('cuentas as plan','plan.id','=','detalle_cuentas.cuenta_id')
                                                  ->select('detalle_cuentas.id','detalle_cuentas.code','detalle_cuentas.name','plan.tipo')
                                                  ->orderBy('detalle_cuentas.id','asc')
                                                  ->paginate(10);
        }
        else{
            $cuentas = \App\Models\DetalleCuenta::join('cuentas as plan','plan.id','=','detalle_cuentas.cuenta_id')
                                                    ->where('detalle_cuentas.code', 'like','%'. $buscar . '%')
                                                    ->orWhere('detalle_cuentas.name', 'like','%'. $buscar . '%')
                                                    ->select('detalle_cuentas.id','detalle_cuentas.code','detalle_cuentas.name','plan.tipo')
                                                    ->orderBy('detalle_cuentas.id','asc')
                                                    ->orderBy('id','desc')->paginate(10);
        }
        return response()->json([
            'data' => $cuentas
        ]);
    }

    public function printf_asiento($id){
        $asiento = Asiento::with('items')
                            ->where('id',$id)
                            ->first();
        $vista = view('admin.asientos.pdf', compact('asiento'));
        // return $vista;
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($vista)->setPaper('letter');
        return $pdf->stream();
    }

    public function aprobar_asiento(Request $request,$id){
    //$this->authorize('update', $post);
     $asiento = Asiento::findOrFail($id);
     $estado = Estado::findOrFail($request->estado);
     $asiento->estado_id = $request->estado;
     $asiento->update();
     AsientoUser::create([
         'observacion'=> $request->observacion,
         'user_id' => auth()->user()->id,
         'asiento_id' => $asiento->id,
         'estado_id' => $estado->id
     ]);
     return back()->with([
        'message' => "El asiento, se aprobo correctamente.",
        'alert-type' => 'info'
        ]);
    }
}
