$(document).ready(function() {

    //navi show.
    $('.pics-features').waypoint(function(direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
            $('nav').addClass('animated fadeIn');

        } else {
            $('nav').removeClass('animated fadeIn');
            $('nav').removeClass('sticky');
        }
    }, {
      offset: '0px;'
    });

    //href jump smoother
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
        });
    });

    //btn scroll on click
    $('#scrollBtn').click(function () {
       $('html, body').animate({scrollTop: $('.pics-features').offset().top}, 1000); 
    });
        
    

    //animate on hoover//     
    $(".btnAni").hover(function(){
        $(this).addClass('animated rubberBand');
    }, function(){
        $(this).removeClass('animated rubberBand');
    });
});