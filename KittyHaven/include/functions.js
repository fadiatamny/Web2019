var redirect=function(){
    if(sessionStorage.getItem("login")=="admin") {window.location.replace("./admin.php"); return;}
    if(sessionStorage.getItem("login")=="user") {window.location.replace("./user.php"); return;}
    window.location.replace("../index.html");
};
var logOut = function(){
    sessionStorage.clear();
    window.location.replace("../index.html");
};
