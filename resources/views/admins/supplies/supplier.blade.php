@extends('admins.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="ml-lg-5">Add Suppliers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard admins</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container">
                    <div class="card">
                        <div class="card-head py-2">
                            <div class="container p-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Supplier ID</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="supplier ID" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Company Name</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Customer Name" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Phone</span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Phone Number" aria-label="Input Phone Number" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Email</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Supplier Email" aria-label="Email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Address</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Customer Address" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-secondary">Back</a>
                                <a href="{{asset('/suppliers')}}" class="btn btn-outline-primary">Save add</a>
                                {{--                                <button type="submit" class="btn btn-primary">Save Add</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
