<button id="addEvent" class="events" data-toggle="modal" data-target="#modal">Add</button>

<div class="clear"></div>
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
                    <div class="col-md-3">
                        Title:
                    </div>
                    <div class="col-md">
                        <input id='eventTitle' value="" style="width: 100%;">
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        Description:
                    </div>
                    <div class="col-md">
                        <textarea id='eventDes' style="width: 100%;"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="insertEvent" type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalBox">
                <div class="row justify-content-center">
                    Are you sure?
                </div>
            </div>
            <div class="modal-footer">
                <button id="deleteEvent" type="button" class="btn btn-primary">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="accordion">
</div>