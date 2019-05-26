(function () {
    var cat = JSON.parse(sessionStorage.getItem('cat'));
    $('.catPic').attr('src',cat.Url);
    $('.catName').html(cat.Name);
    $('.catDescription').html(cat.Description);
    $('.cancelBtn').click(function(){
        sessionStorage.clear();
        window.location.replace("./adoptList.php");
    });
    $('.finishAdopt').click(function(){
        console.log($('#fullName'));
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
        setTimeout(function(){
            clearOut();
        },5000);
    });
    
})();

var clearOut = function(){
    sessionStorage.removeItem("cat");
    window.location.replace("../index.html");
};