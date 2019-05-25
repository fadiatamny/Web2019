<?php require_once('./templates/head.php');
printHead("KitKatt's Profile"); ?>
<?php require_once('./templates/navbar.php');
printNav('https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png') ?>

<div class="wrapper">
    <div class="catForm">

        <div class=" form-group row">
            <div class="form-group col-md">
                <label for="name" class="col-md-5 col-form-label">Name:</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="name" id="name" value="" placeholder="John Doe">
                </div>
            </div>

            <div class="form-group col-md">
                <label class="col-md-5 col-form-label">Age: </label>
                <div class="col-md-12">
                    <input class="form-control" type="number" id="age" name="age" value="0" min="0" max="20">
                </div>
            </div>
            <div class="form-group col-md">
                <label class="col-md-5 col-form-label label">Gender: </label>
                <div class="form-check">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="maleGender" name="gender" value="Male">
                        <label for="maleGender" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="femaleGender" name="gender" value="Female">
                        <label for="femaleGender" class="form-check-label">Female</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="form-group col-md-10">
                <label for="url" class="col-md-5 col-form-label">Website: </label>
                <div class="col-md-12">
                    <input class="form-control" type="url" id="url" name="url" value="" placeholder="https://www.yourUrl.com">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="form-group col-md">
                <label for="description" class="col-md-5 col-form-label">description:</label>
                <textarea class="form-control" rows="5" name="description" id="description"></textarea>
            </div>
        </div>
        <div class="controls">
            <div class="form-group row justify-content-center btns">
                <a href="#" class="btn btn-primary submitBtn">Submit</a>
                <a href="#" class="btn btn-primary deleteBtn hide">Delete</a>
                <a href="#" class="btn btn-primary cancelBtn">Cancel</a>
            </div>
            <div class="form-group row justify-content-center">
                <p class="errorTxt">*Please fill all the fields.*</p>
            </div>
        </div>
    </div>
</div>

<?php require_once('./templates/footer.php');
printFooter(['addCat.js']) ?>