(function(){
    var nav = document.getElementsByClassName('btn');
    console.log(nav);
    var i = 0;
    var selected = null;

    for(i = 0; i < nav.length; ++i){
        if(nav[i].className.includes('selected'))
            selected = nav[i];
    }

    for(i = 0; i < nav.length; ++i){
        nav[i].addEventListener('mouseover', function () {         
            for(i = 0; i < nav.length; ++i){
                if(nav[i].className.includes('selected'))
                    nav[i].className = nav[i].className.replace(' selected','');
            }
            this.className = this.className + ' selected';
        });
        nav[i].addEventListener('mouseleave', function () {
            this.className = this.className.replace(' selected','');
            selected.className = selected.className + ' selected';
        });
    }
})();