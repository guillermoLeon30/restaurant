@extends('user.plantilla.principal')

@section('css')
  @include('user.locales.index.css.css')
@endsection

@section('encabezadoContenido')
  <div class="box-header">
    <h2 class="box-title" style="font-size: 30px">Lista de locales</h2>

    <div class="box-tools">
      <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modalNuevo">
			  Nuevo
			</button>
    </div>

  </div>
@endsection

@section('contenido')
  <div class="row">
    <div class="col-xs-12 col-sm-9" id="mensaje"></div>

    <div class="col-md-11 col-xs-12">
      
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="box-tools">
            <div class="input-group input-group-sm" style="150px">
              <input type="text" id="buscar" name="buscar" class="form-control pull-right" placeholder="Buscar">
            </div>
          </div>
          <br>
        </div>        

        <div id="locales">
          @include('user.locales.index.include.tabla')
        </div>
      </div>
    </div>
  </div>
	
	@include('user.locales.index.include.modalNuevo')
@endsection

@push('js')
  @include('librerias.js.mensajes')
  @include('user.locales.index.js.jsGuardarLocal')
@endpush
