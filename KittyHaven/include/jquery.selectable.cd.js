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