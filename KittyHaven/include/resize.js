if ($(window).width() <= 425) {
        $('#navSeperator').removeClass('col');
        $('#navSeperator').addClass('col-md-6');
    }
    else if ($(window).width() > 425 && $(window).width() <= 1024 ){
        $('#nav').removeClass('col');
        $('#nav').addClass('col-3');
        $('#data').removeClass('col-10');
        $('#data').addClass('col-8');
    }else{
        $('#navSeperator').removeClass('col-md-6');
        $('#navSeperator').addClass('col');
        $('#data').removeClass('col-8');
        $('#data').addClass('col-10');
        $('#nav').removeClass('col-3');
        $('#nav').addClass('col');
    }

