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
                                <a href="{{route('admin.customers.create')}}" class="btn btn-outline-primary">Add Customer</a>
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
                                        <a class="ml-2 btn btn-outline-dark" href="{{route('admin.customers.show',$customer->id) }}"><i class="far fa-eye"></i></a>
                                        <a href="{{route('admin.customers.edit',$customer->id)}}" class="ml-2 btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                        <form method="POST" action="{{route('admin.customers.destroy',$customer->id)}}" class="d-inline-flex">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-2 btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
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
@endsection
