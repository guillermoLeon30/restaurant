@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
          <div class="card-header">{{ __('Register') }}</div>

          <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                  @csrf

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">Nombres</label>

                      <div class="col-md-6">
                          <input id="nombres" type="text" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" value="{{ old('nombres') }}" required autofocus>

                          @if ($errors->has('nombres'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('nombres') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">Apellidos</label>

                      <div class="col-md-6">
                          <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                          @if ($errors->has('apellidos'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('apellidos') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">Telefono</label>

                      <div class="col-md-6">
                          <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus>

                          @if ($errors->has('telefono'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('telefono') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="tipo_documento" class="col-md-4 col-form-label text-md-right">Tipo de Documento</label>

                    <div class="col-md-6">
                      <select class="form-control" name="id_tipo_documento">
                        @foreach($tipo_documento as $documento)
                          <option value="{{$documento->id_categoria}}">{{$documento->valor}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                      <label for="numero_documento" class="col-md-4 col-form-label text-md-right">Numero Documento</label>

                      <div class="col-md-6">
                          <input id="numero_documento" type="text" class="form-control{{ $errors->has('numero_documento') ? ' is-invalid' : '' }}" name="numero_documento" value="{{ old('numero_documento') }}" required autofocus>

                          @if ($errors->has('numero_documento'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('numero_documento') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                          @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                      <div class="col-md-6">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                      </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Registrarse') }}
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
