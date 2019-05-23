(function(){
    var login = localStorage.getItem('login');
    if(localStorage.getItem('login') == 'admin'){
        window.location.replace("./admin.php");
    } 
    if ($(window).width() > 768) {
        $('#navSeperator').addClass('col-1');
        $('#data').addClass('col-9');
        $('#nav').addClass('col-2');
        $('#navSeperator').removeClass('col-12');
        $('#data').removeClass('col-12');
        $('#nav').removeClass('col-12');
    }else{
        $('#navSeperator').removeClass('col-1');
        $('#data').removeClass('col-9');
        $('#nav').removeClass('col-2');
        $('#navSeperator').addClass('col-12');
        $('#data').addClass('col-12');
        $('#nav').addClass('col-12');
    }
})();


/* JQUERY FROM CDN FOR JQUERYUI ACCORDION */

$(document).ready(function() {
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