<?php require_once('./templates/head.php');
printHead("Redirecting..."); ?>

<?php require_once('./templates/navbar.php');
    $pic = $_GET['pic'];
    if($pic == "''" || $pic == null)
        printNav('');
    else
        printNav($pic);
    ?>
    <?php
    $data = $_GET['feedback'];
    $location = $_GET['loc'];
    echo '<div class="container wrapper feedbackHead">
        <div class="row justify-content-center responseText"> <h1> '.$data.' ! </h1></div>
        <div class="row justify-content-center"> <h4> Redirecting in 3 seconds ... </h2> </div>
    </div>

    <script>';
        if(isset($_GET['id']))
            echo 'sessionStorage.setItem("userID", "'.$_GET['id'].'");';

        echo 'setTimeout(function(){
            sessionStorage.setItem("login","'.$location.'");
            window.location.replace("./'.$location.'.php");
        },3000);
    </script>';
?>

<?php require_once('./templates/footer.php');
printFooter([]) ?>