var redirect=function(){
    if(localStorage.getItem("login")=="admin") {window.location.replace("./admin.php"); return;}
    if(localStorage.getItem("login")=="user") {window.location.replace("./user.php"); return;}
    window.location.replace("../index.html");
};
var logOut = function(){
    localStorage.clear();
    window.location.replace("../index.html");
};
