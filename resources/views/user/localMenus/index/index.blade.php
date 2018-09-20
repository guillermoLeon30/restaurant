@extends('user.plantilla.principal')

@section('css')
  @include('user.localMenus.index.css.css')
@endsection

@section('encabezadoContenido')
  <div class="box-header">
    <h2 class="box-title" style="font-size: 30px">Lista de menus ({{ $local->nombre }})</h2>
  </div>
@endsection

@section('contenido')
  <div class="row">
    <div class="col-xs-12 col-sm-9" id="mensaje"></div>

    <div class="col-md-8 col-xs-12">
      @include('user.localMenus.index.include.agregarMenu')
    </div>

    <div class="col-md-8 col-xs-12">
      
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="box-tools">
            <div class="input-group input-group-sm" style="150px">
              <input type="text" id="buscar" name="buscar" class="form-control pull-right" placeholder="Buscar">
            </div>
          </div>
          <br>
        </div>        

        <div id="tLocalMenus">
          @include('user.localMenus.index.include.tLocalMenus')
        </div>
      </div>
    </div>
  </div>
  
@endsection

@push('js')
  @include('librerias.js.mensajes')
  @include('user.localMenus.index.js.jsPrincipal')
@endpush
