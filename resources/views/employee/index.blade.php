@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size:20px;" class="m-0">User profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

    <!-- /.content-header -->


<div class = "q"style="display:flex; width:100%;">
<div class="card card-primary"style="margin-left:80px; margin-right:10px;width:20%;height:40%;">
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
           
                <img src="{{ asset('images/profile.jpg') }}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="width:100%;height:100%;">
        </div>
    </div>
</div>
<div class="card card-primary"  style="margin-left:10px; margin-right:80px;width:80%;">
              <div  style="Background-color:blue;" class="card-header " >
                <h3  class="card-title"></h3>
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
                   <br>
                    <button style="background-color:blue; color:white; width:20%; margin:0;"href="employee.show" type="submit" class="btn btn-primary">Submit</button>







</div>

</div>



                  


                  

</div>
              </form>
            



@endsection


