<?php require_once('./templates/head.php');
printHead("KitKatt's Profile"); ?>
<?php require_once('./templates/navbar.php');
printNav('https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png') ?>
<header class="userHeader">
    <div class="container">
        <div class="row">
            <div class="col col-md-4">
                <img src="https://vignette.wikia.nocookie.net/warriorcatsclanroleplay/images/f/fc/Placeholder-pet.png/revision/latest?cb=20130716185616" class="kittyPic">
            </div>
            <div class="col-md">
                <div class="text">
                    <h1 id="catName"></h1>
                    <h5 id="catAge"></h5>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="borderLine"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2" id="nav">
            <div class="list-group list-inline" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active first" id="list-overview-list" data-toggle="list" href="#list-overview" role="tab" aria-controls="overview">Overview</a>
                <a class="list-group-item list-group-item-action" id="list-events-list" data-toggle="list" href="#list-events" role="tab" aria-controls="events">Events</a>
                <a class="list-group-item list-group-item-action" id="list-memories-list" data-toggle="list" href="#list-memories" role="tab" aria-controls="memories">Memories</a>
            </div>
        </div>
        <div class="col-md-1" id="navSeperator">
            <div class="navList"></div>
        </div>
        <div class="col-md" id="data">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-overview" role="tabpanel" aria-labelledby="list-overview-list"><?php require_once('../pages/userComponents/overview.php'); ?></div>
                <div class="tab-pane fade" id="list-events" role="tabpanel" aria-labelledby="list-events-list"><?php require_once('../pages/userComponents/events.php'); ?></div>
                <div class="tab-pane fade" id="list-memories" role="tabpanel" aria-labelledby="list-memories-list"><?php require_once('../pages/userComponents/memories.php'); ?></div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./templates/footer.php');
printFooter(['user.js']) ?>