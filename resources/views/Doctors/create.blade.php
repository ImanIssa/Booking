@extends('layouts/dashlayout');
@section('doc')



<form action="{{route ('DoctorCreate') }}"  method='post' enctype="multipart/form-data">
    @csrf



    <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <img src="https://www-s3-live.kent.edu/s3fs-root/s3fs-public/styles/normal_banner/public/Deweese_0.jpg?itok=WBiVsODU"alt="Admin" class = "rounded-circle" height = "200" width="200">
                    <div class="mt-3">
                      <h4>Palestine</h4>
                      <p class="text-secondary mb-1">Gaza Strip</p>
                      
                      
                      <input type="submit" class="btn btn-outline-primary" href="/website" value ="Edit">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              
              </div>
            </div>

            <div class="col-md-8">    

            <?php if (session()->has('success')) :?>
              <div class= "alert alert-secondary" role="alert">
                <?= session()->get('success') ?>
              </div>
              <?php endif ?>
             
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

  <tr>
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
      <th scope="row">Gender</th>
      <td> 
     <select id=" "  class="form-control @error('email') is-invalid @enderror" name = "gender"   value="{{old('gender')}}" >
     <option value=""></option>
  <option value="male" name ="gender">Male</option>
  <option value="female"  name ="gender">Female</option>
  
</select>
      
      <p class ="invalid-feedback ">
           @error('gender') 
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
      <th scope="row">Age</th>
      <td><input type="number" class="form-control @error('age') is-invalid @enderror" placeholder="Enter your age" name = "age"   value="{{old('age')}}" >
      <p class ="invalid-feedback ">
         @error('age') 
         {{ $message }} 
         @enderror 
      </p>
      </td>
 </tr>

 <tr>
      <th scope="row">Image</th>
      <td>  <input type="file" id="myFile" class="form-control @error('image') is-invalid @enderror" name="image"  value="{{old('image')}}" >
      <p class ="invalid-feedback ">
         @error('image') 
         {{ $message }} 
         @enderror 
     </p>
     </td>
 </tr>
 
  
  <tr>
      <th scope="row">Start work at</th>
      <td><input type="text" class="form-control @error('start_time') is-invalid @enderror" name = "start_time"  value="{{old('start_time' )}}"  >
      <p class ="invalid-feedback ">
         @error('start_time') 
         {{ $message }} 
         @enderror 
     </p>
     </td>
  </tr>

  <tr>
      <th scope="row">Finish work at</th>
      <td> <input type="text" class="form-control @error('end_time') is-invalid @enderror"  name = "end_time"  value="{{old('end_time' )}}" >
      <p class ="invalid-feedback ">
        @error('end_time') 
         {{ $message }} 
         @enderror 
      </p>
      </td>
 </tr>

 <tr>
      <th scope="row">Price</th>
      <td> <input type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Enter the apointment's price" name = "price"  value="{{old('price' )}}" >
      <p class ="invalid-feedback ">
        @error('price') 
         {{ $message }} 
         @enderror 
      </p>
      </td>
 </tr>

 <tr>
      <th scope="row">Speciality</th>
      <td> 
      <select  class="form-control @error('specility_id') is-invalid @enderror" name = "specility_id"   value="" >
      <option value=""></option>
      @foreach($spec as $spec)
  <option value="<?= $spec->id?>"  > <?= $spec->name?> </option>
  @endforeach
  @error('speciality_id') 
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