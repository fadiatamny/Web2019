<?php
if(isset($_POST))  {
    if(strtolower($_POST['inputUser']) == 'admin'){
        if($_POST['inputPassword'] == 'root'){
            header("Location: ../pages/feedback.php?feedback=Login Successful&loc=admin&pic=''");
            die();
        }else{
            header("Location: ../pages/feedback.php?feedback=Incorrect Admin Login Please Retry&loc=login&pic=''");
            die();
        }
    }else{
        header("Location: ../pages/feedback.php?feedback=Login Successful&loc=user&pic=''");
        die();
    }
}
?>