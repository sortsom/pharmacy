@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="col">Add Suppliers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Supplies</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid mt-4">
                    <div class="card">
                        <div class="card-head py-2">
                            <div class="container p-5">
                                <form action="{{route('admin.supplies.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">CompanyName</span>
                                            </div>
                                            <input type="text" class="form-control" name="name" placeholder="Username" aria-label="Customer Name" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Phone</span>
                                            </div>
                                            <input type="number" name="telephone" class="form-control" placeholder="Phone Number" aria-label="Input Phone Number" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Email</span>
                                            </div>
                                            <input type="text" name="email" class="form-control" placeholder="Supplier Email" aria-label="Email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Address</span>
                                            </div>
                                            <input type="text" name="address" class="form-control" placeholder="Customer Address" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Save Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
