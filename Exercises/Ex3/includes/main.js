var boxshow = document.getElementById('js-boxshow');

var height = 80;
var width = 80;

//var charArray = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
var charArray = ['F','A','D','I'];

var list = [];

var generateBoxes = function(){
    for(var i = 0; i < 3; ++i){
        box = document.createElement('DIV');
        box.style.height = height+'px';
        box.style.width = width+'px';
        box.className = 'box';
        var random = Math.floor(Math.random()*charArray.length);
        box.innerHTML= '<p style="margin-top: '+height*0.25+'px; font-size: '+height*0.35+'px;">'+charArray[random]+'</p>';
        height = height + 20;
        width = width + 20;

        box.addEventListener('click', function(){
            if( !this.className.includes('show')){
                if(!this.className.includes('correct')){
                    this.className = this.className + ' show';
                    list.push(this);
                    setTimeout(function(){
                        if(list.length == 2){
                            checkGame();
                            list = [];
                        }
                     }, 1000);
                }
            }
            else{
                this.className = this.className.replace('show','');
                list = [];
            }
          });


        boxshow.appendChild(box);
    }
};

var compareValues = function(){

    var str1 = list[0].innerHTML;
    var str2 = list[1].innerHTML;
    var commaIndex=str1.indexOf('">');
    var slashIndex=str1.indexOf('</p');
    var fstr1=str1.substring(commaIndex+2,slashIndex);
    commaIndex=str2.indexOf('">');
    slashIndex=str2.indexOf('</p');
    var fstr2=str2.substring(commaIndex+2,slashIndex);

    if(fstr1 == fstr2)
        return true;
    return false;
};

var checkGame = function(){
    if(compareValues()){
        for( var i = 0; i < list.length; ++i){
            list[i].className = list[i].className.replace('show','correct');
        }   
    }
    else{
        for( var i = 0; i < list.length; i++){
            list[i].className = list[i].className.replace('show','');
        }
    }
}