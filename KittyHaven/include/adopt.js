(function () {
    var cat = JSON.parse(sessionStorage.getItem('cat'));
    $('.catPic').attr('src',"https://"+cat.Picture);
    $('.catName').html(cat.Name);
    $('.catDescription').html(cat.Description);
    $('.cancelBtn').click(function(){
        sessionStorage.clear();
        window.location.replace("./adoptList.php");
    });
    $('.finishAdopt').click(function(){
        if($('#fullName').val() == '' || $('#address').val() == '' ||  $('#phoneNum').val() == '' ||  $('#email').val() == '' ){
            $('.errorTxt').css('display','block');
            $('.goAhead').css('display','none');
            $('.sureTitle').html('Error!');
            $('.sureBody').html('Cannot Proceed with fields empty');
            
        }else{
            $('.sureTitle').html('Are you sure?');
            $('.sureBody').html('are you sure you want to adop this cat?');
            $('.errorTxt').css('display','none');
            $('.goAhead').css('display','block');
        }
    });
    $('.goAhead').click(function(e){
        e.preventDefault();
        var query = "INSERT INTO  `studDB19a`.`tbl_adoptionRequest_89` (`ID` ,`Name` ,`Address` ,`Phone` ,`Email` ,`CatID`)\
            VALUES (NULL ,  '"+$('#fullName').val()+"',  '"+$('#address').val()+"',  '"+$('#phoneNum').val()+"',  '"+$('#email').val()+"',  '"+cat.ID+"');";
        $.post("../backend/query.php",{query: query},function(){
            setTimeout(function(){
                clearOut();
            },5000);        
        });

    });
    
})();

var clearOut = function(){
    sessionStorage.removeItem("cat");
    window.location.replace("../index.html");
};