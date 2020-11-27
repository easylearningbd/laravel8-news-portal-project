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
                    <h4 class="card-title">User Profile </h4>

  <a href="{{ route('profile.edit') }}" style="float: right;" class="btn btn-success">Edit Profile</a>
                   


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ (!empty($editData->image))?url('upload/user_images/'.$editData->image):url('upload/no_image.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">User Name : {{ Auth::user()->name }}</h5>
    <p class="card-text">User Email : {{ $editData->email }}</p>
    <p class="card-text">User Mobile : {{ $editData->mobile }}</p>
    <p class="card-text">User Address : {{ $editData->address }}</p>
    <p class="card-text">User Gender : {{ $editData->gender }}</p>
    <p class="card-text">User Position : {{ $editData->position }}</p>
  </div>
   
   
</div>





  
                  </div>
                </div>
              </div>

 
 



@endsection