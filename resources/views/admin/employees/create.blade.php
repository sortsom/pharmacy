@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="col">Add Employee</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Add Employee</li>
                    </ol>
                </div><!-- /.col -->
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
                </div></div><!-- /.container-fluid -->

    </div>
    </div>
@endsection
