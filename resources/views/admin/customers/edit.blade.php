@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="col">Customers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard admins</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid mt-4">
                    <div class="card">
                        <div class="card-head py-2">
                            <div class="container p-5">
                                <form action="{{route('admin.customers.update',$customers->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                                </div>
                                                <input type="text" name="name" value="{{old('name',$customers->name)}}" class="form-control" placeholder="Username" aria-label="Customer Name" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" for="inputGroupSelect01">Gender</span>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01" name="gender">
                                                    <option selected>Choose...</option>
                                                    <option value="1" {{$customers->gender == 1 ? 'selected' : ''}}>Male</option>
                                                    <option value="2" {{$customers->gender == 2 ? 'selected' : ''}}>Female</option>
                                                    <option value="3" {{$customers->gender == 3 ? 'selected' : ''}}>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Phone</span>
                                                </div>
                                                <input type="text" name="telephone" value="{{old('telephone',$customers->telephone)}}" class="form-control" placeholder="Phone Number" aria-label="Input Phone Number" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Address</span>
                                                </div>
                                                <input type="text" name="address" class="form-control" value="{{old('address',$customers->address)}}" placeholder="Customer Address" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary">Back</a>
                                        <button type="submit" class="btn btn-primary">Save Add</button>
                                    </div>
                                </form></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection
