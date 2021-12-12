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
                                    <th scope="email">Email</th>
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
                                            <a class="ml-2 btn btn-outline-dark" href="{{route('admin.supplies.show',$supply->id) }}"><i class="far fa-eye"></i></a>
                                            <a href="{{route('admin.supplies.edit',$supply->id)}}" class="ml-2 btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                            <form method="POST" action="{{route('admin.supplies.destroy',$supply->id)}}" class="d-inline-flex">
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
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
