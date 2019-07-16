var cat;

$(document).ready(function () {
    clearForm();
    sessionStorage.setItem('state', 'new');
    if (sessionStorage.getItem("cat") !== null)
        cat = JSON.parse(sessionStorage.getItem("cat"));
    else
        cat = null;

    $('.submitBtn').click(response);
    $('.cancelBtn').click(function () {
        sessionStorage.removeItem('state');
        window.location.replace("./admin.php");
    });
    $('.deleteBtn').click(function () {
        if (cat == null)
            return;
        var query = 'DELETE FROM tbl_cats_89 WHERE ID = "' + cat.ID + '";';
        $.post("../backend/query.php", {
            query: query
        }, function (data) {
            if (data != 'NULL') {
                var query2 = 'DELETE FROM tbl_adoptionRequest_89 WHERE CatID = "' + cat.ID + '";';

                $.post("../backend/query.php", {
                    query: query2
                }, function (data) {
                    if (data != "NULL") {
                        sessionStorage.removeItem('cat');
                        window.location.replace("./feedback.php?feedback=Deleted&loc=admin&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
                    } else {
                        console.log("err");
                    }
                });

            } else {
                console.log('error executing query');
            }
        });
    });

    if (cat != null) {
        sessionStorage.setItem('state', 'update');
        $('#name').val(cat.Name);
        $('#age').val(cat.Age);
        if (cat.Gender == 'Male') {
            $("#maleGender").prop('checked', true);
        } else {
            $("#femaleGender").prop('checked', true);

        }
        $('#url').val(cat.Picture);
        $('#description').val(cat.Description);
        $('.deleteBtn').removeClass('hide');
    }
});


var clearForm = function () {
    $('#name').val('');
    $('#age').val('');
    $("#maleGender").prop('checked', true);
    $('#url').val('');
    $('#description').val('');
};

var response = function () {
    var obj = new Object();
    obj.Name = $('#name').val();
    obj.Age = $('#age').val();
    obj.Picture = $('#url').val();
    obj.Description = $('#description').val();
    if ($('#radio_button').is(':checked'))
        obj.Gender = 'Male';
    else
        obj.Gender = 'Female';

    if (obj.Name == '' || obj.Age == 0 || obj.Picture == '' || obj.Description == '' || obj.Gender == '') {
        $('.errorTxt').css('display', 'block');
        return;
    }

    $('.errorTxt').css('display', 'none');

    var query;
    var url;

    if (sessionStorage.getItem('state') == 'update') {
        query = "UPDATE  `studDB19a`.`tbl_cats_89` SET `Name` =  '" + obj.Name + "', `Description` =  '" + obj.Description + "', `Picture` =  '" + obj.Picture + "', `Age` =  '" + obj.Age + "' WHERE  `tbl_cats_89`.`ID` = '" + cat.ID + "';";
        url = "./feedback.php?feedback=Updated&loc=admin&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png";
    } else {
        query = "INSERT INTO  tbl_cats_89 (`ID` ,`Name` ,`Description` ,`Picture` ,`Age` ,`Gender` ,`Owner_ID` ,`Nickname` ,`AdoptDate`)\
        VALUES (NULL ,  '" + obj.Name + "',  '" + obj.Description + "',  '" + obj.Picture + "',  '" + obj.Age + "',  '" + obj.Gender + "', NULL , NULL , NULL)";
        url = "./feedback.php?feedback=Inserted&loc=admin&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png";
    }

    $.post('../backend/query.php', {
        query: query
    }, function (data) {
        if (data != 'NULL') {

            sessionStorage.removeItem('state');
            window.location.replace(url);
        } else {
            console.log('error executing query');
        }

    });
};