@extends('adminlte::page')
<<<<<<< HEAD
=======
@section('title', 'Egresado')
>>>>>>> daniela

@section('title', 'Dashboard')

@section('content_header')
<h1>Información Académica</h1>
@stop
@section('content')
<html>
  <head>
    <title>Direccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos -->
    <style>
    .formulario {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      margin-top: 50px;
      margin-bottom: 50px;
      max-width: 1000px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .botones {
      text-align: center;
    }
    </style>
    </head>
    <body>
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <div class="formulario">
            <h1>Información académica Technical School</h1>
            <form>
              <!-- Primera fila -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAño">Año de estudio</label>
                  <input type="text" class="form-control" id="inputAño">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputProm">promocion</label>
                  <input type="text" class="form-control" id="inputProm">
                </div>
              </div>
              <!-- Segunda fila -->
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEsp">Especialidad</label>
                  <select id="inputEsp" class="form-control">
                    <option selected>Elegir...</option>
                    <option>Administración Industrial</option>
                    <option>Mecatrónica Industrial</option>
                    <option>Ingenieria de software con Inteligencia Artificial</option>
                  </select>
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
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Información después del Technical School -->
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="formulario">
          <h1>Información después del Technical School</h1>
          <form>
            <!-- Primera fila: Nivel -->
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputNivel">Nivel</label>
                <input type="text" class="form-control" id="inputNivel">
              </div>
            </div>
            <!-- Segunda fila: Institución -->
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputInstitucion">Institución</label>
                <input type="text" class="form-control" id="inputInstitucion">
              </div>
            </div>
            <!-- Tercera fila: Carrera y País -->
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCarrera">Carrera</label>
                <input type="text" class="form-control" id="inputCarrera">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPais">País</label>
                <input type="text" class="form-control" id="inputPais">
              </div>
            </div>
            <!-- Cuarta fila: Periodo y Actualidad -->
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputInicio">Periodo Inicio</label>
                <input type="date" class="form-control" id="inputInicio">
              </div>
              <div class="form-group col-md-5">
                <label for="inputTermino">Periodo Término</label>
                <input type="date" class="form-control" id="inputTermino">
              </div>
              <div class="form-group col-md-2 d-flex align-items-end">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="inputActualidad">
                  <label class="form-check-label" for="inputActualidad">
                    Actualidad
                  </label>
                </div>
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