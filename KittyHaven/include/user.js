var cat;
var currently;

(function () {
    if (sessionStorage.getItem('login') == null)
        window.location.replace("../index.html");
    if (sessionStorage.getItem('login') == 'admin') {
        window.location.replace("./admin.php");
    }

    $('#insertEvent').attr('onclick', 'insertEvent()');
    $('#updateEvent').attr('onclick', 'updateEvent()');
    $('#deleteEvent').attr('onclick', 'deleteEvent()');
    $('#editDetails').attr('onclick', 'editDetails()');

    $('#addEvent').attr('onclick', 'addBtn()');
    $('#editOverview').attr('onclick', 'editOverview()');

    $('#editMemBtn').attr('onclick', 'editMem()');
    $('#addMemBtn').attr('onclick', 'addMem()');
    $('#deleteMemory').attr('onclick', 'deleteMem()');

})();

var addBtn = function () {
    $('#eventTitle').val('');
    $('#eventDes').val('');
    var btn = $('#updateEvent');
    btn.attr('id', 'insertEvent');
    btn.html('Add');
    btn.attr('onclick', 'insertEvent()');
};

var editBtn = function () {
    var btn = $('#insertEvent');
    btn.attr('id', 'updateEvent');
    btn.html('Update');
    btn.attr('onclick', 'updateEvent()');
    var id = $('.ui-state-active').attr('id');
    $('#eventTitle').val(eventTitle[id - 1]);
    $('#eventDes').val(eventDes[id - 1]);
};

var editOverview = function () {
    $('#catNickname').val(cat.Nickname);
    $('#catDescription').val(cat.Description);
};

var editMem = function () {
    $('.warnningMessage').css('display', 'none');

    $('#memTitle').val(currently.Title);
    $('#memDescription').val(currently.Description);
    $('#memPic').val(currently.Picture);
    $('#actionMem').attr('onclick', 'updateMem()');
    $('#actionMem').html('Update');
};

var addMem = function () {
    $('.warnningMessage').css('display', 'none');

    $('#memTitle').val('');
    $('#memDescription').val('');
    $('#memPic').val('');
    $('#actionMem').attr('onclick', 'insertMem()');
    $('#actionMem').html('Add');

    if (picsArray.length == 6)
        $('.warnningMessage').css('display', 'block');

};

var picsArray = [];
var eventTitle = [];
var eventDes = [];
var eventIDs = [];

$(document).ready(function () {
    var query = "SELECT * FROM tbl_cats_89 WHERE Owner_ID ='" + sessionStorage.getItem('userID') + "';";

    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        var obj = JSON.parse(data);
        obj = obj[0];
        cat = obj;
        $('#catName').html("" + obj.Name);
        var age = 'Age: ' + obj.Age + ' | Adopted: ' + obj.AdoptDate + '';
        $('#catAge').html(age);
        $('#catDesc').html("" + obj.Description);
        $('.kittyPic').attr('src', 'https://' + obj.Picture);
        $('#nickname').html('' + obj.Nickname);

        var query2 = "SELECT * FROM tbl_memories_89 WHERE CatID ='" + obj.ID + "';";
        var query3 = "SELECT * FROM tbl_events_89 WHERE CatID ='" + obj.ID + "';";

        $.post("../backend/query.php", {
            query: query2
        }, function (data) {
            initPics(JSON.parse(data));
        });

        $.post("../backend/query.php", {
            query: query3
        }, function (data) {
            initEvents(JSON.parse(data));
        });
    });


});

var initPics = function (data) {
    picsArray = data;
    var count = 0;
    for (var obj of data) {
        if (count == 6)
            break;
        var div = $('<div class="picContainer"></div>');
        var pic = $('<a href="#" class="catClick"><img src="https://' + obj.Picture + '" id="' + count++ + '"></a>');
        pic.click(function (e) {
            selected = picsArray[$(this).children()[0].id];
            currently = selected;
            $('.memoryInfo .title').html(selected.Title);
            $('.memoryInfo .description').html(selected.Description);
            $('#memoryImg').attr('src', 'https://' + selected.Picture);
            e.preventDefault();
        });
        div.append(pic);
        $('.pagesPictures').append(div);
    }
    currently = picsArray[0];
    $('.memoryInfo .title').html(picsArray[0].Title);
    $('.memoryInfo .description').html(picsArray[0].Description);
    $('#memoryImg').attr('src', 'https://' + picsArray[0].Picture);
};

