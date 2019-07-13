<?php
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

    $query = $_POST['query'];
    $res = mysqli_query($con, $query);
    if(!$res){
        echo "NULL";
    }
    else{
        $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
        $rows = json_encode($rows);
        echo $rows;
    }
    mysqli_close($con);
?>