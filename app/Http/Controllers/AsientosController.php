<?php

namespace App\Http\Controllers;

use App\Models\Asiento;
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
        $asientos = Asiento::whereRaw($query)
                            ->paginate(10);
        return view('admin.asientos.index', compact('asientos', 'search'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Asiento $asiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asiento $asiento)
    {
        //
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
}
