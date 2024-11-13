@extends('index')
@section('title','Leave Type')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color:#07BEF1; color:white;">
                <div class="row">
                    <div class="col-6 d-flex align-items-center text-white">
                        <h3 class="card-title">Leave Type List</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-primary pr-4 pl-4" data-toggle="modal" data-target="#modal-default">
                            Add
                        </button>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="AdminAccount" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Leave Type Name</th>
                            <th>Category</th>
                            <th>Valid Date(From)</th>
                            <th>Valid Date(To)</th>
                            <th>Allocation</th>
                            <th>Default Quota</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#07BEF1; color:white;">
                <h4 class="modal-title">Leave Type Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('leaves.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="shiftname">Leave Name</label>
                        <input type="text" class="form-control" id="shiftname" placeholder="Enter leave type Name">
                    </div>
                    <div class="form-group">
                    <label>Leave Category</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected" disabled>Select a leave category</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="shiftname">Leave Default Quota</label>
                        <input type="text" class="form-control" id="shiftname" placeholder="Enter leave type quota">
                    </div>
                    <div class="form-group">
                        <label>Leave Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter leave type description"></textarea>
                    </div>
                </div>
                <div class="modal-footer" style="background-color:#E6FAFF;">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Discard</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection
