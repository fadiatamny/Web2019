var cats = [];
$(document).ready(function(){
    $.getJSON("../data/cats.json",function(data){
        cats = data;
        var count = 0;
        for (var obj of cats) {
            var card = $('<div class="card catCard catWrap"></div>');
            var text = $('<div class="catDescriptionWrap"><divclass="catDescription"> <h1>'+obj.name+'</h1> <p>'+ obj.description +'</p></div></div>');
            var cat = $('<img class="card-img-top" style="width:100%; height: 300px;" src="'+ obj.url +'" id="'+ count++ +'" />');
            card.click(function(){
                console.log($(this).children()[0].id);
                localStorage.setItem("cat",JSON.stringify(cats[$(this).children()[0].id]));
                window.location.replace("./catForm.php");
            });
            card.append(cat);
            card.append(text);
            $('#catsList').append(card);
        }
    });
});