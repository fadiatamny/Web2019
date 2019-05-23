<?php require_once('../templates/head.php');
printHead("KitKatt's Profile", ['admin.css']); ?>
<?php require_once('../templates/navbar.php');
printNav('https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png') ?>
<?php
$data = $_GET['feedback'];
echo '<div class="sucessText">
    <h1> '.$data.' ! </h1>
    <h2> Redirecting in 3 seconds ... </h2>
</div>

<script>
    setTimeout(function(){
        window.location.replace("./admin.php");
    },3000);
</script>';
?>
<?php require_once('../templates/footer.php');
printFooter([]) ?>