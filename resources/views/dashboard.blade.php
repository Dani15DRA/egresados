@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Contacto</h1>
@stop

@section('content')
<html>
  <head>
    <title>Direccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos -->
    <style>
    .formulario{
      background-color: #f8f9fa; 
      padding: 20px; 
      border-radius: 10px; 
      margin top: 50px;
      margin-bottom: 50px;
      max-width: 1000px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .botones{
      text-align: center;
    }
    </style>
    </head>
    <!-- Formulario -->
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="formulario">
                        <form>
                            <!-- Formulario -->
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputCorreo">Correo Electronico</label>
                                    <input type="text" class="form-control" id="inputCorreo">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputCelu">Celular</label>
                                    <input type="text" class="form-control" id="inputCelu">
                                </div>
                            </div>
                            <!-- Botones -->
                            <div class="botones">
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-secondary">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop