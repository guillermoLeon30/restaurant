<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Provincia</th>
        <th>Pais</th>
        <th>Token</th>
        <th>Opciones</th>
      </tr>
    </thead>
      <tbody id="tabla">
        @foreach($locales as $local)
          <tr>
            <td>{{ $local->nombre }}</td>
            <td>{{ $local->direccion }}</td>
            <td>{{ $local->ciudad->valor }}</td>
            <td>{{ $local->provincia->valor }}</td>
            <td>{{ $local->pais->valor }}</td>
            <td>fdsaf8sdf89s7f98sdf7</td>
            
            <td>
              <button class="btn btn-success" onclick="">
                <span class="glyphicon glyphicon-import" aria-hidden="true"></span>
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