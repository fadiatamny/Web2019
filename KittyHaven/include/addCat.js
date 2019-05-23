var cat;

$(document).ready(function(){
    clearForm();
    $('.submitBtn').click(response);
    $('.cancelBtn').click(function(){
        sessionStorage.clear();
        window.location.replace("./admin.php");
    });
    $('.deleteBtn').click(function(){
        sessionStorage.setItem('cat','delete');
        window.location.replace("./feedback.php?feedback=Deleted&loc=admin"); 
    });

    if(sessionStorage.getItem("cat") !== null){    
        cat = JSON.parse(sessionStorage.getItem("cat"));
        console.log(cat);
        $('#name').val(cat.Name);
        $('#age').val(cat.Age);
        if(cat.Gender == 'Male'){
            $("#maleGender").prop('checked',true);
        }
        else{
            $("#femaleGender").prop('checked',true);

        }
        $('#url').val(cat.Url);
        $('#description').val(cat.Description);
        $('.deleteBtn').removeClass('hide');
    }
});


var clearForm = function(){
    $('#name').val('');
    $('#age').val('');
    $("#maleGender").prop('checked',true);
    $('#url').val('');
    $('#description').val('');
};

var response = function(){
    var cat = new Object();
    cat.Name = $('#name').val();
    cat.Age = $('#age').val();
    cat.Url = $('#url').val();
    cat.Description = $('#description').val();
    if($('#radio_button').is(':checked'))
        cat.Gender = 'Male';
    else
        cat.Gender = 'Female';

    console.log(cat.Name);
    console.log(cat.Age);
    console.log(cat.Url);
    console.log(cat.Description);
    console.log(cat.Gender);

    if(cat.Name == '' || cat.Age == 0 || cat.Url == '' || cat.Description == '' || cat.Gender == '')
    {
        $('.errorTxt').css('display','block');
        return;
    }
    console.log(cat);
    $('.errorTxt').css('display','none');
    sessionStorage.setItem('cat',JSON.stringify(cat));

    window.location.replace("./feedback.php?feedback=Success&loc=admin&pic=https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png");
};