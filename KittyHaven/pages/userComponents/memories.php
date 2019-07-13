<button id="addMemBtn" class="events mem" data-toggle="modal" data-target="#picMem">Add</button>
<button id="editMemBtn" class="events mem" data-toggle="modal" data-target="#picMem">Edit</button>
<button class="events mem" data-toggle="modal" data-target="#deleteMem">Delete</button>

<div class="clear"></div>

<div class="modal fade" id="picMem" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="warnningMessage"> WARNING ! YOU WILL OVERWRITE YOUR FIRST MEMORY. (CAPACITY REACHED | MAX 6)</span>
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
                        <input id='memTitle' value="" style="width: 100%;">
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        Description:
                    </div>
                    <div class="col-md">
                        <textarea id='memDescription' style="width: 100%;"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        Pic Url:
                    </div>
                    <div class="col-md">
                        <textarea id='memPic' style="width: 100%;"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="actionMem" type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteMem" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                <button id="deleteMemory" type="button" class="btn btn-primary">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div>
    <section class="memoryInfo">
        <h3 class="title"></h3>
        <p class="description"></p>
    </section>

    <section class="picDisplay">
        <img src="" id="memoryImg">
    </section>
    <div class="pagesPictures">
    </div>
</div>