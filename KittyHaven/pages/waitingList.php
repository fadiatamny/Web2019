<?php require_once('./templates/head.php');
printHead("Admin interface"); ?>
<?php require_once('./templates/navbar.php');
printNav('https://cdn1.iconfinder.com/data/icons/business-charts/512/customer-512.png') ?>
<div class="header wrapper">
    <a href="./admin.php" class="catsList"><h1>Cats List</h1></a>
    <a href="./waitingList.php" class="waitingText"><h1>Waiting List</h1></a>
</div>
<div class="wrapper">
    <div class="borderLine"></div>
</div>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">CatID</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <tr>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p id="approveheader">Please input username and password for the new account</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalBox">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <label class="waitingLabels">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Jimmy51">
                        <label class="waitingLabels">Password:</label>
                        <input type="text" class="form-control" id="password" placeholder="x13ysku">
                        <label class="waitingLabels">Adoption Date:</label>
                        <input type="text" class="form-control" id="date" placeholder="XX/XX/XX">
                        <p id="errmsg">Fields must be filled! </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary approveAdopt">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</div>
<?php require_once('./templates/footer.php');
printFooter(['waiting.js']) ?>