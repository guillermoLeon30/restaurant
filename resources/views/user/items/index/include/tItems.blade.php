<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Opciones</th>
      </tr>
    </thead>
      <tbody>
        @foreach($items as $item)
          <tr>
            <td><img src="{{ $item->imagen }}" alt="imagen" height="50px" width="100px"></td>
            <td>{{ $item->nombre }}</td>
            <td>${{ $item->precio }}</td>
            
            <td>
              @if($item->id_estado == 1)
                <a class="btn btn-warning" href="">
                  Desactivar
                </a>
              @else
                <a class="btn btn-success" href="">
                  Activar
                </a>
              @endif
              
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
  {{ $items->onEachSide(5)->links() }}
</div>