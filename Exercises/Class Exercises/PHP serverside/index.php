<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "helloworld";
        echo "<br>"; 
        $arr = array(1,2,3,4,5); 
        $arr2 = [1,2,3,4,5];
        print_r($arr);
        echo "<br>";
        print_r($arr2);
        echo "<br>";
        echo "some string here we ".$arr[0]." ".$arr[2]." ".$arr[3]." ".$arr[4];
        echo "<br>";
        foreach($arr as $a){
            echo ' '.$a;
            echo "<br>";
        }
        echo "<br>";
        require_once('stuff.php'); Stuff();
    ?>

    
</body>
</html>