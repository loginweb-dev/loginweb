@extends('voyager::master')

@section('page_title', 'Editar asiento')

@if(auth()->user()->hasPermission('edit_asientos'))

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-dollar"></i> Editar Asiento Contable
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
                                    <h4>Busqueda Cuentas</h4>
                                    <br>
                                    <div class="form-group">
                                        <label>Cuentas <span style="color:red;"v-show="form.cuenta_id==0">(*Seleccione)</span></label>
                                        <div class="form-inline">
                                            <input  type="text"
                                                    v-model="form.codigobuscar"
                                                    class="form-control"
                                                    @keyup.enter="buscarCuenta()"
                                                    placeholder="Ingrese codigo de la cuenta"
                                                    size="50">
                                            <button type="button" title="Buscar" data-toggle="modal" data-target="#modalcuentas" class="btn btn-primary">...</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4>Datos Auxiliares</h4><br>
                                    <div class="col-md-2 form-group">
                                        <label>U.F.V.</label>
                                       <input type="number" class="form-control" v-model="form1.ufv">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label>Tipo de Cambio:</label>
                                       <input type="number" class="form-control" v-model="form1.tipo_cambio">
                                    </div>
                                    <div class="col-md-8">
                                        <label>Estado</label>
                                        <select v-model="form1.estado_id" class="form-control">
                                            <option disabled value="">Seleccione un elemento</option>
                                            <option v-for="item in form.estados" :value="item.id" :key="item.id">
                                                @{{ item.description }}
                                            </option>
                                        </select>
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
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody v-if="form1.items.length>0">
                                                        <tr v-for="cuenta in form1.items">
                                                            <td v-text="cuenta.code">
                                                            </td>
                                                            <td v-text="cuenta.name">
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control" v-model="cuenta.debe" @keyup="cuenta.haber = 0.00">
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control" v-model="cuenta.haber" @keyup="cuenta.debe = 0.00">
                                                            </td>
                                                            <td>
                                                                <textarea rows="3" class="form-control" v-model="cuenta.glosa">
                                                                </textarea>
                                                            </td>
                                                            <td>
                                                                <button @click="remove(cuenta)" type="button" class="btn btn-danger btn-sm">
                                                                    <i class="voyager-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody v-else>
                                                        <tr>
                                                            <td colspan="6" align="center">
                                                                No hay cuentas agregadas
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot v-if="form1.items.length>0">
                                                        <tr>
                                                            <td colspan="2">
                                                                Totales
                                                            </td>
                                                            <td align="center">
                                                                <span :class="totalesIguales? 'label label-info' : 'label label-danger'">
                                                                     @{{ totalDebe }}
                                                                </span>
                                                            </td>
                                                            <td align="center">
                                                                <span :class="totalesIguales? 'label label-info' : 'label label-danger'">
                                                                    @{{ totalHaber }}
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
                                    <textarea name="glosa"  rows="5" class="form-control" v-model="form1.glosa">
                                    </textarea>
                                    <input type="button" value="Registrar" class="btn btn-info" @click="update" :disabled="isProcessing">
                                    <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <!--Inicio del modal agregar/actualizar-->
     <div class="modal fade" tabindex="-1" tabindex="-1" id="modalcuentas" role="dialog">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" v-text="form.tituloModal"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-inline">
                            <input type="text" v-model="form.buscar" @keyup.enter="listarCuentas(form.buscar)" class="form-control" placeholder="escriba codigo o nombre..." size="30">
                            <button type="submit" @click="listarCuentas(form.buscar)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th>Código</th>
                                    <th>Descripcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="cuenta in form.arrayCuentas" :key="cuenta.id">
                                    <td>
                                        <button type="button" @click="agregarDetalleModal(cuenta)" class="btn btn-success btn-sm" title="agregar cuenta">
                                        <i class="voyager-list-add"></i>
                                        </button>
                                    </td>
                                    <td v-text="cuenta.code"></td>
                                    <td v-text="cuenta.name"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--Fin del modal-->
    </div>
@stop

@section('css')

@stop

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
    <script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
    <script src="{{ url('plugins/formatSelect2.js') }}"></script>
    <script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';
        window._form1 = {!! $asiento->toJson() !!};
        window._form = {
			tituloModal: 'Seleccione uno o varias cuentas',
            //variables para agregar al detalle de lacuenta
            cuenta_id: 0,
            //fecha: '',
            code: '',
            cuenta:null,
            glosaitem: '',
            debe: 0.00,
            haber: 0.00,
            tipo: '',
            //fin-variables
            codigobuscar:'',
            ufv: 0,
            tipo_cambio: 6.96,
            comprobante: null,
			glosa: '',
			items: [],
			cuentas:[],
			arrayDetalle:[],
            buscar: '',
            arrayCuentas:[],
            estados: {!! $estados->toJson() !!},
        };
</script>
<script src="{{ asset('js/asiento.js') }}"></script>
@stop

@else
    @section('content')
        @include('layouts.error')
    @endsection
@endif
