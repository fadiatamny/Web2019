<?php require_once('./templates/head.php');
printHead("About Us"); ?>
<?php require_once('./templates/navbar.php');
printNav('') ?>

<div class="container header aboutus">
    <div class="row justify-content-center">
        <div class="col-md-4"></div>
        <div class="col-md">
            <h1>Moshi Moshi!<h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md">
            <p>
                Here at KittyHaven we are trying and striving to help every one to find their purrfect animal companion.
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md">
            <p>
                We are working very hard every day to find and protect many tiny cute kittens around the world and help them find a loving home,
                we strive to connect with multiple shelters around the world and create an ecosystem where any one can log into our systems and find his next best furry friend as soon as possible with just a click of a button.
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md">
            <p>
                The goal of this project is to provide an open source platform that connects all shelters to one place where any user can find the closest shelter / kittens up for adoption.
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md">
            <a href="../index.html" class="aboutusLink">
                <img class="logoPic aboutusPic" src="../images/blacklogo.png">
            </a>
        </div>
    </div>

</div>

<?php require_once('./templates/footer.php');
printFooter([]) ?>