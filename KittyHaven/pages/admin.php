<?php require_once('../templates/head.php');
printHead("KitKatt's Profile", ['admin.css']); ?>
<?php require_once('../templates/navbar.php');
printNav('https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png') ?>
<div class="header wrapper">
    <h1>Cats List</h1>
    <a href="./catForm.php" class="addBtn">ADD</a>
</div>
<div class="wrapper">
    <div class="borderLine"></div>
</div>

<div class="wrapper">
    <div class="container-fluid pt-2" id="catsList">
        
    </div>
</div>
<?php require_once('../templates/footer.php');
printFooter(['admin.js']) ?>