@extends('adminlte::page')
@section('title','Editar Carrera')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="font-weight-bold">Editar Carrera</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {!! Form::model($carrera, ['method' => 'PATCH', 'route' => ['carrera.update', $carrera->CAR_ID], 'autocomplete' => 'off']) !!}
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Editar Carrera</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="lblId">N°:</label>
                            <input type="text" class="form-control" id="txtId" name="txtId" value="{{ $carrera->CAR_ID }}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="lblDescripcion">Descripción:</label>
                            <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" value="{{ $carrera->CAR_NOMBRE }}" maxlength="120" tabindex="1" required>
                        </div>
                        <div class="form-group">
                            <label for="lblEstado">Estado:</label>
                            <select class="form-control" id="CAR_ESTADO" name="CAR_ESTADO" required>
                                <option value="1" {{ $carrera->CAR_ESTADO == 1 ? 'selected' : '' }}>Activo</option>
                                <option value="0" {{ $carrera->CAR_ESTADO == 0 ? 'selected' : '' }}>Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="{{ route('carrera.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@stop
