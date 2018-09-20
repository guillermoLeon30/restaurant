<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Imagen</th>
        <th>Menu</th>
        <th>Opciones</th>
      </tr>
    </thead>
      <tbody>
        @foreach($menusLocal as $menu)
          <tr>
            <td>
              <a href="{{ url('menu/items') }}/{{ $menu->id_menu }}">
                <img src="{{ $menu->imagen }}" alt="imagen" height="50px" width="100px">
              </a>
            </td>

            <td>{{ $menu->nombre }}</td>
            
            <td>
              @if($menu->pivot->id_estado == 1)
                <a class="btn btn-danger" href="">
                  Desactivar
                </a>
              @else
                <a class="btn btn-success" href="">
                  Activar
                </a>
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
</div>

<div class="box-footer">
  {{ $menusLocal->onEachSide(5)->links() }}
</div>