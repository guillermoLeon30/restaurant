<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo local</h4>
      </div>

      <form id="formIngresarLocal" class="form-horizontal">
        <div class="modal-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="nombre">
            </div>
          </div>  
          
          <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Direccion</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="direccion">
            </div>
          </div>
          
          <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Ciudad</label>
            <div class="col-sm-10">
              <select name="id_ciudad" class="form-control">
                @foreach($ciudades as $ciudad)
                  <option value="{{ $ciudad->id_categoria }}">{{ $ciudad->valor }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Provincia</label>
            <div class="col-sm-10">
              <select name="id_provincia" class="form-control">
                @foreach($provincias as $provincia)
                  <option value="{{ $provincia->id_categoria }}">{{ $provincia->valor }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Pais</label>
            <div class="col-sm-10">
              <select name="id_pais" class="form-control">
                @foreach($paises as $pais)
                  <option value="{{ $pais->id_categoria }}">{{ $pais->valor }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button id="btnIngresoLocal" type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>