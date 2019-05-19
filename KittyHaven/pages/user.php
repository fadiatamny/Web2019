<?php require_once('../templates/head.php');
printHead('Kitty Profile ;from session name', ['user.css']); ?>
<?php require_once('../templates/navbar.php'); ?>
<header>
    <img src=""></img>
    <div class="Text">
        <h1>KittyName from session</h1>
        <h3>Age: XX | Adopted: XX/XX/XX</h3>
    </div>
</header>
<div class="borderLine"></div>
<main>
    <nav>
        <ul>
            <li><a>Overview</a></li>
            <li><a>Upcoming</a></li>
            <li><a>Update</a></li>
            <li><a>Memories</a></li>
        </ul>
    </nav>
    <section class="data">
        <h1>Title</h1>
        <p>Data</h1>
    </section>
</main>
<?php require_once('../templates/footer.php'); ?>