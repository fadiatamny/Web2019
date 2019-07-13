<button id="editOverview" class="events" data-toggle="modal" data-target="#modalEdit">Edit</button>

<div class="clear"></div>
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalBox">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        Nickname:
                    </div>
                    <div class="col-md">
                        <input id='catNickname' value="" style="width: 100%;">
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        Description:
                    </div>
                    <div class="col-md">
                        <textarea id='catDescription' style="width: 100%;"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="editDetails" type="button" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<h1 id="nickname"></h1>
<p id="catDesc"></p>