<div class="modal fade" data-url="{{ route('employee.add') }}" id="addemployee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add Employee</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form id="add">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required"> Employee Name</label>
                                <input required type="text" class="form-control" placeholder="Enter Employee Name"
                                    name="name">
                                    <div class="error-messages" id="nameError"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveBtn">Save</button>
                        </div>
                        <div class="error-messagess"></div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
