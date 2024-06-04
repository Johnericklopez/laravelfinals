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


<div>

<div class="card card-primary">
        <div class="info" class="card-header ">
            <a href="{{ route('profile.show') }}" class="d-block"><img src="{{ asset('images/profile.jpg') }}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8"> {{ Auth::user()->name }}</a>
        </div>
    </div>

</div>


    <div class="card card-primary"  style="margin-left:200px; margin-right:200px;">
              <div  style="Background-color:blue;" class="card-header " >
                <h3  class="card-title">Add new employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  style="padding:20px; " action="{{url('employee')}}" method="POST">
              @csrf
                <div   style="margin-left:50px; margin-right:50px;" class="card-body">


              


                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('firstname')}}" name="name" >
                 



                  
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  value="{{old('lastname')}}" name="email">
                  

              
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  value="{{old('middlename')}}" name="password" >
             

                 
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  value="{{old('middlename')}}" name="conpass" >
               






</div>





                  
<div style="width:20%; margin-left:70px;" class="form-group">

                  <button style="background-color:blue; color:white; width:100%; margin:0;"href="employee.show" type="submit" class="btn btn-primary">Submit</button>
</div>

</div>
              </form>
            



@endsection


