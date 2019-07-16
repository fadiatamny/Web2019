<?php
$con = mysqli_connect(
    "182.50.133.168",
    "studDB19a",
    "stud19DB1!",
    "studDB19a"
);

if (mysqli_connect_errno()) {
    echo "NULL";
    die();
}

$query = $_POST['query'];
$res = mysqli_query($con, $query);

if (!$res) {
    echo "NULL";
} else {
    $resArray = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $resArray[] = $row;
    }
    $rows = json_encode($resArray);
    echo $rows;
}
mysqli_close($con);

?>