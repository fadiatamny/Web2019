<?php
if(isset($_POST))  {
    if(strtolower($_POST['inputUser']) == 'admin'){
        if($_POST['inputPassword'] == 'root'){
            //correct login do something
        }else{
            echo "<h1> ERROR INCORRECT LOGIN OF ADMIN PLEASE TRY AGAIN!";
        }
    }else{
        //setsession('login = true'); // other shit
        header("Location: ../pages/user.php");
        die();
    }
}

//redirect after few seconds with error
?>