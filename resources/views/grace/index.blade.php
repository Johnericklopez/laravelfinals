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





    <div class="card card-primary"  style="margin-left:200px; margin-right:200px;">
              <div  style="Background-color:blue;" class="card-header " >
                <h3  class="card-title">Add new employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  style="padding:20px; " action="{{url('employee')}}" method="POST">
              @csrf
                <div   style="margin-left:50px; margin-right:50px;" class="card-body">


                <div style="display:flex;width:100%; ">


                  <div style="width:33%; margin:10px;"class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('firstname')}}" name="name" >
                  </div>
                  <div style="width:34%; margin:10px;" class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  value="{{old('lastname')}}" name="email">
                  </div>
                  <div style="width:33%; margin:10px;" class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  value="{{old('middlename')}}" name="password" >
                  </div>

                  <div style="width:33%; margin:10px;" class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  value="{{old('middlename')}}" name="conpass" >
                  </div>



</div>







</div>





                  


                  <button style="background-color:red; color:white; width:100%; margin:0;"href="employee.show" type="submit" class="btn btn-primary">Submit</button>
             
              </form>
            </div>


            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('home')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

@endsection


