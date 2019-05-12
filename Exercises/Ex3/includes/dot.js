var selected = null;
var nav = document.getElementsByClassName('btn');
var i = 0;

var onEnter = function(){
    for(i = 0; i < nav.length; ++i){
        if(nav[i].className.includes('selected'))
            nav[i].className = nav[i].className.replace(' selected','');
    }
    this.className = this.className + ' selected';  
};

var onLeave = function(){
    this.className = this.className.replace(' selected','');
    selected.className = selected.className + ' selected';
};

(function(){
    for(i = 0; i < nav.length; ++i){
        if(nav[i].className.includes('selected'))
            selected = nav[i];
    }

    for(i = 0; i < nav.length; ++i){
        nav[i].addEventListener('mouseover', onEnter);
        nav[i].addEventListener('mouseleave', onLeave);
    }
})();
