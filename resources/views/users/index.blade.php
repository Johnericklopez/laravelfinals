@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size:20px;" class="m-0">Employee Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           >
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

    <!-- /.content-header -->



    <div class="card card-primary"  style="margin-left:250px; margin-right:250px;">
              <div  style="Background-color:#2980b9;" class="card-header " >
                <h3  class="card-title">Add new employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  style="padding:20px; ">
                <div   style="margin-left:50px; margin-right:50px;" class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">

                  <label for="exampleInputPassword1">Country</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="Please select your Country">
                    <option>Please select your Country</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>

                  </div>


                  <div class="form-group">

                  <label for="exampleInputPassword1">State</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="Please select your State">
                    <option>Please select your State</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>

                  </div>


                  <div class="form-group">

                  <label for="exampleInputPassword1">City</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="Please select your City">
                    <option>Please select your City</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Zip</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" >
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="Date" class="form-control" id="exampleInputPassword1" >
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Hired Date</label>
                    <input type="Date" class="form-control" id="exampleInputPassword1" >
                  </div>



                  
                  <div class="form-group">

                  <label for="exampleInputPassword1">Department</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="General Management">
                    <option>General Managemen</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>

                  </div>


                  

                  




                  







                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection
