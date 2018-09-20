<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Opciones</th>
      </tr>
    </thead>
      <tbody>
        @foreach($menus as $menu)
          <tr>
            <td><img src="{{ $menu->imagen }}" alt="imagen" height="50px" width="100px"></td>
            <td>{{ $menu->nombre }}</td>
            
            <td>
              <a class="btn btn-success" href="{{ url('menu/items') }}/{{ $menu->id_menu }}">
                Items
              </a>

              <button class="btn btn-danger" onclick="">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
</div>

<div class="box-footer">
  {{ $menus->onEachSide(5)->links() }}
</div>