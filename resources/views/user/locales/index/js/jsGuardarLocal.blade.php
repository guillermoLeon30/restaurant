<script>
  $('#formIngresarLocal').submit(function (e) {
    e.preventDefault();
    var datos = $(this).serialize();
    console.log(datos);

    $.ajax({
      headers: {'X-CSRF-TOKEN':'{{ csrf_token() }}'},
      url: '{{ url('local') }}',
      type: 'POST',
      data: datos,
      dataType: 'json',
      beforeSend: function () {
        $('#modalNuevo').modal('hide');
        $('.box').append('<div class="overlay">'+
                          '<i class="fa fa-refresh fa-spin"></i>'+
                         '</div>');
      },
      success: function (data) {
        $('.overlay').detach();
        $('#locales').html(data);
        toastr.success('Se ingresó el local correctamente.');
      },
      error: function (data) {
        $('.overlay').detach();
        mensaje2('error', 'Ocurrio un error al guardar el local', '#mensaje');
      }
    });
  });
</script>