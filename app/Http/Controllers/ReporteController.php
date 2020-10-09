<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Asiento;

class ReporteController extends Controller
{
    public function lbdiario_index(){
        return view('admin.reportes.diario.index');
    }

    public function lbdiario_generate(Request $request){
        $fecha = Carbon::parse($request->fecha);
        $diarios = Asiento::with(['user','items.cuenta'])
                            ->whereDay('created_at',$fecha->day)
                            ->get();

        if ($request->printf == 'imprimir') {
            $vista = view('admin.reportes.diario.pdf', compact('diarios','fecha'));
            $pdf = \App::make('dompdf.wrapper');
            //  $pdf->loadHTML($vista);
            $pdf->loadHTML($vista)->setPaper('letter');
            return $pdf->stream();
        }

        return view('admin.reportes.diario.diario_list', compact('diarios','fecha'));
    }

    public function lbmayor_index(){
        return view('admin.reportes.mayor.index');
    }

    public function lbmayor_generate(Request $request){
        $f_inicio = $request->inicio;
        $f_fin    = $request->fin;

        $mayores = Asiento::selectRaw('det.code,det.name,sum(det.debe) AS Debe,sum(det.haber) AS Haber')
                        ->join('detalle_asientos as det', 'det.asiento_id', '=', 'asientos.id')
                        ->whereBetween('asientos.created_at',[$f_inicio,$f_fin])
                        ->groupBy('det.code','det.name')
                        ->get();
        if ($request->printf == 'imprimir') {
            $vista = view('admin.reportes.mayor.pdf', compact('mayores','f_inicio','f_fin'));
            $pdf = \App::make('dompdf.wrapper');
            //  $pdf->loadHTML($vista);
            $pdf->loadHTML($vista)->setPaper('letter');
            return $pdf->stream();
        }

        return view('admin.reportes.mayor.mayor_list', compact('mayores','f_inicio','f_fin'));
    }

    public function balancegnral_index(){
        return view('admin.reportes.balance.index');
    }

    public function balancegnral_generate(Request $request){
        $f_inicio = $request->inicio;
        $f_fin    = $request->fin;

        $balance = Asiento::selectRaw('det.code,det.name,sum(det.debe) AS Debe,sum(det.haber) AS Haber,det.tipo')
                        ->join('detalle_asientos as det', 'det.asiento_id', '=', 'asientos.id')
                        ->whereBetween('asientos.created_at',[$f_inicio,$f_fin])
                        ->groupBy('det.code','det.name','det.tipo')
                        ->get();
        if ($request->printf == 'imprimir') {
            $vista = view('admin.reportes.balance.pdf', compact('balance','f_inicio','f_fin'));
            $pdf = \App::make('dompdf.wrapper');
            //  $pdf->loadHTML($vista);
            $pdf->loadHTML($vista)->setPaper('letter');
            return $pdf->stream();
        }

        return view('admin.reportes.balance.balance_list', compact('balance','f_inicio','f_fin'));
    }
}
