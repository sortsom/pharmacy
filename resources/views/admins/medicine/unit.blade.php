@extends('admins.layouts.default')
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
                <div class="container">
                    <div class="card">
                        <div class="card-head py-2">
                            <div class="container p-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Unit</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="unit name" aria-label="unit name" ria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Descriptions</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="description" aria-label="description" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-secondary">Back</a>
                                <a href="{{asset('/units')}}" class="btn btn-outline-primary">Add</a>
                                {{--                                <button type="submit" class="btn btn-primary">Save Add</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