var initEvents = function (data) {
    var count = 1;
    for (var obj of data) {
        var header = $('<h3 id="' + count + '" class="event-date"></h3>');
        var item = $('<li class="' + count + 'event"></li>');
        var btn1 = '<button class="events" data-toggle="modal" data-target="#deleteModal">Delete</button>';
        var btn2 = '<button id="editBtn" class="events" data-toggle="modal" data-target="#modal" onclick="editBtn()">Edit</button>';
        header.html(obj.Title);
        item.html(obj.Description);
        item.append('<br>');
        item.append(btn1);
        item.append(btn2);
        $('#accordion').append(header);
        $('#accordion').append(item);
        eventTitle.push(obj.Title);
        eventDes.push(obj.Description);
        eventIDs.push(obj.ID);
        count++;
    }
    /* JQUERY FROM CDN FOR JQUERYUI ACCORDION */

    // Collect all li classes ending in "event"
    var $list = $("li[class$='event']");

    // Collect all unique class names
    var classNames = $list.map(function () {
        return this.className;
    });
    classNames = $.unique(classNames.get());
    // wrap all of the same class names with a <ul>
    $.each(classNames, function (i, className) {
        $list.filter(function () {
            return $(this).hasClass(className);
        }).wrapAll("<ul>");
    });

    $('#accordion').accordion({
        collapsible: true,
        active: false,
        heightStyle: "content"
    });
};

//ui-state-active

var insertEvent = function () {
    var query = 'INSERT INTO `studDB19a`.`tbl_events_89` (`ID`, `Title`, `Description`, `CatID`) VALUES (NULL, "' + $('#eventTitle').val() + '", "' + $('#eventDes').val() + '", "' + cat.ID + '");';
    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data == 'NULL')
            console.log('error occured with query!');
        else
            window.location.replace("./feedback.php?feedback=Inserted&loc=user&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
    });
};

var updateEvent = function () {
    var id = $('.ui-state-active').attr('id');
    id = eventIDs[id - 1];
    var query = "UPDATE  `studDB19a`.`tbl_events_89` SET `Title` =  '" + $('#eventTitle').val() + "', `Description` =  '" + $('#eventDes').val() + "' WHERE  `tbl_events_89`.`ID` = " + id + ";";

    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data == 'NULL')
            console.log('error occured with query!');
        else
            window.location.replace("./feedback.php?feedback=Updated&loc=user&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
    });
};

var deleteEvent = function () {
    var id = $('.ui-state-active').attr('id');
    id = eventIDs[id - 1];

    var query = 'DELETE FROM tbl_events_89 WHERE ID = "' + id + '";';
    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data == 'NULL')
            console.log('error occured with query!');
        else
            window.location.replace("./feedback.php?feedback=Deleted&loc=user&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
    });
};

var editDetails = function () {

    var query = 'UPDATE  `studDB19a`.`tbl_cats_89` SET `Nickname` =  "' + $('#catNickname').val() + '", `Description` =  "' + $('#catDescription').val() + '" WHERE  `tbl_cats_89`.`ID` = ' + cat.ID + ';';

    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data == 'NULL')
            console.log('error occured with query!');
        else
            window.location.replace("./feedback.php?feedback=Updated&loc=user&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
    });
};

var insertMem = function () {
    var query = 'INSERT INTO `studDB19a`.`tbl_memories_89` (`Title`, `Picture`, `Description`, `CatID`) VALUES ("' + $('#memTitle').val() + '", "' + $('#memPic').val() + '", "' + $('#memDescription').val() + '", "' + cat.ID + '")';

    if (picsArray.length == 6) {
        var query2 = 'DELETE FROM `tbl_memories_89` WHERE `tbl_memories_89`.`ID` = ' + picsArray[0].ID + ' ;';

        $.post("../backend/query.php", {
            query: query2
        }, function (data) {
            if (data == 'NULL')
                console.log('error occured with query!');
            else {
                $.post("../backend/query.php", {
                    query: query
                }, function (data) {
                    if (data == 'NULL')
                        console.log('error occured with query!');
                    else
                        window.location.replace("./feedback.php?feedback=Inserted&loc=user&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
                });
            }
        });
    } else {
        $.post("../backend/query.php", {
            query: query
        }, function (data) {
            if (data == 'NULL')
                console.log('error occured with query!');
            else
                window.location.replace("./feedback.php?feedback=Inserted&loc=user&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
        });
    }
};

var updateMem = function () {
    var query = 'UPDATE `studDB19a`.`tbl_memories_89` SET `Title` = "' + $('#memTitle').val() + '", `Picture` = "' + $('#memPic').val() + '", `Description` = "' + $('#memDescription').val() + '" WHERE `tbl_memories_89`.`ID` = "' + currently.ID + '";';
    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data == 'NULL')
            console.log('error occured with query!');
        else
            window.location.replace("./feedback.php?feedback=Updated&loc=user&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
    });
};

var deleteMem = function () {
    var query = 'DELETE FROM `tbl_memories_89` WHERE `tbl_memories_89`.`ID` = ' + currently.ID + ' ;';
    $.post("../backend/query.php", {
        query: query
    }, function (data) {
        if (data == 'NULL')
            console.log('error occured with query!');
        else
            window.location.replace("./feedback.php?feedback=Deleted&loc=user&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
    });
};