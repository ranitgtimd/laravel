@extends('layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'Task')
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Task List</h4>
                            </div>

                            <a class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"
                                href="" data-bs-toggle="modal" data-bs-target="#addemployee"><i class="mdi mdi-plus me-1"></i> New Task</a>
                            {{-- <a class="btn btn-primary add-list btn-sm text-white" href="{{ route('company.add') }}"><i
                                class="las la-plus mr-3"></i>Add Company</a> --}}
                        </div>

                        <div class="card-body">
                            <div class="table-responsive-lg">
                                <table class=" datatable table align-middle table-nowrap table-check" id="employee-table">
                                    <thead>
                                        <tr class="ligth">
                                            <th>#</th>
                                            <th>Task Name</th>
                                            <th>Description</th>
                                            <th>Employee Name</th>
                                            <th>Task Type</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    
                                </table>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#employee-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('task.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'descrription',
                    name: 'descrription',
                },
                {
                    data: 'employee.name',
                    name: 'employee.name',
                },
                {
                    data: 'type.type',
                    name: 'type.type'
                },
                {
                    data: 'status',
                    name: 'status',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                },
            ]
        });
    });
</script>
@include('admin.task.add')

@endsection