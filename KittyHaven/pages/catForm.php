<?php require_once('../templates/head.php');
printHead("KitKatt's Profile", ['admin.css']); ?>
<?php require_once('../templates/navbar.php');
printNav('https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png') ?>

<div class="wrapper">
    <form class="catForm" action="http://html5-book.co.il/teach/forms/get_form2.php " method="GET">

        <div class="form-group row">
            <div class="form-group col-md-6">
                <label class="col-sm-5 col-form-label">E-Mail: </label>
                <div class="col-sm-12">
                    <input class="form-control" type="email" name="mail" value="" placeholder="JohnDoe@example.com" required>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="col-sm-5 col-form-label">Password: </label>
                <div class="col-sm-12">
                    <input class="form-control" type="password" name="pass" value="" placeholder="Password" required>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="form-group col-md-6">
                <label class="col-sm-5 col-form-label">Full Name:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="fullName" value="" required="" placeholder="John Doe">
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="col-sm-5 col-form-label">Phone number: </label>
                <div class="col-sm-12">
                    <input class="form-control" type="tel" name="phone" value="" pattern="^[0-9-+s()*]*$" placeholder="012-345-6789">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="form-group col">
                <label class="col-sm-5 col-form-label">Website: </label>
                <div class="col-sm-12">
                    <input class="form-control" type="url" name="website" value="" placeholder="https://www.yourUrl.com">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="form-group col-1">
                <label class="col-sm-5 col-form-label">Age: </label>
                <div class="col-sm-12">
                    <input class="form-control" type="number" id="age" name="age" value="0" min="0" max="20">
                </div>
            </div>
            <div class="form-group col-1">
                <label class="col-sm-5 col-form-label label">Gender: </label>
                <div class="form-check form-check-inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="gender" name="gender" value="Male">
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="gender" name="gender" value="Female">
                        <label class="form-check-label">Female</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row justify-content-center btDiv">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>

<?php require_once('../templates/footer.php');
printFooter(['addCat.js']) ?>