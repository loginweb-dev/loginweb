@extends('voyager::master')

@section('page_title', 'Asientos')

@if(auth()->user()->hasPermission('browse_asientos'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-dollar"></i> Asientos Contables
        </h1>
        @can('create', \App\Models\Asiento::class)
            <a href="{{ route('asientos.create') }}" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>Crear</span>
            </a>
        @endcan
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <form id="form-search" class="form-search">
                            <div id="search-input">
                                <div class="input-group col-md-12">
                                    <input type="search" name="search" class="form-control" placeholder="Buscar" name="s" value="{{ $search }}" style="border: transparent !important">
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-lg" type="submit">
                                            <i class="voyager-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Fecha</th>
                                        <th>Glosa</th>
                                        <th>Comprobante</th>
                                        <th>Estado</th>
                                        <th class="text-right">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                     $ultimo = \App\Models\Estado::latest()->first()->id;
                                    @endphp
                                    @forelse ($asientos as $asiento)
                                    @can('viewAny', $asiento)
                                    <tr>
                                        <td>
                                            {{ $asiento->user->name }} <br>
                                            <b><small>{{ $asiento->user->email }}</small></b>
                                        </td>
                                        <td>{{ date('d-m-Y H:i', strtotime($asiento->created_at)) }} <br> <small>{{ \Carbon\Carbon::parse($asiento->created_at)->diffForHumans() }}</small> </td>
                                        <td>{{ $asiento->glosa}}</td>
                                        <td>
                                            @if($asiento->comprobante)
                                            <a href="#" title="Ver" class="btn btn-link view" data-imagen="{{ $asiento->comprobante }}">
                                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Ver comprobante</span>
                                            </a>
                                            @else
                                            <label>Sin Imagen</label>
                                            @endif
                                        </td>
                                        <td>{{ $asiento->estado->name}}</td>
                                        <td class="no-sort no-click bread-actions text-right">
                                            @can('acciones', \App\Models\Asiento::class)
                                            <a href="javascript:;" title="Ver" class="btn btn-sm btn-success aprobe" data-id="{{$asiento->id}}">
                                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Otras Acciones</span>
                                            </a>
                                            @endcan
                                            @can('update', $asiento)
                                            <a href={{ route('asientos.edit',$asiento) }} title="Ver" class="btn btn-sm btn-warning">
                                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
                                            </a>
                                            @endcan

                                            {{-- <button title="Imprimir" onclick="generar_recibo({{ $asiento->id }})" class="btn btn-sm btn-primary edit">
                                                <i class="voyager-polaroid"></i> <span class="hidden-xs hidden-sm">Imprimir</span>
                                            </button>--}}
                                            <a href="{{ route('asientos.show',$asiento) }}" class="btn btn-sm btn-success pull-rigth historial">
                                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Ver</span>
                                            </a>
                                            @if (!$asiento->comprobante)
                                                <a href="javascript:;" title="agregar comprobante" class="btn btn-sm btn-info pull-rigth add" data-id="{{$asiento->id}}">
                                                    <i class="voyager-list-add"></i> <span class="hidden-xs hidden-sm">Comprobante</span>
                                                </a>
                                            @endif
                                            @can('view', $asiento)
                                            <form method="post" action="{{ route('printf_asiento',$asiento->id) }}" style="display:inline" target="__blank">
                                                {{ csrf_field() }}
                                                <button id="printf" type="submit" class="btn btn-sm btn-danger pull-rigth">Imprimir <i class="voyager-polaroid"></i></button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endcan
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No hay registros</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="pull-right">
                            {{$asientos->links() }}
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     {{-- modal para agregar comprobante --}}
     <div class="modal modal-info fade" tabindex="-1" id="modal_comprobante" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-archive"></i>Agregar Comprobante</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="add_form" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                                    <label for="">Seleccione el archivo</label>
                                    <input type="file" name="archivo" accept="image/png, image/jpeg">
                        </div>
                        <input type="submit" class="btn btn-info pull-right delete-confirm" value="{{ __('Si registrar') }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{-- modal para aprobar asiento --}}
     <div class="modal modal-info fade" tabindex="-1" id="modal_aprobacion" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-archive"></i>Selecciona una accion!!</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="aprob_form" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Seleccione</label>
                            <select name="estado" class="form-control">
                                @foreach(\App\Models\Estado::pluck('name','id') as $id => $estado)
									<option value="{{ $id }}">{{ $estado }} </option>
								@endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Observacion</label>
                            <textarea name="observacion"  rows="5" class="form-control">
                            </textarea>
                        </div>
                        <input type="submit" class="btn btn-info pull-right delete-confirm" value="Registrar">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{-- modal para ver comprobante --}}
    <div class="modal modal-info fade" tabindex="-1" id="modal_imagen" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-archive"></i>Comprobante</h4>
                </div>
                <div class="modal-body">
                    <img src="" id="img-comprobante" style="width:100%;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{-- Imprimir --}}
    <form id="form-print" action="{{ url('admin/recibo/aportacion') }}" method="post" target="_blank">
        @csrf
        <input type="hidden" name="id">
    </form>

@stop

@section('css')

@stop

@section('javascript')
    <script>
        $('td').on('click', '.add', function (e) {
            $('#add_form')[0].action = '{{route('agregarcomprobante', ['id' => '__id'])}}'.replace('__id', $(this).data('id'));
            $('#modal_comprobante').modal('show');
        });
        $('td').on('click', '.view', function (e) {
            $('#modal_imagen').modal('show');
            $('#img-comprobante').attr('src','{{ url('storage') }}/'+$(this).data('imagen'));
        });
        $('td').on('click', '.aprobe', function (e) {
            $('#aprob_form')[0].action = '{{route('aprobar_asiento', ['id' => '__id'])}}'.replace('__id', $(this).data('id'));
            $('#modal_aprobacion').modal('show');
        });

        @if($message)
            toastr.success('Bien hecho!', 'Asiento editado correctamente')
        @endif
    </script>
@stop

@else
    @section('content')
        @include('layouts.error')
    @endsection
@endif
