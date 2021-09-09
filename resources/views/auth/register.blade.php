@extends('layouts.auth')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><em>Registrarme</em></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label  for="name" class="col-md-5 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre..." required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label  for="name" class="col-md-5 col-form-label text-md-right">Tipo de usuario</label>
                            <div class="col-md-9">

                            <select name="rol" class="form-control">
                            <option disabled>Tipo de usuario</option>
                            <option value="tienda">Tienda</option>
                            </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group">
                            <label  for="email" class="col-md-5 col-form-label text-md-right">Correo</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo..." required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label  for="password" class="col-md-5 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña..." required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <label  for="email" class="col-md-6 col-form-label text-md-right">Confirmar contraseña</label>
                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña..." required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-9">
                                <button type="submit" class="btn  btn-outline-success btn-block">
                              Registrarme
                                </button>



                                <ul class="nav">  
                                    <li class="nav-item">      
                                        <a class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}"><b>Login</b></a>
                                        </a>
                                    </li>
 

                                    <li class="nav-item">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                           <b> Olvidaste la contraseña</b>
                                        </a>
                                    @endif
                                    </li>   

                                    <li class="nav-item">
                                        <a class="btn btn-link" href="/">
                                        <b>Tiendas</b>
                                        </a>
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
