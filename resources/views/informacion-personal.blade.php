@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Información personal</h1>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
@stop

@section('content')
<form>
<!--Primera fila -->
    <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputDoc">Tipo de documento</label>
            <select id="inputDoc" class="form-control">
                <option selected> </option>
                <option>DNI</option>
                <option>Carnet de extranjería</option>
            </select>
            </div>
            <div class="form-group col-md-5">
                <label for="inputNDoc">Número de documento</label>
                <input type="text" class="form-control" id="inputNDoc" placeholder="Número de documento">
            </div>
    </div>
<!-- Segunda fila -->
    <div class="form-row">
    <div class="form-group col-md-3">
            <label for="inputNombres">Nombres</label>
            <input type="text" class="form-control" id="inputNombres" placeholder="Nombres">
        </div>        
        <div class="form-group col-md-3">
            <label for="inputAPaterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="inputAPaterno" placeholder="Apellido Paterno">
        </div>
        <div class="form-group col-md-3">
            <label for="inputAMaterno">Apellido Materno</label>
            <input type="text" class="form-control" id="inputAMaterno" placeholder="Apellido Materno">
        </div>
    </div>
<!--Tercera Fila-->
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputGenero">Género</label>
            <select id="inputGenero" class="form-control">
                <option selected> </option>
                <option>Masculino</option>
                <option>Femenino</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="inputECivil">Estado civil</label>
            <select id="inputECivil" class="form-control">
                <option selected> </option>
                <option>Casado</option>
                <option>Soltero</option>
                <option>Divorciado</option>
                <option>Viudo</option>
            </select>
        </div>
    </div>


<!--Cuarta Fila-->
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputECivil">Estado civil</label>
            <select id="inputECivil" class="form-control">
                <option selected> </option>
                <option>Casado</option>
                <option>Soltero</option>
                <option>Divorciado</option>
                <option>Viudo</option>
            </select>
        </div>
    </div>







  <div class="form-group">
    <label for="inputNombres">Nombres</label>
    <input type="text" class="form-control" id="inputNombres" placeholder="Nombres">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-1">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
    

  

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
