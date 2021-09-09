@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="btn btn-success">
                    <h3 class="col-md-6 col-form-label text-md-right">Iniciar Sesion</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label  for="email" class="col-md-6 col-form-label text-md-right">Correo</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo..." autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="password" class="col-md-6 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña..." autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10">
                                <button type="submit" class="btn  btn-outline-success btn-block">
                                  Ingresar    
                                </button>

                                <ul class="nav">  
                                    <li class="nav-item">      
                                        @if (Route::has('register'))
                                        <a class="nav-item">
                                            <a class="nav-link" style="color:black" href="{{ route('register') }}"><b>Registrarse</b></a>
                                        </a>
                                    @endif
                                    </li>

                                    <li class="nav-item">
                                        <a style="color:black" class="btn btn-link" href="/">
                                      <b>  Tiendas</b>
                                        </a>
                                    </li>  

                                    <li class="nav-item">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" style="color:black" href="{{ route('password.request') }}">
                                          <b>  Olvidaste la contraseña</b>
                                        </a>
                                    @endif
                                    </li>   

 
                                </ul>
  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
