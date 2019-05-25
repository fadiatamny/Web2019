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
echo '<div class="container" style="margin-top:30vh;">
    <div class="row justify-content-center"> <h1> '.$data.' ! </h1></div>
    <div class="row justify-content-center"> <h2> Redirecting in 3 seconds ... </h2> </div>
</div>

<script>
    setTimeout(function(){
        localStorage.setItem("login","'.$location.'");
        window.location.replace("./'.$location.'.php");
    },3000);
</script>';
?>
<?php require_once('./templates/footer.php');
printFooter([]) ?>