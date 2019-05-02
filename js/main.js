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
        }, 4000);
    }

});