@extends('admins.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Medicine</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Medicine</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-head py-2">
                            <div class="container p-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Barcode</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="product code" aria-label="#"
                                                   aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Product Name</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="product name" aria-label="#" aria-describedby="basic-addon1">
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
