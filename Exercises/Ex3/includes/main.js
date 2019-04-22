var boxshow = document.getElementById('js-boxshow');
var main = document.getElementById('main');
var aside = document.getElementById('aside');
var nav = document.getElementById('nav');

var height = 80;
var width = 80;

var startHeight = 995; //main height to start with.
var boxesWidth = 0; // used to track the amount of boxes divided in rows.

//var charArray = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
var charArray = ['F','A','D','I'];

var list = [];

var generateBoxes = function(){

    //#region create Element
    for(var i = 0; i < 3; ++i){
        box = document.createElement('DIV');
        box.style.height = height+'px';
        box.style.width = width+'px';
        box.className = 'box';
        var random = Math.floor(Math.random()*charArray.length);
        box.innerHTML= '<p style="margin-top: '+height*0.25+'px; font-size: '+height*0.35+'px;">'+charArray[random]+'</p>';
        height = height + 20;
        width = width + 20;
        boxesWidth += width + 128 ;
        
        box.addEventListener('click', function(){
            if( !this.className.includes('show')){
                if(!this.className.includes('correct')){
                    this.className = this.className + ' show';
                    list.push(this);
                    setTimeout(function(){ //timer delay after 0.5 sec to show the letter.
                        if(list.length == 2){
                            checkGame();
                            list = [];
                        }
                     }, 500);
                }
            }
            else{
                this.className = this.className.replace('show','');
                list = [];
            }
          });
        boxshow.appendChild(box);
    }
    //#endregion

    //#region checkMobile
    // check if youre in mobile view or not (make inital blank screen look better)
    var intViewportWidth = window.innerWidth;
    
    if( intViewportWidth <= 767 )
        main.style.height = "auto";
    //#endregion

    //#region Resize page

    var mainHeight = parseInt(window.getComputedStyle(main).height.replace("px",""));
    var mainWidth = parseInt(window.getComputedStyle(main).width.replace("px",""));

    if(intViewportWidth > 767 && mainHeight >= 955){
        var newHeight = startHeight;
        var rowCount = (boxesWidth/mainWidth); //numbers of rows created by the boxes
        while( rowCount > 2){
            newHeight += height + 246;
            aside.style.height = newHeight + "px";
            nav.style.height =  newHeight + "px";
            --rowCount;
        }
    }
    //#endregion

};

var compareValues = function(){

    var str1 = list[0].innerHTML;
    var str2 = list[1].innerHTML;

    var index=str1.indexOf('">');
    var slashIndex=str1.indexOf('</p');
    var fstr1=str1.substring(index+2,slashIndex);

    index=str2.indexOf('">');
    slashIndex=str2.indexOf('</p');
    var fstr2=str2.substring(index+2,slashIndex);

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