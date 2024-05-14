@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Información personal</h1>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
@stop

@section('content')
<style>
    .formulario {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        margin-top: 0px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .foto-perfil {
        border-radius: 50%;
        width: 182px;
        height: 182px;
        margin-bottom: 20px;
        cursor: pointer; 
        transition: filter 0.3s;
    }
    .foto-perfil:hover {
        filter: brightness(70%); 
    }

    #input-imagen {
        display: none;
    }

</style>

<form class="formulario">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tDocumento">Tipo de documento</label>
                <select id="tDocumento" name="tDocumento" class="form-control">
                    <option selected disabled>Seleccione</option>
                    <option>DNI</option>
                    <option>Carnet de extranjería</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nDocumento">Número de documento</label>
                <input type="text" id="nDocumento" name="nDocumento" class="form-control" placeholder="Número de documento">
            </div>
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres">
            </div>
            <div class="form-group">
                <label for="aPaterno">Apellido Paterno</label>
                <input type="text" id="aPaterno" name="aPaterno" class="form-control" placeholder="Apellido Paterno">
            </div>
            <div class="form-group">
                <label for="aMaterno">Apellido Materno</label>
                <input type="text" id="aMaterno" name="aMaterno" class="form-control" placeholder="Apellido Materno">
            </div>
            <div class="form-group">
                <label for="origen">País de origen:</label>
                <select id="origen" name="origen" class="form-control">
                    <option selected disabled>Seleccione</option>
                    <option>Perú</option>
                    <option>Venezuela</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Foto de perfil -->
            <label >Seleccionar foto</label>
            <div class="text-center">
            <br>
            <img src="https://via.placeholder.com/200" alt="Foto de perfil" class="foto-perfil" for="foto" id="imagen-usuario"><br>
            </div>
            <input type="file" id="input-imagen" name="imagen" accept="image/*">

            <!-- Resto del formulario -->
            <div class="form-group">
                <label for="genero">Género</label>
                <select id="genero" name="genero" class="form-control">
                    <option selected disabled>Seleccione</option>
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="eCivil">Estado civil</label>
                <select id="eCivil" name="eCivil" class="form-control">
                    <option selected disabled>Seleccione</option>
                    <option>Casado</option>
                    <option>Soltero</option>
                    <option>Divorciado</option>
                    <option>Viudo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nacimiento">Fecha de nacimiento</label>
                <input type="date" id="nacimiento" name="nacimiento" class="form-control">
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-md-6 text-right">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary">Cancelar</button>
        </div>
    </div>
</form>


<script>
    document.getElementById('input-imagen').addEventListener('change', function(e) {
        var file = e.target.files[0];
        var url = URL.createObjectURL(file);
        document.getElementById('imagen-usuario').src = url;
    });

    document.getElementById('imagen-usuario').addEventListener('click', function() {
        document.getElementById('input-imagen').click(); 
    });
</script>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
