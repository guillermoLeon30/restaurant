<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Menu</h4>
      </div>

      <form id="formIngresar" class="form-horizontal">
        <div class="modal-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="nombre">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Imagen</label>
            <div class="col-sm-10">
              <input type="file" name="imagen">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>