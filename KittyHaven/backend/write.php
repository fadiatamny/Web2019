<?php
if (!empty($_POST['jsonFile'])) {
    $data = $_POST['jsonFile'];

    $fname = "../data/cats.json";

    $file = fopen($fname, 'w');
    fwrite($file, $data);
    fclose($file);
}
?>