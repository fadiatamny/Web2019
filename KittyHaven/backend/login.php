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
        $con = mysqli_connect(
            "182.50.133.168",
            "studDB19a" ,
            "stud19DB1!" ,
            "studDB19a"
            );
        
            if (mysqli_connect_errno()) {
                echo "NULL";
                die();
            }
        
            $query = 'SELECT * FROM tbl_owners_89 WHERE Username = "'.$_POST['inputUser'].'" AND Password = "'.$_POST['inputPassword'].'";';
            $res = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($res);
            echo $row;
            if(!$row){
                header("Location: ../pages/feedback.php?feedback=Incorrect Login Please Retry&loc=login&pic=''");
            }
            else{
                header("Location: ../pages/feedback.php?feedback=Login Successful&loc=user&pic=''&id=".$row['ID']);
                mysqli_close($con);
                die();
            }
    }
}
?>