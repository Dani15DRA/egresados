@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dirección</h1>
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
                <!-- Primera fila -->
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputTipo">Tipo de Domicilio</label>
                    <select id="inputTipo" class="form-control">
                      <option selected>Elegir...</option>
                      <option>Casa</option>
                      <option>Departamento</option>
                      <option>...</option>
                    </select>
                  </div>
                </div>
                <!-- Segunda fila -->
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputDepartamento">Departamento</label>
                    <input type="text" class="form-control" id="inputDepartamento">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputProvincia">Provincia</label>
                    <input type="text" class="form-control" id="inputProvincia">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputDistrito">Distrito</label>
                    <input type="text" class="form-control" id="inputDistrito">
                  </div>
                </div>
                <!-- Tercera fila -->
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputTipoVia">Tipo Vía</label>
                    <select id="inputTipoVia" class="form-control">
                      <option selected>Elegir...</option>
                      <option>Calle</option>
                      <option>Avenida</option>
                      <option>Urbanización</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputNombreVia">Nombre de Vía</label>
                    <input type="text" class="form-control" id="inputNombreVia">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputNumVia">Número</label>
                    <input type="text" class="form-control" id="inputNumVia">
                  </div>
                </div>
                <!-- Cuarta fila -->
                <div class="form-row">
                  <div class="form-group col-md-1">
                    <label for="inputPiso">Piso</label>
                    <input type="text" class="form-control" id="inputPiso">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputInterior">Interior</label>
                    <input type="text" class="form-control" id="inputInterior">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputManzana">Manzana</label>
                    <input type="text" class="form-control" id="inputManzana">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputLote">Lote</label>
                    <input type="text" class="form-control" id="inputLote">
                  </div>
                  <div class="form-group col-md-1">
                    <label for="inputKm">Km</label>
                    <input type="text" class="form-control" id="inputKm">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputBloque">Bloque</label>
                    <input type="text" class="form-control" id="inputBloque">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputEtapa">Etapa</label>
                    <input type="text" class="form-control" id="inputEtapa">
                  </div>
                </div>
                <!-- Quinta fila -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputTipozona">Tipo Zona</label>
                    <select id="inputTipozona" class="form-control">
                      <option selected>Elegir...</option>
                      <option>...</option>
                      <option>...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputNomzona">Nombre de Zona</label>
                    <input type="text" class="form-control" id="inputNomzona">
                  </div>
                </div>
                <!-- Sexta fila -->
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputReferencia">Referencia:</label>
                    <input type="email" class="form-control" id="inputReferencia">
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