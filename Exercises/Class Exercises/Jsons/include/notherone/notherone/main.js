$(document).ready(function(){
    $.getJSON("./data/data.json",function(data){
        console.log(data);
    });
});