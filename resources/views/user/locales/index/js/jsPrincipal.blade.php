<script>

function enviar(id_local) {
  $.ajax({
    headers: {'X-CSRF-TOKEN':'{{ csrf_token() }}'},
    url: '{{ url('local/distribuirMenus') }}/' + id_local,
    type: 'POST',
    dataType: 'json',
    beforeSend: function () {
      $('.box').append('<div class="overlay">'+
                        '<i class="fa fa-refresh fa-spin"></i>'+
                       '</div>');
    },
    success: function () {
      $('.overlay').detach();
      toastr.success('Se enviaron los menus correctamente.');
    },
    error: function (data) {
      $('.overlay').detach();
      mensaje2('error', 'Ocurrio un error.', '#mensaje');
    }
  });
} 

</script>