<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Autenticación</title>
    <!-- CSS de AdminLTE -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background-image: url('/images/fondo.jpg'); 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 30px 0 40px;
        }

        img {
            height: 40px;
            margin-top: 5px;
            margin-bottom: 22px;
        }

        span {
            font-size: 12px;
            padding: 20px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #FF4853;
            background-color: #FF4853;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            margin-top: 13px;
        }

        button:hover{
            background-color: #DE424B;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 910px;
            height: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .inicio-sesion-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .inicio-sesion-container {
            transform: translateX(100%);
        }

        .registro-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .registro-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: mostrar 0.6s;
        }

        @keyframes mostrar {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #FF416C;
            background: -webkit-linear-gradient(to right, #FF4940, #FF2C59);
            background: linear-gradient(to right, #FF4940, #FF2C59);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-izquierdo {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-izquierdo {
            transform: translateX(0);
        }

        .overlay-derecho {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-derecho {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
        }
    </style>


</head>

<body>
    <div class="container" id="contenedor">


    <!-- REGISTRARSE -->


        <div class="form-container registro-container">
            <form id="formulario-registro" action="{{ route('register') }}" method="POST">
                @csrf
                <img src="/images/logo-ts.png" alt="Logo">
                <h1>Crear Cuenta</h1>
                <span>Por favor llenar los siguientes campos con sus datos correctos para el registro</span>
                 
                
                
                <!-- Paso 1 (promoción y carrera) -->
            <div id="paso-registro-1">
                <div class="form-group">
                            <select id="promocion" name="promocion" class="form-control" required>
                                <option selected disabled>Seleccione promoción</option>
                                <option>Promoción XXI</option>
                                <option>Promoción XX</option>
                            </select>
                    <div class="invalid-feedback">
                        Por favor seleccione una promoción.
                    </div>
                </div>

                    
                <div class="form-group">
                            <select id="carrera" name="carrera" class="form-control" required>
                                <option selected disabled>Seleccione carrera</option>
                                <option>Mecatrónica Industrial</option>
                                <option>Administración Industrial</option>
                            </select>
                        <div class="invalid-feedback">
                            Por favor seleccione una carrera.
                        </div>
                </div>

                    <button type="button" id="siguientePaso">Siguiente</button>
            </div>

                <!-- Paso 2 (Datos generales)-->
                <div id="paso-registro-2" style="display: none;">
                    <div class="form-group">
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" required />
                        @error('nombre')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="segundo_nombre" placeholder="Segundo Nombre" class="form-control @error('segundo_nombre') is-invalid @enderror" value="{{ old('segundo_nombre') }}" required />
                        @error('segundo_nombre')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="paterno" placeholder="Apellido paterno" class="form-control @error('paterno') is-invalid @enderror" value="{{ old('paterno') }}" required />
                        @error('paterno')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="materno" placeholder="Apellido materno" class="form-control @error('materno') is-invalid @enderror" value="{{ old('materno') }}" required />
                        @error('materno')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="dni" placeholder="Número de DNI" class="form-control @error('dni') is-invalid @enderror" value="{{ old('dni') }}" required />
                        @error('dni')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="email" name="correo" placeholder="Correo Electrónico" class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo') }}" required />
                        @error('correo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" name="contraseña" placeholder="Contraseña" class="form-control @error('contraseña') is-invalid @enderror" required />
                        @error('contraseña')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" name="confirmar_contraseña" placeholder="Confirmar Contraseña" class="form-control" required />
                    </div>

                    <button type="submit">Registrarse</button>


                </div>
            </form>




        <!--INICIAR SESION-->


        </div>
        <div class="form-container inicio-sesion-container">
        <form action="{{ route('login') }}" method="POST">

            @csrf
            <img src="/images/logo-ts.png" alt="Logo">
            <h1>Iniciar Sesión</h1>
                <span>Ingresar con una cuenta existente</span>
                <input type="email" name="email" placeholder="Correo" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" name="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" required />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                <button type="submit">Iniciar Sesión</button>

            </form>
        </div>


        <!--OVERLAYS(CARTAS MOVIBLES)-->


        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-izquierdo">
                    <h1>¿Ya tienes una cuenta?</h1>
                    <p>Si ya eres parte de nuestra comunidad, inicia sesión con una cuenta de egresado para acceder a todas las funcionalidades de nuestra plataforma.</p>
                    <button class="ghost" id="iniciarSesion">Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-derecho">
                    <h1>¿Nuevo por aquí?</h1>
                    <p>Únete a nuestra comunidad de egresados y descubre un mundo de posibilidades. Regístrate en nuestra plataforma para conectar con otros egresados, explorar oportunidades laborales y compartir experiencias.</p>
                    <button class="ghost" id="registrarse">Registrarse</button>
                </div>
            </div>
        </div>


    </div>

 


    <!-- JS de AdminLTE -->
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script>
    const botonRegistrarse = document.getElementById('registrarse');
    const botonIniciarSesion = document.getElementById('iniciarSesion');
    const contenedor = document.getElementById('contenedor');

    botonRegistrarse.addEventListener('click', () => {
        contenedor.classList.add('right-panel-active');
    });

    botonIniciarSesion.addEventListener('click', () => {
        contenedor.classList.remove('right-panel-active');
    });


    document.getElementById('siguientePaso').addEventListener('click', function() {
    const promocion = document.getElementById('promocion');
    const carrera = document.getElementById('carrera');

    if (promocion.value === 'Seleccione promoción') {
        promocion.classList.add('is-invalid');
    } else {
        promocion.classList.remove('is-invalid');
    }

    if (carrera.value === 'Seleccione carrera') {
        carrera.classList.add('is-invalid');
    } else {
        carrera.classList.remove('is-invalid');
    }

    if (promocion.value !== 'Seleccione promoción' && carrera.value !== 'Seleccione carrera') {
        document.getElementById('paso-registro-1').style.display = 'none';
        document.getElementById('paso-registro-2').style.display = 'block';
    }
});
</script>


</body>
</html>
