@extends('admins.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="col">Employees</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Dashboard admins</li>
                    </ol>
                </div><!-- /.col -->
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
                                           <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                       </div>
                                   </div>
                                  <div class="col-md-6">
                                      <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                              <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                                          </div>
                                          <select class="custom-select" id="inputGroupSelect01">
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
                                               <span class="input-group-text" id="basic-addon1">Idcard</span>
                                           </div>
                                           <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1">DateBirth</span>
                                           </div>
                                           <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                       </div>
                                   </div><div class="col-md-6">
                                       <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1">hiredate</span>
                                           </div>
                                           <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text" for="">Position</label>
                                           </div>
                                           <select class="custom-select" id="inputGroupSelect01">
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
                                               <label class="input-group-text" for="">Graduate</label>
                                           </div>
                                           <select class="custom-select" id="inputGroupSelect01">
                                               <option selected>Choose...</option>
                                               <option value="1">One Year</option>
                                               <option value="2">Two</option>
                                               <option value="3">Three</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1">Salary</span>
                                           </div>
                                           <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1">Phone</span>
                                           </div>
                                           <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1">Address</span>
                                           </div>
                                           <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                       </div>
                                   </div>
                                   <div class="col-md-12">
                                       <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text">Image</span>
                                           </div>
                                           <div class="custom-file">
                                               <input type="file" class="custom-file-input" id="inputGroupFile01">
                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-secondary">Back</a>
                                <a href="{{asset('/employees')}}" class="btn btn-outline-primary">Save add</a>
{{--                                <button type="submit" class="btn btn-primary">Save Add</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
