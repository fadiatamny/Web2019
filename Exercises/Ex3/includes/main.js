var boxshow = document.getElementById('js-boxshow');

var height = 80;
var width = 80;

var charArray = ['a','b','c','d'];

var generateBoxes = function(){
    var i = 0;
    for(i = 0; i < 3; ++i){
        box = document.createElement('DIV');
        box.style.height = height+'px';
        box.style.width = width+'px';
        box.className = 'box';
        height = height + 20;
        width = width + 20;
        boxshow.appendChild(box);
    }
};