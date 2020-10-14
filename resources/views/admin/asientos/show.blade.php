@extends('voyager::master')

@section('page_title', 'Ver asiento')

@if(auth()->user()->hasPermission('browse_asientos'))

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-dollar"></i> Asiento N: {{ $asiento->id }}
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid" id="asiento">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-bordered">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Datos del Asiento</h4><br>
                                    <div class="form-group">
                                        <label>Usuario: </label>
                                        <b>{{ $asiento->user->name }}</b>
                                    </div>
                                    <div class="form-group">
                                        <label>Estado: </label>
                                        <b>{{ $asiento->estado->name }}</b>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha Registro: </label>
                                        <b>{{ date('d-m-Y H:i', strtotime($asiento->created_at)) }}</b><br> <small>{{ \Carbon\Carbon::parse($asiento->created_at)->diffForHumans() }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4>Datos Auxiliares</h4><br>
                                    <div class="col-md-6 form-group">
                                        <label>U.F.V :</label>
                                        <b>{{ $asiento->ufv}}</b>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Tipo de Cambio:</label>
                                        <b>{{ $asiento->tipo_cambio}}</b>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <h4 class="text-center">Detalle de Asientos</h4>
                                    <div class="clearfix"></div>
                                    <hr style="margin-top:0px">
                                    <div class="form-group row border">
                                        <div class="table-responsive col-md-12">
                                            <div style="max-height:500px; overflow-y:auto">
                                                <table class="table table-bordered table-striped table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Codigo</th>
                                                            <th>Cta:</th>
                                                            <th>Debe</th>
                                                            <th>Haber</th>
                                                            <th>Glosa:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($asiento->items as $item)
                                                        <tr>
                                                            <td>{{ $item->code }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->debe }}</td>
                                                            <td>{{ $item->haber }}</td>
                                                            <td>{{ $item->glosa }}</td>
                                                        </tr>
                                                        @empty
                                                        <tr colspan="6" align="center"> no existen datos</tr>
                                                        @endforelse

                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="2">
                                                                Totales
                                                            </td>
                                                            <td align="center">
                                                                <span>
                                                                    {{ $asiento->total_debe }}
                                                                </span>
                                                            </td>
                                                            <td align="center">
                                                                <span>
                                                                    {{ $asiento->total_haber }}
                                                               </span>
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Glosa</label>
                                    <p>{{ $asiento->glosa }}</p>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="3" class="text-center h3">Historial</th>
                                                </tr>
                                                <tr>
                                                    <th>Usuario</th>
                                                    <th>Accion</th>
                                                    <th>Observaciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($asiento->historial as $item)
                                                    <tr>
                                                        <td>{{ $item->user->name }}</td>
                                                        <td>{{ $item->estado->name }}</td>
                                                        <td>{{ $item->observacion }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="3" class="text-center">No hay datos registrados</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="{{url()->previous()}}" class="btn btn-default">Atras</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@stop

@section('css')

@stop

@section('javascript')
<script src="{{ url('plugins/formatSelect2.js') }}"></script>
@stop
@else
    @section('content')
        @include('layouts.error')
    @endsection
@endif
