@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Unit</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Unit</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-head py-2">
                            <div class="container p-5">
                                <form action="{{route('admin.units.index')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Unit</span>
                                            </div>
                                            <input type="text" name="name" class="form-control" placeholder="unit name" aria-label="unit name" ria-describedby="basic-addon1">
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
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
