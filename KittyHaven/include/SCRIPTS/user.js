
(function(){
    if(localStorage.getItem('login') == 'admin'){
        window.location.replace("./admin.php");
    }
})();

var picsArray = [];

$(document).ready(function(){
    $.getJSON("../data/memories.json",function(data){ 
        initPics(data);
    }); 

    /* JQUERY FROM CDN FOR JQUERYUI ACCORDION */

        // Collect all li classes ending in "event"
        var $list = $("li[class$='event']");
  
        // Collect all unique class names
        var classNames = $list.map(function() {
            return this.className;
        });
        classNames = $.unique(classNames.get());
      // wrap all of the same class names with a <ul>
        $.each(classNames, function(i, className) {
              $list.filter(function() {
                  return $(this).hasClass(className);
              }).wrapAll("<ul>");
        });
        
        $('#accordion').accordion({
          collapsible: true,
          active: false,
          heightStyle: "content"
        });
});

var initPics = function(data){
    picsArray = data; 
    var count = 0;
    for (var obj of data) {
        var div = $('<div class="picContainer"></div>')
        var pic = $('<a href="#" class="catClick"><img src="'+obj.Url+'" id="'+ count++ +'"></a>');
        pic.click(function(e) {
            selected = picsArray[$(this).children()[0].id];
            $('.memoryInfo .title').html(selected.Title);
            $('.memoryInfo .description').html(selected.Description);
            $('#memoryImg').attr('src',selected.Url);
            e.preventDefault();
        });
        div.append(pic);
        $('.pagesPictures').append(div);
    }

    $('.memoryInfo .title').html(picsArray[0].Title);
    $('.memoryInfo .description').html(picsArray[0].Description);
    $('#memoryImg').attr('src',picsArray[0].Url);
};

