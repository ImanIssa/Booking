@extends('layouts/dashlayout');
@section('doc')

<!--@if($errors->any())
<div class="alert alert-danger">
  Oops , There is error 
  <ul>
    @foreach($errors->all() as $message)
    <li> {{ $message }} </li>
    @endforeach
</ul>
</div>
@endif-->


<form action="{{route ('AdminCreate') }}"  method='post' enctype="multipart/form-data">
    @csrf



    <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://www-s3-live.kent.edu/s3fs-root/s3fs-public/styles/normal_banner/public/Deweese_0.jpg?itok=WBiVsODU"alt="Admin" class = "rounded-circle" height = "200" width="200">
                    <div class="mt-3">
                      <h4>Palstine</h4>
                      <p class="text-secondary mb-1">Gaza Strip</p>
                      
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              
              </div>
            </div>

            <div class="col-md-8">    
             
<table class="table">
 
  <tbody>

  <tr>
      <th scope="col">Name</th>
      <th scope="col"><input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" name = "name"  value="{{old('name' )}}" >
         <p class ="invalid-feedback ">
           @error('name') 
           {{ $message }} 
           @enderror 
         </p>
    </th>
  </tr>

  
      <th scope="row">E-mail</th>
      <td><input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" name = "email"   value="{{old('email')}}" >
      <p class ="invalid-feedback ">
           @error('email') 
           {{ $message }} 
           @enderror 
     </p>
     </td>
  </tr>

  <tr>
      <th scope="row">Phone</th>
      <td><input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter your phone" name = "phone"  value="{{old('phone')}}"   >
      <p class ="invalid-feedback ">
           @error('phone') 
           {{ $message }} 
           @enderror 
     </p>
     </td>
  </tr>

  <tr>
      <th scope="row">Address</th>
      <td><input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Enter your address" name = "address"   value="{{old('address')}}" >
      <p class ="invalid-feedback ">
          @error('address') 
         {{ $message }} 
          @enderror 
      </p>
      </td>
  </tr>

  <tr>
      <th scope="row">Center Name</th>
      <td><input type="text" class="form-control @error('center_name') is-invalid @enderror" placeholder="Enter the center name" name = "center_name"   value="{{old('center_name')}}" >
      <p class ="invalid-feedback ">
         @error('center_name') 
         {{ $message }} 
         @enderror 
      </p>
      </td>
 </tr>

 <tr>
      <th scope="row">Image</th>
      <td>  <input type="file" id="myFile" name="image_path" >
      <p class ="invalid-feedback ">
         @error('image_path') 
         {{ $message }} 
         @enderror 
     </p>
     </td>
 </tr>
 
  
  <tr>
      <th scope="row">Center address</th>
      <td><input type="text" class="form-control @error('center_address') is-invalid @enderror" placeholder="Enter the center address" name = "center_address"  value="{{old('center_address' )}}"  >
      <p class ="invalid-feedback ">
         @error('center_address') 
         {{ $message }} 
         @enderror 
     </p>
     </td>
  </tr>

  <tr>
      <th scope="row">Center Contact</th>
      <td> <input type="text" class="form-control @error('center_contact_no') is-invalid @enderror" placeholder="Enter contact number" name = "center_contact_no"  value="{{old('center_contact_no' )}}" >
      <p class ="invalid-feedback ">
        @error('center_contact_no') 
         {{ $message }} 
         @enderror 
      </p>
      </td>
 </tr>

    <tr> <th> <td><button class="btn btn-outline-primary " type= submit>Create</button></td></th></tr>
 
  </tbody>
</table>
</div>
</form>
@endsection 
