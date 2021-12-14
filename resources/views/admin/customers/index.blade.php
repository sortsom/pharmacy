@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Customer List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employee List</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="modal-footer">
                                <a href="" data-toggle="modal" data-target="#addcustomer" class="btn btn-outline-primary">Add Customer</a>
                                <a href="#" class="btn btn-outline-info">Printed</a>
                                <a href="#" class="btn btn-outline-info">Export Excel</a>
                                <a href="#" class="btn btn-outline-info">Export PDF</a>

                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">CustomerCode</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($customers as $customer)
                                <tr>
                                    <th scope="row">{{$customer->id}}</th>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->gender}}</td>
                                    <td>{{$customer->telephone}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td class="d-flex">
                                        <a class="ml-2 btn btn-outline-dark" href="" data-toggle="modal" data-target="#customeredit"><i class="far fa-eye"></i></a>
                                        <a href="" data-toggle="modal" data-target="#customershow" class="ml-2 btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                        <form method="POST" action="{{route('admin.customers.destroy',$customer->id)}}" class="d-inline-flex">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-2 btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
{{-- edit customer --}}
                                <!-- Modal -->
                                <div class="modal fade" id="customeredit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Show Customer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid mt-4">
                                                    <div class="card">
                                                        <div class="card-head py-2">
                                                            <div class="container p-5">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                                                                </div>
                                                                                <input type="text" name="name" value="{{old('name',$customer->name)}}" class="form-control" placeholder="Username" aria-label="Customer Name" aria-describedby="basic-addon1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" for="inputGroupSelect01">Gender</span>
                                                                                </div>
                                                                                <select class="custom-select" id="inputGroupSelect01" name="gender">
                                                                                    <option selected>Choose...</option>
                                                                                    <option value="1" {{$customer->gender == 1 ? 'selected' : ''}}>Male</option>
                                                                                    <option value="2" {{$customer->gender == 2 ? 'selected' : ''}}>Female</option>
                                                                                    <option value="3" {{$customer->gender == 3 ? 'selected' : ''}}>Others</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon1">Phone</span>
                                                                                </div>
                                                                                <input type="text" name="telephone" value="{{old('telephone',$customer->telephone)}}" class="form-control" placeholder="Phone Number" aria-label="Input Phone Number" aria-describedby="basic-addon1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon1">Address</span>
                                                                                </div>
                                                                                <input type="text" name="address" class="form-control" value="{{old('address',$customer->address)}}" placeholder="Customer Address" aria-label="Username" aria-describedby="basic-addon1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="{{route('admin.customers.index')}}" class="btn btn-secondary">Back</a>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{-- show customer--}}
                                <div class="modal fade" id="customershow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid mt-4">
                                                    <div class="card">
                                                        <div class="card-head py-2">
                                                            <div class="container p-5">
                                                                <form action="{{route('admin.customers.update',$customer->id)}}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                                                                </div>
                                                                                <input type="text" name="name" value="{{old('name',$customer->name)}}" class="form-control" placeholder="Username" aria-label="Customer Name" aria-describedby="basic-addon1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" for="inputGroupSelect01">Gender</span>
                                                                                </div>
                                                                                <select class="custom-select" id="inputGroupSelect01" name="gender">
                                                                                    <option selected>Choose...</option>
                                                                                    <option value="1" {{$customer->gender == 1 ? 'selected' : ''}}>Male</option>
                                                                                    <option value="2" {{$customer->gender == 2 ? 'selected' : ''}}>Female</option>
                                                                                    <option value="3" {{$customer->gender == 3 ? 'selected' : ''}}>Others</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon1">Phone</span>
                                                                                </div>
                                                                                <input type="text" name="telephone" value="{{old('telephone',$customer->telephone)}}" class="form-control" placeholder="Phone Number" aria-label="Input Phone Number" aria-describedby="basic-addon1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="basic-addon1">Address</span>
                                                                                </div>
                                                                                <input type="text" name="address" class="form-control" value="{{old('address',$customer->address)}}" placeholder="Customer Address" aria-label="Username" aria-describedby="basic-addon1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="{{route('admin.customers.index')}}" class="btn btn-secondary">Back</a>
                                                                        <button type="submit" class="btn btn-primary">Save Add</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            No data to be displayed
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            <div class="card-foot">
                                <div class="d-flex justify-content-lg-end">
                                    {{$customers->links('pagination::bootstrap-4')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
{{--    Add customer --}}
    <!-- Modal -->
    <div class="modal fade" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid mt-4">
                        <div class="card">
                            <div class="card-head py-2">
                                <div class="container p-5">
                                    <form action="{{route('admin.customers.index')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Name</span>
                                                    </div>
                                                    <input type="text" name="name" class="form-control" placeholder="Username" aria-label="Customer Name" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" for="inputGroupSelect01">Gender</span>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01" name="gender">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                        <option value="3">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Phone</span>
                                                    </div>
                                                    <input type="text" name="telephone" class="form-control" placeholder="Phone Number" aria-label="Input Phone Number" aria-describedby="basic-addon1">
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
                </div>
            </div>
        </div>
    </div>
@endsection
