<script>
  $('#formIngresar').submit(function (e) {
    e.preventDefault();
    var datos = new FormData($("#formIngresar")[0]);

    $.ajax({
      headers: {'X-CSRF-TOKEN':'{{ csrf_token() }}'},
      url: '{{ url('item') }}',
      type: 'POST',
      data: datos,
      dataType: 'json',
      contentType: false,
      processData: false,
      beforeSend: function () {
        $('#modalNuevo').modal('hide');
        $('.box').append('<div class="overlay">'+
                          '<i class="fa fa-refresh fa-spin"></i>'+
                         '</div>');
      },
      success: function (data) {
        $('.overlay').detach();
        $('#tMenus').html(data);
        toastr.success('Se ingresó el local correctamente.');
      },
      error: function (data) {
        $('.overlay').detach();
        mensaje2('error', 'Ocurrio un error al guardar el menu', '#mensaje');
      }
    });
  });
</script>