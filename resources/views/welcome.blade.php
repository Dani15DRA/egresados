<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egresados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

    <style>
    

.container {
    position: relative;
    z-index: 1;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.8);
}

.btn-login,
.btn-register {
    background-color: #fe2954; /* Red */
    border-color: #FF6961; /* Red */
    color: #fff; /* White */
    transition: background-color 0.3s, border-color 0.3s, color 0.3s;
    height: 500px; /* Ajusta la altura de los botones */
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-login:hover,
.btn-register:hover {
    background-color: #ff7979; 
    border-color: #FFA07A; 
}

.btn-login::after,
.btn-register::after {
    content: attr(data-description);
    display: block;
    font-size: 0.8em;
    margin-bottom: 150px;
    position:absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -100%;
    transition: bottom 0.3s ease;
}

.btn-login:hover::after,
.btn-register:hover::after {
    bottom: 0;
}

.btn-login:hover h1,
.btn-register:hover h1 {
    transform: translateY(-50%);
}

.btn-login h1,
.btn-register h1 {
    transition: transform 0.3s ease;
}
    </style>

</head>




<body style="background-image: url('public/images/RL.jpg')">
    
    <div class="container py-5 rounded bg-white">
        <h1 class="display-4">Bienvenido!</h1>
        <p class="lead">por favor para ingresar seleccione una de las siguientes opciones.</p>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="{{ route('login') }}" class="btn btn-login btn-lg w-100 mb-3" data-description="Entrar con una cuenta existente de egresado"><h1>Iniciar Sesión</h1></a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('register') }}" class="btn btn-register btn-lg w-100" data-description="Crear una nueva cuenta de egresado"><h1>Registrarse</h1></a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>