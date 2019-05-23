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
        if($('#fullName').val() == '' || $('#address').val() == '' ||  $('#phoneNum').val() == '' ||  $('#email').val() == '' ){
            $('.errorTxt').css('display','block');
            $('.goAhead').css('display','none');
            $('.sure').html('Cannot Proceed with fields empty');
        }else{
            $('.errorTxt').css('display','none');
            $('.goAhead').css('display','block');
            $('#makeSure').css('display','none');
        }
    });
    $('.goAhead').click(function(){

        setTimeout(function(){
            clearOut();
        },5000);
    });
    
})();

var clearOut = function(){
    sessionStorage.removeItem("cat");
    window.location.replace("../index.html");
};