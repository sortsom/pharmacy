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
                                <a href="#" class="btn btn-outline-info">Export PDF</a>
                                <a href="#" class="btn btn-outline-info">Export Excel</a>
                                <a href="#" class="btn btn-outline-info">Printed</a>
                                <a href="{{route('/customer')}}" class="btn btn-outline-primary">Add Customer</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>CustomerCode</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Chhang</td>
                                    <td>M</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
