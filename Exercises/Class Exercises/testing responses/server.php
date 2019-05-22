<?php
if (!empty($_POST['username'])) {
    $data = $_POST['username'];
    echo 'You are now registered,' . $data;
    $fname = "save.text";

    $file = fopen($fname, 'a');
    fwrite($file, $data . "\n");
    fclose($file);
}
?>