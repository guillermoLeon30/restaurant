<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Provincia</th>
        <th>Pais</th>
        <th>Opciones</th>
      </tr>
    </thead>
      <tbody id="tabla">
        @foreach($locales as $local)
          <tr>
            <td>
              <a class="btn btn-primary" href="{{ url('local/menusLocal') }}/{{ $local->id_local }}">
                Cargar Menus
              </a>
            </td>
            <td>{{ $local->nombre }}</td>
            <td>{{ $local->direccion }}</td>
            <td>{{ $local->ciudad->valor }}</td>
            <td>{{ $local->provincia->valor }}</td>
            <td>{{ $local->pais->valor }}</td>
            
            <td>
              <button class="btn btn-success" onclick="">
                <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
              </button>
              

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
  {{ $locales->onEachSide(5)->links() }}
</div>