<?php require_once('../templates/head.php');
printHead("KitKatt's Profile", ['user.css']); ?>
<?php require_once('../templates/navbar.php');
printNav('https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png') ?>
<header class="userHeader">
    <div class="container">
        <div class="row">
            <div class="col col-md-3">
                <img src="https://images.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg?cs=srgb&dl=animal-animal-photography-cat-104827.jpg&fm=jpg" class="kittyPic">
            </div>
            <div class="col">
                <div class="text">
                    <h1>KitKatt</h1>
                    <h5>Age: 5 | Adopted: 19/06/1996</h5>
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
        <div class="col-12" id="nav">
            <div class="list-group list-inline" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active first" id="list-overview-list" data-toggle="list" href="#list-overview" role="tab" aria-controls="overview">Overview</a>
                <a class="list-group-item list-group-item-action" id="list-events-list" data-toggle="list" href="#list-events" role="tab" aria-controls="events">Events</a>
                <a class="list-group-item list-group-item-action" id="list-memories-list" data-toggle="list" href="#list-memories" role="tab" aria-controls="memories">Memories</a>
            </div>
        </div>
        <div class="col-12" id="navSeperator">
            <div class="navList"></div>
        </div>
        <div class="col-12" id="data">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-overview" role="tabpanel" aria-labelledby="list-overview-list"><?php require_once('../pages/overview.php'); ?></div>
                <!-- CHANGED NAME TO EVENTS? ? -->
                <div class="tab-pane fade" id="list-events" role="tabpanel" aria-labelledby="list-events-list"><?php require_once('../pages/events.php'); ?></div>
                <!-- REMOVE THE UPDATE AND MAKE IT A LIGHTBOX IN THE EVENTS TAB INSTEAD ? -->
                <div class="tab-pane fade" id="list-update" role="tabpanel" aria-labelledby="list-update-list"><?php require_once('../pages/update.php'); ?></div>
                <div class="tab-pane fade" id="list-memories" role="tabpanel" aria-labelledby="list-memories-list"><?php require_once('../pages/memories.php'); ?></div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../templates/footer.php');
printFooter(['user.js']) ?>