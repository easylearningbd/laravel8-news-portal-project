@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="{{asset('backend/assets/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Welcome to Easy News </h4>
                        
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
        <a href=" {{ url('/') }} " target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Vist Fontend ? </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

 

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Change Password </h4>
                    
 <form class="forms-sample" action="{{ route('change.password') }}" method="post">
  @csrf

   
    <div class="form-group">
      <label for="exampleInputName1">Current Password </label>
      <input type="password" class="form-control" id="current_password" name="oldpassword">

      @error('oldpassword')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
  
    <div class="form-group">
      <label for="exampleInputName1">New Password </label>
      <input type="password" class="form-control" id="password" name="password">

       @error('password')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

      <div class="form-group">
      <label for="exampleInputName1">Confirm Password </label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">

       @error('password_confirmation')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
  

  
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                     
                    </form>
                  </div>
                </div>
              </div>

 
 



@endsection