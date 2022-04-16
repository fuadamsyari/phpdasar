$(document).ready(function () {
  // even ketika keyword di tulis
  $('#keyword').on('keyup', function () {
    $('#tombol-cari').hide();
    $('.loader').show();
    // ajax load
    // $('#tabel').load('ajax/service.php?keyword=' + $('#keyword').val());
    // ajax get
    $.get('ajax/service.php?keyword=' + $('#keyword').val(), function (data) {
      $('#tabel').html(data);
      $('.loader').hide();
    });
  });
});
