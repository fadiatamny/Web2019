<?php require_once('./templates/head.php');
printHead("KitKatt's Profile"); ?>
<?php require_once('./templates/navbar.php');
printNav('https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png') ?>
<div class="header wrapper">
    <h1>Cats List</h1>
    <a href="./catForm.php" class="addBtn">ADD</a>
</div>
<div class="wrapper">
    <div class="borderLine"></div>
</div>

<div class="wrapper">
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBox">
                    <div class="row justify-content-center">
                        <div class="col-md">
                            <img class="modalCatPic" src="">
                        </div>
                        <div class="col-md">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <h5 class="catNameModal"></h5>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="catDescriptionModal"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary editCat">Edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-2" id="catsList">
    </div>
</div>
<?php require_once('./templates/footer.php');
printFooter(['admin.js']) ?>