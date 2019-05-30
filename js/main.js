$(document).ready(function(){
    var sekarang = moment();
    incrementSecond();
    
    function incrementSecond(){
        setTimeout(function(){
            incrementSecond();                    
        }, 1000);
        sekarang = sekarang.add(1, 's');
        $("#waktu").html(sekarang.format("HH : mm : ss, MMMM DD, YYYY"));
    }
    
    prevSlide();
    function prevSlide(){
        setTimeout(function(){
            $('.owl-prev').click();
            prevSlide();
        }, 6000);
    }

});
(function ($) {
    "use strict";
    $('#password2, #password3').on('keyup', function () {
        if ($('#password3').val() == $('#password2').val()) {
            $('#message').html('Password Matching').css('color', 'green');
        } else 
            $('#message').html('Password Not Matching').css('color', 'red');
    });
    $('#password4, #password5').on('keyup', function () {
        if ($('#password5').val() == $('#password4').val()) {
            $('#message').html('Password Matching').css('color', 'green');
        } else 
            $('#message').html('Password Not Matching').css('color', 'red');
    });
}(jQuery));