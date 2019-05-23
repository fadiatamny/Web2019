var cats = [];
$(document).ready(function(){
    $.getJSON("../data/cats.json",function(data){
        if(sessionStorage.getItem("cat") !== null){                
            cats = JSON.parse(sessionStorage.getItem('cats'));
            if(cats === null)
                cats = data;

            if(sessionStorage.getItem("cat") != 'delete')
                cats.push(JSON.parse(sessionStorage.getItem('cat')));
    
            sessionStorage.clear();
            $.post("../backend/write.php", { jsonFile : JSON.stringify(cats) }, function (data) {
            });
            initCats(cats);
        }else{
            initCats(data);
        }
    });

});

var initCats = function(data){
    cats = data;
    var count = 0;
    var rows = [];
    for (var obj of cats) {
        var row;
        if (count % 3 == 0 || count == 0) {
            row = $('<div class="row justify-content-center"></div>');
            rows.push(row);
        }
        var card = $('<div class=" col-md-3 catPicContainer"></div>');
        var text = $('<div class="catDescriptionContainer"><div class="catDescription"> <h1>'+obj.Name+'</h1> <p>'+ obj.Description +'</p></div></div>');
        var cat = $('<img src="'+ obj.Url +'" id="'+ count++ +'" />');
        card.click(function() {
            sessionStorage.setItem("cat",JSON.stringify(cats[$(this).children()[0].id]));
            cats.splice($(this).children()[0].id,1);
            sessionStorage.setItem("cats",JSON.stringify(cats));
            window.location.replace("./catForm.php");
        });
        card.append(cat);
        card.append(text);
        row.append(card);
    }
    $('#catsList').append(rows);
};