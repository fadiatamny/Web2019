<?php require_once('../templates/head.php'); printHead('Login',['login.css']);?>
<?php require_once('../templates/navbar.php'); ?>
<div class="container loginForm">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="text-center">
                <form class="form-signin" method="POST" action="../backend/login.php">
                    <img class="mb-4" src="../images/blacklogo.png" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" name="inputUser" class="form-control loginBox" placeholder="User Name" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="inputPassword" class="form-control loginBox" placeholder="Password" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('../templates/footer.php'); ?>