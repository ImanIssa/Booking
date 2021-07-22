
@extends('layouts/dashlayout');
@section('doc')


<form action=""  method='get' enctype="multipart/form-data">
    @csrf
    <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://affiliatedderm.com/wp-content/uploads/2019/06/Affiliated-Dermatologists_GroupPhoto_5-20-19_341-PRINT-819x1024.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      
                      
                      <button class="btn btn-outline-primary" >Edit</button>
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
      <th scope="col">{{ $admin->name }}</th>
     
    </tr>
    <tr>
      <th scope="row">ID</th>
      <td>{{ $admin->user_id }}</td>
     
    </tr>
    <tr>
      <th scope="row">E-mail</th>
      <td>{{ $admin->email }}</td>
     
    </tr>

    <tr>
      <th scope="row">Phone</th>
      <td>{{ $admin->phone }}
     
      </td>
    
    </tr>

    <tr>
      <th scope="row">Address</th>
      <td>{{ $admin->address }}</td>
    
    </tr>
    <tr>
      <th scope="row">Center Name</th>
      <td>{{ $admin->center_name}}</td>
     
    </tr>
    <tr>
      <th scope="row">Image</th>
      <td>
      <img src = {{asset('storage/' . $admin->image_path)}}> 
      
   

      </td>
     
    </tr>
 
  
    <tr>
      <th scope="row">Center address</th>
      <td>{{ $admin->center_address }}</td>
    
    </tr>
    <tr>
      <th scope="row">Center Contact
    
     <td>{{ $admin->center_contact_no }}</td>


   

     
@endforeach

  </tbody>
</table>

<input type="submit"  class="btn btn-outline-primary" formaction="/AdminEdit/<?= $admin->user_id ?>" value="Edit">
</div>
</form>
@endsection 
