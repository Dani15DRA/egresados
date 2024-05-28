@extends('adminlte::page')
@section('title','Carrera')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-auto">
            <div class="col-sm-6"><h1>Carrera</h1></div>          
        </div>
    </div>
</section>
<section class="content">       
    <div class="container-fluid">          
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['url' => 'mantenimiento/carrera', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                {{ Form::token() }}
                <div class="card card-primary card-outline">
                    <div class="card-header"><h3 class="card-title"> Nuevo</h3></div>                   
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lblDescripcion">Descripción:</label>
                                    <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" maxlength="120" tabindex="1">
                                </div>
                            </div>
                        </div>      
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                        <a href="{{ URL::action('App\Http\Controllers\Admin\mantenimiento\CarreraAdminController@index') }}"><button type="button" class="btn btn-primary btn-sm">Cancelar</button></a>
                    </div>                        
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@stop
