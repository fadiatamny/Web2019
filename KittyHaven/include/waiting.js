var currUser;
var currCat;

(function () {
    if (sessionStorage.getItem('login') == null)
        window.location.replace("../index.html");
    if (sessionStorage.getItem("login") == "user") {
        window.location.replace("./user.php");
    }

    $('.approveAdopt').attr('onclick', 'approve()');
    $('#errmsg').css('display', 'none');
})();

$(document).ready(function () {
    var query = "SELECT * FROM tbl_adoptionRequest_89;";
    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data != "NULL") {
            initList(JSON.parse(data));
        } else {
            console.log("err");
        }
    });

});

var initList = function (data) {
    var count = 1;

    for (var obj of data) {
        var tn = $('<th scope="row"></th>');
        tn.append(count++);
        var td1 = $('<td></td>');
        var td2 = $('<td></td>');
        var td3 = $('<td></td>');
        var td4 = $('<td></td>');
        var td5 = $('<td></td>');
        td1.append(obj.Name);
        td2.append(obj.Address);
        td3.append(obj.Phone);
        td4.append(obj.Email);
        td5.append(obj.CatID);

        var appbtn = $('<a data-toggle="modal" data-target="#modal"></a>');
        appbtn.html('Approve');
        appbtn.addClass('approveBtn');
        appbtn.attr('onclick', 'currid(' + obj.ID + ',' + obj.CatID + ')');

        var denybtn = $('<a></a>');
        denybtn.html('Deny');
        denybtn.addClass('denyBtn');
        denybtn.attr('onclick', 'deny(' + obj.ID + ',' + obj.CatID + ')');
        denybtn.attr('id', obj.id);

        var td6 = $('<td></td>');
        td6.append(appbtn);
        td6.append(denybtn);

        var trow = $('<tr></tr>');
        trow.append(tn);
        trow.append(td1);
        trow.append(td2);
        trow.append(td3);
        trow.append(td4);
        trow.append(td5);
        trow.append(td6);

        $('#tableBody').append(trow);

    }
};

var currid = function (id, catid) {
    currUser = id;
    currCat = catid;
    $('#username').val('');
    $('#password').val('');
    $('#password').val('');
};



var approve = function () {

    $('#errmsg').css('display', 'none');

    var username = $('#username').val();
    var password = $('#password').val();
    var date = $('#date').val();

    if (username == '' || password == ''|| date == '') {
        $('#errmsg').css('display', 'block');
        return;
    }

    var query1 = 'SELECT * FROM tbl_owners_89 WHERE Username = "' + username + '";';

    $.post("../backend/query.php", {
        query: query1
    }, function (data) {
        if (data != "NULL") {
            if (data == []) {
                $('#errmsg').css('display', 'block');
                $('#errmsg').html('Username not available');
            } else {
                var query2 = 'INSERT INTO  `studDB19a`.`tbl_owners_89` (`ID` ,`Username` ,`Password`)\
                    VALUES (NULL ,  "' + username + '",  "' + password + '");';
                $.post("../backend/query.php", {
                    query: query2
                }, function (data) {
                    if (data != "NULL") {
                        var query3 = 'SELECT * FROM  tbl_owners_89 WHERE Username = "'+username+'";';
                        $.post("../backend/query.php", {
                            query: query3
                        }, function (data) {
                            if (data != "NULL") {
                                data=JSON.parse(data)[0];
                                var query4 = "UPDATE tbl_cats_89 SET Owner_ID =  '" + data.ID + "', AdoptDate = '"+date+"' WHERE  ID = '" + currCat + "';";
                                $.post("../backend/query.php", {
                                    query: query4
                                }, function (data) {
                                    if (data != "NULL") {
                                        clearList();
                                    } else {
                                        console.log("error occured serverside.");
                                    }
                                });

                            } else {
                                console.log("error occured serverside.");
                            }
                        });

                    } else {
                        console.log("error occured serverside.");
                    }
                });
            }
        } else {
            console.log("error occured serverside.");
        }
    });
};

var deny = function (id, catid) {

    var query = 'DELETE FROM tbl_adoptionRequest_89 WHERE ID = "' + id + '";';

    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data != "NULL") {
            window.location.replace('./waitingList.php');
        } else {
            console.log("error occured serverside.");
        }
    });
};

var clearList = function () {

    var query = 'DELETE FROM tbl_adoptionRequest_89 WHERE CatID = "' + currCat + '";';

    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data != "NULL") {
            window.location.replace('./waitingList.php');
        } else {
            console.log("error occured serverside.");
        }
    });
};