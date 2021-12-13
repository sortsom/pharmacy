@extends('admin.layouts.default')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Order List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Order List</li>
                    </ol>
                </div><!-- /.col -->

                <div class="container-fluid mt-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="">Order List</span>
                            <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export PDF</a>
                            <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export Excel</a>
                            <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Printed</a>
                            <a href="{{asset('/supplier')}}" class="btn btn-outline-primary float-right btn-sm ml-1">Add Supplies</a>
                            <div class="clearfix"></div>
                        </div>
                        <table id="#" class="display nowrap table table-bordered "  style="width:100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>Supply</th>
                                <th>employees</th>
                                <th>orderdate</th>
                                <th>details</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
