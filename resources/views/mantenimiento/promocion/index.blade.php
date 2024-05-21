@extends('adminlte::page')
@section('title','promocion')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Promoción</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Mantenimiento</a></li>
                  <li class="breadcrumb-item active">Promoción</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">         
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <div class="card-body p-0">
                    <form method="GET">                    
                        <div class="input-group">
                            <input type="text" class="form-control" id="searchText" 
                                  name="searchText" placeholder="Buscar por descripción" value="{{$searchText}}">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-filter"></i> Buscar
                                </button>
                            </span>
                        </div>                    
                    </form>
                </div>                 
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <a href="./create"><button class="btn btn-primary">
                            <i class="fa fa-file"></i> Nuevo</button></a>
                        <button class="btn btn-default" id="btn_limpiar">
                            <i class="fa fa-eraser"></i> Limpiar</button>    
                    </div>
                </div>                    
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                 
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tableListado" class="table table-striped table-bordered table-condensed table-hover"
                         style="width:100%">
                            <thead>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th width="120" class="text-center">Acciones</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-exclamation-triangle"></i> Advertencia</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Desea anular el registro seleccionado</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn_confirm" class="btn btn-primary btn-round" data-dismiss="modal">
                        <i class="fa fa-arrow-circle-right"></i> Continuar</button>
                    <button type="button" id="btn_cancel" class="btn btn-danger btn-round" data-dismiss="modal">
                        <i class="fa fa-times"></i> Cerrar</button>
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

    $(function () {
        var userDataTable = $('#tableListado').DataTable({
            processing  : true,
            serverSide  : true,
            searching   : false,
            search: {
                regex: true
            },
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
            },
            ajax: {
                    url: "{{ url('/') }}/getTipoOperacion",
                        data: function (d) {
                        d.searchText = $('input[name=searchText]').val();
                    }
                },
            columns: [
                {data: 'TOP_DESCRIPCION', name: 'Descripcion'},
                {data: 'TOP_ESTADO', name: 'Estado', sClass:'text-center'},
                {data: 'Actions', name: 'Actions', orderable:false, serachable:false, sClass:'text-center'},
            ]
        });
     });   

    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@stop