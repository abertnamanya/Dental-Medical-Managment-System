<div class="modal fade" id="holidays-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"> holidays Form </h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" style="display:none">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <form action="#" id="holidays-form" autocomplete="off">

                    @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label class="text-primary">Holiday </label>
                        <input type="text" name="name" placeholder="Enter Holiday Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-primary">Date of the year </label>
                        <input type="text" name="holiday_date" placeholder="yyy-mm-dd" class="form-control"
                               id="datepicker">
                    </div>
                    <div class="form-group">
                        <label class="text-primary">Is this the same date every year?</label><br>
                        <input type="radio" name="repeat_date" value="Yes"> Yes
                        <input type="radio" name="repeat_date" value="No"> No
                    </div>
                </form>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary" id="btn-save" onclick="save_data()">Save changes</button>
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


