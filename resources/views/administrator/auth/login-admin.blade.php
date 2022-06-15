@extends('administrator.layouts.app-admin')

@section('content')
<style>
section.content-login {
    margin: 100px 15px 0 15px;
}

.imgWidth{width: 260px;}

@media(max-width: 600px){
.imgWidth{width: 150px;}
}

</style>
    <section class="content content-login">
        <div class="container-fluid">
            <div class="block-header">
                <!--<h2>FORM EXAMPLES</h2>-->
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-md-12 text-center " style="margin-bottom: 15px;">
                    <img class="imgWidth" src="{{asset('assets/images/Logo_gnp.png')}}">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LOGIN
                            </h2>
                            <!--<ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div>
                        <div class="body">


                            <form method="POST" action="{{ url('administrador/login') }}">

                                                        {!! csrf_field() !!}

                                <label for="email_address">Usuario</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ingrese su dirección de correo electrónico" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                <label for="password">Contraseña</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Ingresa tu contraseña" required autocomplete="current-password">
                                    </div>
                                @error('password')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">

                                <!--{!! htmlFormSnippet() !!}-->


                                @error('g-recaptcha-response')
                                    <span class="invalid-feedback mt-3 text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <!--<input type="checkbox" name="remember" id="remember"  class="filled-in form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember_me">Remember Me</label>-->
                                
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
        </div>
    </section>
@endsection