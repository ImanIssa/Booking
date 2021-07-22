@extends('layouts/dashlayout');
@section('doc')
<form action="/AdminEdit/<?= $user_id ?>"  method='post' enctype="multipart/form-data">

@csrf
<input type= "hidden" name="_method"  value = "put">
    <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://affiliatedderm.com/wp-content/uploads/2019/06/Affiliated-Dermatologists_GroupPhoto_5-20-19_341-PRINT-819x1024.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      
                      
                      <button class="btn btn-outline-primary" href= "/AdminEdit">Edit</button>
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
  @foreach($admin as $admin)  
  <tr>
      <th scope="col">Name</th>
      <th scope="col"><input type="text" class="form-control" placeholder="Enter your name" name = "name" value="<?= $admin->name ?>" >
      <p class ="invalid-feedback ">
           @error('name') 
           {{ $message }} 
           @enderror 
         </p></th>
     
    </tr>
    <tr>
      <th scope="row">E-mail</th>
      <td><input type="email" class="form-control" placeholder="Enter your email" name = "email"  value="<?= $admin->email ?>"> 
      <p class ="invalid-feedback ">
         @error('center_name') 
         {{ $message }} 
         @enderror 
      </p>
    </td>
     
    </tr>

    <tr>
      <th scope="row">Phone</th>
      <td><input type="text"  class="form-control"  placeholder="Enter your number"  name="phone"   value="<?= $admin->phone ?>">
      <p class ="invalid-feedback ">
           @error('phone') 
           {{ $message }} 
           @enderror 
     </p></td>
    
    </tr>

    <tr>
      <th scope="row">Address</th>
      <td><input type="text"  class="form-control"  placeholder="Enter your address" name="address"  value="<?= $admin->address ?>" >
      <p class ="invalid-feedback ">
          @error('address') 
         {{ $message }} 
          @enderror 
      </p></td>
    
    </tr>
    <tr>
      <th scope="row">Center Name</th>
      <td><input type="text"  class="form-control"  placeholder="Enter the center name"  name="center_name"   value="<?= $admin->center_name ?>">
      <p class ="invalid-feedback ">
         @error('center_name') 
         {{ $message }} 
         @enderror 
      </p></td>
     
    </tr>
    <tr>
      <th scope="row">Image</th>
      <td>
     <input type="file" id="myFile" name="filename">
     <img src = {{asset('storage/' . $admin->image_path)}}> 
     <p class ="invalid-feedback ">
         @error('image_path') 
         {{ $message }} 
         @enderror 
     </p>
      </td>
     
    </tr>
 
  
    <tr>
      <th scope="row">Center address</th>
      <td><input type="text"  class="form-control"  placeholder="Enter the center address"  name="center_address"  value="<?= $admin->center_address?>" >
      <p class ="invalid-feedback ">
         @error('center_address') 
         {{ $message }} 
         @enderror 
     </p></td>
    
    </tr>
    <tr>
      <th scope="row">Center Contact  </th>
    
     <td> <input type="text" class="form-control" placeholder="Enter contact number" name = "center_contact_no"   value="<?= $admin->center_contact_no ?> ">
     <p class ="invalid-feedback ">
        @error('center_contact_no') 
         {{ $message }} 
         @enderror 
      </p></td>
     

    
     
    </tr>

    <tr> <th> <td><button class="btn btn-outline-primary" type=submit  >Update</button></th></td></tr>
   @endforeach 
  </tbody>
</table>
</div>
</form>
@endsection