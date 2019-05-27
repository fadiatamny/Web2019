<?php require_once('./templates/head.php');
printHead("Kitty Profile"); ?>
<?php require_once('./templates/navbar.php');
printNav('') ?>
<div class="container catDetails">
    <div class="row justify-content-center">
        <div class="col-md">
            <img class="catPic" src="">
        </div>
        <div class="col-md">
            <div class="row justify-content-center">
                <div class="col">
                    <h5 class="catName"></h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <p class="catDescription"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="borderLine"></div>
</div>

<div class="personalDataForm">


    <div class="modal fade" id="makeSure" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title sureTitle" id="">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body sureBody">
                    are you sure you want to adop this cat?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary goAhead" data-toggle="modal" data-target="#modal" data-dismiss="modal">Adopt!</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="sure?" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" id="modalBox">
                    <div class="row justify-content-center">
                        <div class="col-md">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <h5 class="thankYou">Special Thank You Note.</h5>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="letter">Your adoption request has been sent to the shelter. thank you soo much for providing a loving warm home for this little fluffy animal. <br>You will be contacted soon.<br>Redirecting 5 seconds</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <a href="#" onclick="clearOut()"><img class="logoPic" src="../images/blacklogo.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="catForm container">
        <form>
            <div class="form-group row justify-content-center">
                <p class="errorTxt hide">*Please fill all the fields.*</p>
            </div>
            <div class="form-group row justify-content-center">
                <h4>Please input your details: </h4>
            </div>
            <div class=" form-group row justify-content-center">
                <div class="form-group col-md-5">
                    <label for="name" class="col-form-label">Full Name:</label>
                    <input type="text" class="form-control" name="fullName" id="fullName" value="" placeholder="John Doe" required>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="form-group col-md-5">
                    <label for="url" class="col-form-label">Address: </label>
                    <input class="form-control" type="text" id="address" name="address" value="" placeholder="15th street, town, city">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="form-group col-md-5">
                    <label for="url" class="col-form-label">Phone: </label>
                    <input class="form-control" type="tel" id="phoneNum" pattern="^[0-9-+s()*]*$" name="phoneNum" value="" placeholder="xxx-xxx-xxxx">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="form-group col-md-5">
                    <label for="url" class="col-form-label">Email: </label>
                    <input class="form-control" type="email" id="email" name="email" value="" placeholder="example@stuff.com">
                </div>
            </div>
            <div class="controls">
                <div class="form-group row justify-content-center btns">
                    <a href="#" class="btn btn-primary finishAdopt" data-toggle="modal" data-target="#makeSure">Adopt!</a>
                    <a href="#" class="btn btn-primary cancelBtn">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once('./templates/footer.php');
printFooter(['adopt.js']) ?>