var cat;
$(document).ready(function(){
    cat = JSON.parse(localStorage.getItem("cat"));
    $('#name').val(cat.name);
});