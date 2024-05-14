@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dirección</h1>
@stop

@section('content')
<form>
<!-- Primera fila -->
  <div class="form-row">
    <div class="form-group col-md-9">
      <label for="inputTipo">Tipo de Domicilio      </label>
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
    <div class="form-group col-md-3">
      <label for="inputDepartamento">Departamento</label>
      <input type="text" class="form-control" id="inputDepartamento">
    </div>
    <div class="form-group col-md-3">
      <label for="inputProvincia">Provincia</label>
      <input type="text" class="form-control" id="inputProvincia">
    </div>
    <div class="form-group col-md-3">
      <label for="inputDistrito">Distrito</label>
      <input type="text" class="form-control" id="inputDistrito">
    </div>
  </div>
<!-- Tercera fila -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputTipoVia">Tipo Vía</label>
      <select id="inputTipoVia" class="form-control">
        <option selected>Elegir...</option>
        <option>Calle</option>
        <option>Avenida</option>
        <option>Urbanización</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputNombreVia">Nombre de Vía</label>
      <input type="text" class="form-control" id="inputNombreVia">
    </div>
    <div class="form-group col-md-3">
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

  <div class="form-group col-md-1">
    <label for="inputInterior">Interior</label>
    <input type="text" class="form-control" id="inputInterior">
  </div>

  <div class="form-group col-md-1">
    <label for="inputManzana">Manzana</label>
    <input type="text" class="form-control" id="inputManzana">
  </div>

  <div class="form-group col-md-1">
    <label for="inputLote">Lote</label>
    <input type="text" class="form-control" id="inputLote">
  </div>

  <div class="form-group col-md-1">
    <label for="inputKm">Km</label>
    <input type="text" class="form-control" id="inputKm">
  </div>

  <div class="form-group col-md-1">
    <label for="inputBloque">Bloque</label>
    <input type="text" class="form-control" id="inputBloque">
  </div>

  <div class="form-group col-md-1">
    <label for="inputEtapa">Etapa</label>
    <input type="text" class="form-control" id="inputEtapa">
  </div>
</div>
<!-- Quinta fila -->
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputTipozona">Tipo Zona</label>
      <select id="inputTipozona" class="form-control">
        <option selected>Elegir...</option>
        <option>...</option>
        <option>...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-5">
    <label for="inputNomzona">Nombre de Zona</label>
    <input type="text" class="form-control" id="inputNomzona">
  </div>
    </div>
<!-- Sexta fila -->
  <div class="form-group col-md-9">
    <label for="inputReferencia">Referencia:</label>
    <input type="email" class="form-control" id="inputReferencia">
    </div>
  </div>
<!-- Botones -->
<div class="form-group col">
  <div class="row">
    <div class="col">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-secondary">Cancelar</button>
    </div>
  </div>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop