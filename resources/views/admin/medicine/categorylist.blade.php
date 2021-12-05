@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Category List</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="modal-footer">
                                <a href="#" class="btn btn-outline-info">Export PDF</a>
                                <a href="#" class="btn btn-outline-info">Export Excel</a>
                                <a href="#" class="btn btn-outline-info">Printed</a>
                                <a href="{{asset('/customer')}}" class="btn btn-outline-primary">Add Category</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Category ID</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <th>001</th>
                                    <td>Chhang</td>
                                    <td>M</td>
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
