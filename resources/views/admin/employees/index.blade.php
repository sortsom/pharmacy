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
                                <span class="">Employee List</span>

                                <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export PDF</a>
                                <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export Excel</a>
                                <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Printed</a>
                                <a href=""data-toggle="modal" data-target="#addemployee" class="btn btn-outline-primary float-right btn-sm ml-1">Add Employee</a>
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
                                        <th scope="col">ID card</th>
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
                                        <td>
                                            @if(!empty(trim($employee->image)))
                                                <img style="height: 45px; width: 45px;  border-radius: 50%" alt="image" src={{ asset('image/' . $employee->image) }}>
                                            @else
                                                <img style="height: 45px; width: 45px; border-radius: 50%" alt="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/495px-No-Image-Placeholder.svg.png">
                                            @endif
                                        </td>
                                        <td>{{$employee->name}}</td>
                                        <td>{{$employee->gender}}</td>
                                        <td>{{$employee->position}}</td>
                                        <td>{{$employee->idcard}}</td>
                                        <td>{{$employee->graduate}}</td>
                                        <td>{{$employee->salary}}$</td>
                                        <td>{{$employee->phone}}</td>
                                        <td>{{$employee->address}}</td>
                                        <td class="d-flex">
                                            <a class="ml-2 btn btn-outline-dark"data-toggle="modal" data-target="#employeeshow"  href=""><i class="far fa-eye"></i></a>
                                            <a href="" data-toggle="modal" data-target="#employeeId" class="ml-2 btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                            <form method="POST" action="{{route('admin.employees.destroy',$employee->id)}}" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{--    edit empoyees--}}
                                    <div class="modal fade" id="employeeId" tabindex="-1" role="dialog" aria-labelledby="employeeId" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid mt-4">
                                                        <div class="card">
                                                            <div class="card-head py-2">
                                                                <div class="container p-5">
                                                                    <form action="{{route('admin.employees.index',$employee->id)}}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="basic-addon1">Name</span>
                                                                                    </div>
                                                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                                                                           name="name" value="{{old('name',$employee->name)}}">
                                                                                    @error('name')
                                                                                    <span class="text-danger" role="alert">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" for="gender">Gender</span>
                                                                                    </div>
                                                                                    <select class="custom-select" id="gender" name="gender">
                                                                                        <option selected>---select gender---</option>
                                                                                        <option value="1" {{$employee->gender == 1 ? 'selected' : ''}}> Male </option>
                                                                                        <option value="2"{{$employee->gender == 2 ? 'selected' : ''}} > Female </option>
                                                                                        <option value="3" {{$employee->gender == 3 ? 'selected' : ''}}> Others </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="Idcard">Idcard</span>
                                                                                    </div>
                                                                                    <input type="text" name="idcard" value="{{old('idcard',$employee->idcard)}}" class="form-control" placeholder="Id card" aria-label="Id card" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="dob">DateBirth</span>
                                                                                    </div>
                                                                                    <input type="date" name="dob" value="{{old('dob',$employee->dob)}}" class="form-control" placeholder="DateBirth" aria-label="DateBirth" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div><div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="hiredate">hiredate</span>
                                                                                    </div>
                                                                                    <input type="date" name="date_in" value="{{old('date_in',$employee->date_in)}}" class="form-control" placeholder="hiredate" aria-label="hiredate" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" for="position">Position</span>
                                                                                    </div>
                                                                                    <select class="custom-select" id="position" name="position">
                                                                                        <option selected>---select position---</option>
                                                                                        <option value="1"{{$employee->position == 1 ? 'selected' : ''}} >One</option>
                                                                                        <option value="2"{{$employee->position == 2 ? 'selected' : ''}}>Two</option>
                                                                                        <option value="3"{{$employee->position == 3 ? 'selected' : ''}}>Three</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="graduate">Graduate</span>
                                                                                    </div>
                                                                                    <input type="text" name="graduate"  value="{{old('graduate',$employee->graduate)}}" class="form-control" placeholder="graduate" aria-label="graduate" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="salary">Salary</span>
                                                                                    </div>
                                                                                    <input type="number" name="salary" value="{{old('salary',$employee->salary)}}" class="form-control" placeholder="Salary" aria-label="Salary" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="basic-addon1">Phone</span>
                                                                                    </div>
                                                                                    <input type="text" name="phone" value="{{old('phone',$employee->phone)}}" class="form-control" placeholder="Phone name" aria-label="Phone name" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="address">Address</span>
                                                                                    </div>
                                                                                    <input type="text" name="address" value="{{old('address',$employee->address)}}" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Image</span>
                                                                                    </div>
                                                                                    <div class="custom-file">
                                                                                        <input type="file" name="image" class="custom-file-input" id="img">
                                                                                        <label class="custom-file-label" for="img">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <a href="{{route('admin.employees.index')}}" class="btn btn-secondary">Back</a>
                                                                            <button type="submit" class="btn btn-outline-primary">Save Add</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.row -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--    show empoyees--}}
                                    <div class="modal fade" id="employeeshow" tabindex="-1" role="dialog" aria-labelledby="employeeId" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Show Employee</h5>
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
                                                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                                                                           name="name" value="{{old('name',$employee->name)}}">
                                                                                    @error('name')
                                                                                    <span class="text-danger" role="alert">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" for="gender">Gender</span>
                                                                                    </div>
                                                                                    <select class="custom-select" id="gender" name="gender">
                                                                                        <option selected>---select gender---</option>
                                                                                        <option value="1" {{$employee->gender == 1 ? 'selected' : ''}}> Male </option>
                                                                                        <option value="2"{{$employee->gender == 2 ? 'selected' : ''}} > Female </option>
                                                                                        <option value="3" {{$employee->gender == 3 ? 'selected' : ''}}> Others </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="Idcard">Idcard</span>
                                                                                    </div>
                                                                                    <input type="text" name="idcard" value="{{old('idcard',$employee->idcard)}}" class="form-control" placeholder="Id card" aria-label="Id card" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="dob">DateBirth</span>
                                                                                    </div>
                                                                                    <input type="date" name="dob" value="{{old('dob',$employee->dob)}}" class="form-control" placeholder="DateBirth" aria-label="DateBirth" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div><div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="hiredate">hiredate</span>
                                                                                    </div>
                                                                                    <input type="date" name="date_in" value="{{old('date_in',$employee->date_in)}}" class="form-control" placeholder="hiredate" aria-label="hiredate" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" for="position">Position</span>
                                                                                    </div>
                                                                                    <select class="custom-select" id="position" name="position">
                                                                                        <option selected>---select position---</option>
                                                                                        <option value="1"{{$employee->position == 1 ? 'selected' : ''}} >One</option>
                                                                                        <option value="2"{{$employee->position == 2 ? 'selected' : ''}}>Two</option>
                                                                                        <option value="3"{{$employee->position == 3 ? 'selected' : ''}}>Three</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="graduate">Graduate</span>
                                                                                    </div>
                                                                                    <input type="text" name="graduate"  value="{{old('graduate',$employee->graduate)}}" class="form-control" placeholder="graduate" aria-label="graduate" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="salary">Salary</span>
                                                                                    </div>
                                                                                    <input type="number" name="salary" value="{{old('salary',$employee->salary)}}" class="form-control" placeholder="Salary" aria-label="Salary" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="basic-addon1">Phone</span>
                                                                                    </div>
                                                                                    <input type="text" name="phone" value="{{old('phone',$employee->phone)}}" class="form-control" placeholder="Phone name" aria-label="Phone name" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="address">Address</span>
                                                                                    </div>
                                                                                    <input type="text" name="address" value="{{old('address',$employee->address)}}" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Image</span>
                                                                                    </div>
                                                                                    <div class="custom-file">
                                                                                        <input type="file" name="image" class="custom-file-input" id="img">
                                                                                        <label class="custom-file-label" for="img">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <a href="{{route('admin.employees.index')}}" class="btn btn-secondary">Back</a>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.row -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
{{--add employee--}}
    <!-- Modal -->
    <div class="modal fade" id="addemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid mt-4">
                        <div class="card">
                            <div class="card-head py-2">
                                <div class="container p-5">
                                    <form action="{{route('admin.employees.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Name</span>
                                                    </div>
                                                    <input type="text" name="name" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" for="gender">Gender</span>
                                                    </div>
                                                    <select class="custom-select" id="gender" name="gender">
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
                                                        <span class="input-group-text" id="Idcard">Idcard</span>
                                                    </div>
                                                    <input type="text" name="idcard" class="form-control" placeholder="Id card" aria-label="Id card" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="DateBirth">DateBirth</span>
                                                    </div>
                                                    <input type="date" name="dob" class="form-control" placeholder="DateBirth" aria-label="DateBirth" aria-describedby="basic-addon1">
                                                </div>
                                            </div><div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="hiredate">hiredate</span>
                                                    </div>
                                                    <input type="date" name="date_in"  class="form-control" placeholder="hiredate" aria-label="hiredate" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" for="Position">Position</span>
                                                    </div>
                                                    <select class="custom-select" id="position" name="position">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="graduate">Graduate</span>
                                                    </div>
                                                    <input type="text" name="graduate" class="form-control" placeholder="graduate" aria-label="graduate" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="salary">Salary</span>
                                                    </div>
                                                    <input type="number" name="salary" class="form-control" placeholder="Salary" aria-label="Salary" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Phone</span>
                                                    </div>
                                                    <input type="text" name="phone" class="form-control" placeholder="Phone name" aria-label="Phone name" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="address">Address</span>
                                                    </div>
                                                    <input type="text" name="address" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Image</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="img">
                                                        <label class="custom-file-label" for="img">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#" class="btn btn-secondary">Back</a>
                                            <button type="submit" class="btn btn-outline-primary">Save Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div></div>
                </div>
            </div>
        </div>
    </div>
@endsection
