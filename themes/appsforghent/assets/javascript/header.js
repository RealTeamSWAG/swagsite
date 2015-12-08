$(window).load(function() {
    $('#homeAlt').hide();
    header();
    $(window).scroll(header);
});

<<<<<<< HEAD
var header = function() {
    if($(window).width() >= 900) { 
        if($(document).scrollTop() > 0) {
            $('nav').css({'background-color': 'white'});
            $('.nav').removeClass('nav').addClass('nav-low');
            $('#home').hide();
            $('#homeAlt').show();
           // $('#left a').html('<img src="' + window.location.host + '/themes/appsforghent/assets/images/logo-black.png" alt="Logo Open Belgium 2016" />');
        } else {
            $('nav').css({'background-color': 'transparent'});
            $('.nav-low').removeClass('nav-low').addClass('nav');
            $('#home').show();
            $('#homeAlt').hide();
           // $('#left a').html('<img src="' + window.location.host + '/themes/appsforghent/assets/images/logo.png" alt="Logo Open Belgium 2016" />');
        }
=======
var header = function() {   
    if($(document).scrollTop() >= $(window).height()) {
        $('nav').css({'position': 'fixed', 'background-color': 'white'});
        $('.nav').removeClass('nav').addClass('nav-low');
    } else {
        $('nav').css({'position': 'relative', 'background-color': 'transparent'});
        $('.nav-low').removeClass('nav-low').addClass('nav');
>>>>>>> e185e8cf7d76cfa95bacee48dbad8b95a10baad9
    }
}