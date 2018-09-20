<script>
  function agregarMenu() {
    $.ajax({
      headers: {'X-CSRF-TOKEN':'{{ csrf_token() }}'},
      url: '{{ url('local/agregarMenu') }}',
      type: 'POST',
      data: {
        'id_local': {{ $local->id_local }},
        'id_menu' : $('#selectMenu').val()
      },
      dataType: 'json',
      beforeSend: function () {
        $('.box').append('<div class="overlay">'+
                          '<i class="fa fa-refresh fa-spin"></i>'+
                         '</div>');
      },
      success: function (data) {
        $('.overlay').detach();
        $('#tLocalMenus').html(data);
        toastr.success('Se ingresó el local correctamente.');
      },
      error: function (data) {
        $('.overlay').detach();
        mensaje2('error', 'Ocurrio un error al guardar el menu', '#mensaje');
      }
    });
  }
</script>