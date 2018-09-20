<form class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-2 control-label">Menus</label>

    <div class="col-sm-8">
      <select name="" id="selectMenu" class="form-control">
        @foreach($menus as $menu)
          <option value="{{ $menu->id_menu }}">{{ $menu->nombre }}</option>
        @endforeach
      </select>
    </div>

    <div class="col-sm-2">
      <button class="btn btn-success" onclick="agregarMenu()" type="button">Agregar</button>
    </div>
  </div>
</form>