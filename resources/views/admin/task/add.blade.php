<div class="modal fade" data-url="{{ route('task.add') }}" id="addemployee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add Task</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form id="add">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label for="level">Name:</label>
                                <input type="text" name="name" id="name" class="form-control">
                                <div class="error-messages" id="nameError"></div>
                            </div>
            
                            <div class="form-group mb-3">
                                <label for="type">Type:</label>
                                <select name="type" id="type" class="form-control">
                                    @foreach ($type as $company)
                                    <option value="{{$company->id}}">{{$company->type}}</option>
                                    @endforeach
                                </select>
                                <div class="error-messages" id="typeError"></div>
                            </div>
            
                            <div class="form-group mb-3">
                                <label for="type">Employee Name:</label>
                                <select name="employee" id="employee" class="form-control">
                                    @foreach ($employee as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                                <div class="error-messages" id="employeeError"></div>
                            </div>
            
                            <div class="form-group mb-3">
                                <label for="level">Description:</label>
                                <input type="text" name="description" id="description" class="form-control">
                                <div class="error-messages" id="descriptionError"></div>
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
