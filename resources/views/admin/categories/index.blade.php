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
                                <a href="{{route('admin.categories.create')}}" class="btn btn-outline-primary">Add Category</a>
                                <a href="#" class="btn btn-outline-info">Export PDF</a>
                                <a href="#" class="btn btn-outline-info">Export Excel</a>
                                <a href="#" class="btn btn-outline-info">Printed</a>

                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Category ID</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Description</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <th>{{$category->name}}</th>
                                    <td>{{$category->description}}</td>
                                    <td class="d-flex">
                                        <a class="ml-2 btn btn-outline-dark" href="{{route('admin.categories.show',$category->id) }}"><i class="far fa-eye"></i></a>
                                        <a href="{{route('admin.categories.edit',$category->id)}}" class="ml-2 btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                        <form method="POST" action="{{route('admin.categories.destroy',$category->id)}}" class="d-inline-flex">
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
                                    {{$categories->links('pagination::bootstrap-4')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
