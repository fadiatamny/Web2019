<div class="updateForm">
    <form action="idkwhereyet" method="POST">
        <div class="form-group row">
            <div class="form-group col-md-6">
                <label for="nameInput" class="col col-form-label">Title: </label>
                <div class="col">
                    <input class="form-control" type="text" id="nameInput" name="title" value="" placeholder="Title" required>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="dateInput" class="col col-form-label">Date: </label>
                <div class="col">
                    <input class="form-control" type="text" id="dateInput" name="date" value="" placeholder="xx/xx/xx" pattern="[0-9][0-9]/[0-9][0-9]/[0-9][0-9][0-9][0-9]" required>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="textArea">Details</label>
            <textarea class="form-control" id="textArea" rows="7"></textarea>
        </div>

        <div class="form-group row justify-content-center btDiv">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>