<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif
    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img  src="images/tsRegistro1.jpg" alt="sing up image"></figure>
                        <a href="{{ $login_url }}" class="signup-image-link">Iniciar Sesión</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Regístrate</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ $register_url }}">
                        @csrf  
                            {{--nombre--}}
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="your_name" class=" @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            {{--Email--}}
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="your_email" class="@error('email') is-invalid @enderror"
                                value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror                                
                            </div>

                            {{--Password--}}
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" class="@error('password') is-invalid @enderror"
                                placeholder="{{ __('adminlte::adminlte.password') }}"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            {{--Confirmación de Password--}}
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_confirmation" id="your_pass" class="@error('password_confirmation') is-invalid @enderror"
                                placeholder="{{ __('adminlte::adminlte.retype_password') }}"/>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group form-button">
                                <button type="submit" class="btn btn-danger {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                <span class="fas fa-user-plus"></span>

                                    {{ __('adminlte::adminlte.register') }}
                                </button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>