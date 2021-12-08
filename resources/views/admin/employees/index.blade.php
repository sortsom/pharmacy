@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Employee List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employee List</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid mt-4">
                        <div class="card">
                            <div class="card-header">
                                <span class="">Supplies List</span>
                                <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export PDF</a>
                                <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export Excel</a>
                                <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Printed</a>
                                <a href="{{route('admin.employees.create')}}" class="btn btn-outline-primary float-right btn-sm ml-1">Add Supplies</a>
                                <div class="clearfix"></div>
                            </div>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th>image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Idcard</th>
                                        <th scope="col">Graduate</th>
                                        <th scope="col">Salary</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($employees as $employee)
                                    <tr>
                                        <th scope="row">{{$employee->id}}</th>
                                        <td><img src="{{asset('admins/dist/img/logo-1.jpg')}}" alt="Pharmacy" class=" img-circle " style=" width: 50px;height:50px;"></td>
                                        <td>{{$employee->name}}</td>
                                        <td>{{$employee->gender}}</td>
                                        <td>{{$employee->position}}</td>
                                        <td>{{$employee->idcard}}</td>
                                        <td>{{$employee->graduate}}</td>
                                        <td>{{$employee->salary}}</td>
                                        <td>{{$employee->phone}}</td>
                                        <td>{{$employee->address}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('admin.employees.edit',$employee->id)}}" class="btn btn-outline-success">Edit</a>
                                            <form method="POST" action="{{route('admin.employees.destroy',$employee->id)}}" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="11" class="text-center">
                                            No data to be displayed
                                        </td>
                                    </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                <div class="card-foot">
                                    <div class="d-flex justify-content-lg-end">
                                        {{$employees->links('pagination::bootstrap-4')}}
                                    </div>
                                </div>
                         </div>

                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
