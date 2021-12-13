@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="col">Orders</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item">Orders</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid mt-4">
                    <div class="card">
                        <div class="card-head py-2">
                            <div class="container p-5">
                                <form method="POST" action="{{route('admin.orders.store') }}" enctype="multipart/form-data">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="employee_id">Employees ID</label>
                                            </div>
                                            <select class="custom-select" id="employee_id" name="employee_id" >
                                                <option selected>---Select Employee---</option>
                                                @foreach($employees as $employee)
                                                <option value="{{ $employee->id}}">{{$employee->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="supply_id">Supplies ID</label>
                                            </div>
                                            <select class="custom-select" id="supply_id">
                                                <option selected>---Select Supply---</option>
{{--                                                @foreach($supplies as $supply)--}}
{{--                                                <option value="{{$supply->id}}">{{$supply->name}}</option>--}}
{{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Orderdate</span>
                                            </div>
                                            <input type="date" name="date_in" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-outline-primary">Back</a>
                                <button type="submit" class="btn btn-primary">Save Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
