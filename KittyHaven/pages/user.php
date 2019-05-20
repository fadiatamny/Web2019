<?php require_once('../templates/head.php');
printHead('Kitty Profile ;from session name', ['user.css']); ?>
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
                    <h1>KittyName from session</h1>
                    <h5>Age: XX | Adopted: XX/XX/XX</h5>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="borderLine"></div>

<div class="container">
    <div class="row">
        <div class="col" id="nav">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Overview</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Upcoming</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Update</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Memories</a>
            </div>
        </div>
        <div class="col" id="navSeperator">
            <div class="navList"></div>
        </div>
        <div class="col-8" id="data">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../templates/footer.php');
printFooter(['resize.js']) ?>