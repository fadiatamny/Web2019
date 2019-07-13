var cats = [];
var selectedCat = null;
var selectedIndex = -1;

(function () {
    if (sessionStorage.getItem('login') == null)
        window.location.replace("../index.html");
    if (sessionStorage.getItem("login") == "user") {
        window.location.replace("./user.php");
    }

    $(".editCat").click(function () {
        if (selectedCat != null && selectedIndex != -1) {
            sessionStorage.setItem("cat", JSON.stringify(selectedCat));
            window.location.replace("./catForm.php");
        }
    });

    $(".adoptCat").click(function () {
        if (selectedCat != null && selectedIndex != -1) {
            sessionStorage.setItem("cat", JSON.stringify(selectedCat));
            window.location.replace("./catAdopt.php");
        }
    });
})();

$(document).ready(function () {
    var query = "SELECT * FROM tbl_cats_89 WHERE Owner_ID IS NULL;";
    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data != "NULL") {
            initCats(JSON.parse(data));
        } else {
            console.log("err");
        }
    });
    //     $.getJSON("../data/cats.json",function(data){
    //         if(sessionStorage.getItem("cat") !== null){
    //             cats = JSON.parse(sessionStorage.getItem('cats'));
    //             if(cats === null)
    //                 cats = data;
    //             if(sessionStorage.getItem("cat") != 'delete')
    //                 cats.push(JSON.parse(sessionStorage.getItem('cat')));

    //             sessionStorage.clear();
    //             $.post("../backend/write.php", { jsonFile : JSON.stringify(cats) }, function (data) {
    //             });
    //             initCats(cats);
    //         }else{
    //             initCats(data);
    //         }
    //         console.log(cats);
    //     });
});

var initCats = function (data) {
    cats = data;
    var count = 0;
    var rows = [];
    console.log(cats);
    for (var obj of cats) {
        var row;
        if (count % 3 == 0 || count == 0) {
            row = $('<div class="row justify-content-center"></div>');
            rows.push(row);
        }
        var container = $('<div class=" col-md-3 catPicContainer" data-toggle="modal" data-target="#modal"></div>');
        var text = $('<div class="catDescriptionContainer"><div class="catDescription"> <h1>' + obj.Name + "</h1> <p>" + obj.Description.slice(0, 120) + "..." + "</p></div></div>");
        var cat = $('<img src="https://' + obj.Picture + '" id="' + count++ + '" />');
        container.click(function () {
            selectedIndex = $(this).children()[0].id;
            lightBoxShow(cats[selectedIndex]);
        });
        container.append(cat);
        container.append(text);
        row.append(container);
    }
    $("#catsList").append(rows);
};

var lightBoxShow = function (cat) {
    selectedCat = cat;
    $(".catNameModal").html(cat.Name);
    $(".catDescriptionModal").html(cat.Description);
    $(".modalCatPic").attr("src", "https://" + cat.Picture);
};