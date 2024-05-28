@extends('adminlte::page')
@section('title','Editar Promoción')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-auto">
            <div class="col-sm-6"><h1>Editar Promoción</h1></div>          
        </div>
    </div>
</section>
<section class="content">       
    <div class="container-fluid">          
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($promocion, ['method' => 'PATCH', 'route' => ['promocion.update', $promocion->PRO_ID], 'autocomplete' => 'off']) !!}
                <div class="card card-primary card-outline">
                    <div class="card-header"><h3 class="card-title"> Editar</h3></div>                   
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lblId">N°:</label>                                        
                                    <input type="text" class="form-control" id="txtId" name="txtId" value="{{ $promocion->PRO_ID }}" readonly="readonly">                                      
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lblDescripcion">Descripción:</label>
                                    <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" value="{{ $promocion->PRO_NOMBRE }}" maxlength="120" tabindex="1">
                                </div>
                            </div>
                        </div>      
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lblEstado">Estado:</label>
                                    <select class="form-control" id="PRO_ESTADO" name="PRO_ESTADO">
                                        <option value="1" {{ $promocion->PRO_ESTADO == 1 ? 'selected' : '' }}>Activo</option>
                                        <option value="0" {{ $promocion->PRO_ESTADO == 0 ? 'selected' : '' }}>Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>      
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                        <a href="{{ route('promocion.index') }}"><button type="button" class="btn btn-primary btn-sm">Cancelar</button></a>
                    </div>                        
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@stop


