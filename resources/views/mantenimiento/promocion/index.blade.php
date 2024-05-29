@extends('adminlte::page')
@section('title', 'Promoción')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 style="color: #333; font-weight: 700;">Promoción</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#" style="color: #333;">Mantenimiento</a></li>
                    <li class="breadcrumb-item active" style="color: #333;">Promoción</li>
                </ol>
            </div>
        </div>
    </div>
</section>

@include('flash::message')
@section('css')
<style>
    .select2-container--bootstrap4 .select2-selection {
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }
    .select2-container--bootstrap4 .select2-selection--single .select2-selection__rendered {
        line-height: 2.25rem;
    }
    .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
        background-color: #fff;
        color: black;
    }
    .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice__remove {
        color: black;
        margin-right: 4px;
    }
</style>
@stop

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline" style="border-top: 3px solid #333;">
                    <div class="card-header">
                        <h3 class="card-title" style="color: #333;">Buscar Promoción</h3>
                    </div>
                    <div class="card-body">
                        <form method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" id="searchText" 
                                    name="searchText" placeholder="Buscar por descripción" value="{{$searchText}}" autocomplete="off">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-dark" style="background-color: #333; border-color: #333;">
                                        <i class="fa fa-search"></i> Buscar
                                    </button>
                                    <button type="button" class="btn btn-outline-dark" id="btn_limpiar" style="margin-left: 5px;">
                                        <i class="fa fa-times"></i> Limpiar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Button to Open Creation Modal -->
    <button type="button" class="btn btn-primary" style="background-color: cornflowerblue ; border-color: cornflowerblue;" data-toggle="modal" data-target="#createModal">
        <i class="fa fa-plus"></i> Nuevo
    </button>
    <br> <br> 

        

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline" style="border-top: 3px solid #333;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tableListado" class="table table-hover" style="width:100%; color: #333;">
                                <thead>
                                    <tr style="background-color: #333; color: white;">
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                        <th width="120" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Aquí se llenarán los datos de la tabla -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #333; color: white;">
                <h4 class="modal-title"><i class="fa fa-exclamation-triangle"></i> Advertencia</h4>
                <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
            </div>
            <div class="modal-body" style="color: #333;">
                <p>¿Desea anular el registro seleccionado?</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_confirm" class="btn btn-dark btn-round" data-dismiss="modal" style="background-color: #333; border-color: #333;">
                    <i class="fa fa-check"></i> Continuar
                </button>
                <button type="button" id="btn_cancel" class="btn btn-outline-dark btn-round" data-dismiss="modal">
                    <i class="fa fa-times"></i> Cerrar
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modal de Edición -->
<div id="editModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #333; color: white;">
                <h5 class="modal-title">Editar Promoción</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" id="editPromocionId" name="PRO_ID">
                    <div class="form-group">
                        <label for="editDescripcion">Descripción:</label>
                        <input type="text" class="form-control" id="editDescripcion" name="txtDescripcion" maxlength="120">
                    </div>
                    <div class="form-group">
                        <label for="editEstado">Estado:</label>
                        <select class="form-control" id="editEstado" name="PRO_ESTADO">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editCarreras">Carreras:</label>
                        <select class="form-control select2" id="editCarreras" name="carreras[]" multiple="multiple" style="width: 100%;">
                            <!-- Las opciones se llenarán dinámicamente con JavaScript -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Nueva Promoción</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de Creación -->
                {!! Form::open(['url' => 'mantenimiento/promocion', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                {{ Form::token() }}
                <div class="form-group">
                    <label for="txtDescripcion">Descripción:</label>
                    <input type="text" class="form-control" id="txtDescripcion1" name="txtDescripcion1" maxlength="120">
                </div>
                <!-- Otros Campos del Formulario -->

                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn_canc1">Cancelar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@stop
@section('js')
<script>
    $(document).ready(function() {
        $("#btn_limpiar").on("click", function(event) {
            $("#searchText").val("");
        });
    });

    $(document).ready(function() {
        $("#btn_canc1").on("click", function(event) {
            $("#txtDescripcion1").val("");
        });
    });

    $(function () {
        var userDataTable = $('#tableListado').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
            },
            ajax: {
                url: "{{ url('/') }}/getPromocion",
                data: function (d) {
                    d.searchText = $('input[name=searchText]').val();
                }
            },
            columns: [
                {data: 'PRO_NOMBRE', name: 'Descripcion'},
                {data: 'PRO_ESTADO', name: 'Estado', className: 'text-center'},
                {data: 'Actions', name: 'Actions', orderable: false, searchable: false, className: 'text-center'},
            ]
        });

        $(document).ready(function() {
                    $('.select2').select2({
                theme: 'bootstrap4'
            });

    // Editar Promoción
    $('#tableListado').on('click', '.editPromocion', function() {
        var id = $(this).data('id');
        $.ajax({
            url: "{{ url('/mantenimiento/promocion') }}/" + id + "/edit",
            type: 'GET',
            success: function(response) {
                $('#editPromocionId').val(response.pro.PRO_ID);
                $('#editDescripcion').val(response.pro.PRO_NOMBRE);
                $('#editEstado').val(response.pro.PRO_ESTADO);

                var selectCarreras = $('#editCarreras');
                selectCarreras.empty(); // Limpia el select

                $.each(response.carreras, function(index, carrera) {
                    var selected = response.carrerasAsignadas.includes(carrera.CAR_ID) ? 'selected' : '';
                    selectCarreras.append('<option value="' + carrera.CAR_ID + '" ' + selected + '>' + carrera.CAR_NOMBRE + '</option>');
                });

                $('#editModal').modal('show');
            }
        });
    });

    // Enviar formulario de edición
    $('#editForm').on('submit', function(event) {
        event.preventDefault();
        var id = $('#editPromocionId').val();
        $.ajax({
            url: "{{ url('/mantenimiento/promocion') }}/" + id,
            type: 'PATCH',
            data: $(this).serialize(),
            success: function(response) {
                $('#editModal').modal('hide');
                Swal.fire('Atención', 'Datos actualizados satisfactoriamente!', 'success');
                $('#tableListado').DataTable().ajax.reload();
            },
            error: function(response) {
                Swal.fire('Error', 'No se pudieron actualizar los datos', 'error');
            }
        });
    });
});


        // Eliminar Promoción
        $('#tableListado').on('click', '.deletePromocion', function() {
            var id = $(this).data('id');
            $('#myModal').modal('show').on('click', '#btn_confirm', function(e) {
                $.ajax({
                    url: "{{ url('/') }}/delPromocion",
                    type: 'post',
                    data: {_token: "{{ csrf_token() }}", id: id},
                    success: function(response) {
                        Swal.fire('Atención', 'Datos anulados satisfactoriamente!', 'success');
                        userDataTable.ajax.reload();
                    }
                });
            });

            $("#btn_cancel").on('click', function(e) {
                e.preventDefault();
                $('#myModal').modal('toggle');
            });
        });
    });

    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@stop

