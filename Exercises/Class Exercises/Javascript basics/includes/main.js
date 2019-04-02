var count = 0;

window.onload = function(){
        document.getElementById("btn").onclick() = myfunc;
};

var myfunc = function(){
    var elem = document.getElementById("btn");
    var list = document.getElementById("mylist");
    
    if(elem.innerHTML.includes("MEH") == true){
        count++;
        elem.innerHTML = "CLICKED NUM"+count;
        list.innerHTML += "<li>"+count+"</li>";
        list.style.display = "block";
    }
    else{
        elem.innerHTML = "CLICK MEH";
        list.style.display = "none";
    }
}