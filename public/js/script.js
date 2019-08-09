$(function () {
    $('.plx').parallax();

    $('.help-block').on('click', function () {
        $(this).html('');
    });

    if ($('#mainNav').length > 0) {
        $(document).scroll(function () {
            if ($('#mainNav').offset().top > 100 && $(document).innerWidth() > 809) {
                $('.label-place').css('top', '14px');
            } else {
                $('.label-place').css('top', '');
            }
        });
    }
    /*$('#frm').on('submit','form', function (e) {
     var form = $(this).serialize();
     $.ajax({
     url: '/feedback',
     data: form,
     type: 'post',
     success: function (data) {
     $('#frm').html(data);
     var msg = $('.frm_send_success');
     if(msg.length < 1) {
     msg = $('.frm_send_failed');
     }

     if(msg.length > 0){
     msg.fadeOut(3000);
     }
     }
     });
     e.preventDefault();
     });*/
});