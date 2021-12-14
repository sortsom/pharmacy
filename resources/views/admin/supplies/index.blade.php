@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Supplies List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Supplies List</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid mt-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="">Supplies List</span>
                            <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export PDF</a>
                            <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export Excel</a>
                            <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Printed</a>
                            <a href="{{route('admin.supplies.create')}}" class="btn btn-outline-primary float-right btn-sm ml-1">Add Supplies</a>
                            <div class="clearfix"></div>
                        </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Supplies ID</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>

                                </tr>
                                </thead>
                                <tbody
                                @forelse($supplies as $supply)
                                    <tr>
                                        <th scope="row">{{$supply->id}}</th>
                                        <td>{{$supply->name}}</td>
                                        <td>{{$supply->telephone}}</td>
                                        <td>{{$supply->address}}</td>
                                        <td class="d-flex">
                                            <a class="ml-2 btn btn-outline-dark" href="" data-toggle="modal" data-target="#supplyshow"><i class="far fa-eye"></i></a>
                                            <a href="" class="ml-2 btn btn-outline-primary" data-toggle="modal" data-target="#supplyedit"><i class="fas fa-edit"></i></a>
                                            <form method="POST" action="{{route('admin.supplies.destroy',$supply->id)}}" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
{{-- Supplies show --}}
                                <!-- Modal -->
                                    <div class="modal fade" id="supplyshow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--edit supply--}}
                                <!-- Modal -->
                                    <div class="modal fade" id="supplyedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
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
                                <tbody>
                            </table>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection
