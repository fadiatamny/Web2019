<?php

$con = mysqli_connect(
    '182.50.133.168',
    'studDB19a',
    'stud19DB1!',
    'studDB19a'
);

if(mysqli_connect_errno()){
    die("DB CONNECTION FAILED".mysqli_connect_errno()." // ".mysqli_connect_errno());
}

$sql = "SELECT * FROM table";

$arr = mysqli_query($con,$sql);

if(!$arr){
    echo "something woo";
    die();
}

?>