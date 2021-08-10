
@extends('layouts/dashlayout');
@section('doc')


<form action=""  method='get' enctype="multipart/form-data">
    @csrf
 
   

 <div class="col-md-12">    

 <div style="overflow-x:auto;">
 <element class="datepicker">         
<table class="table" style="background-color:#f2f2f2">
<thead class="thead-dark">
    <tr >

      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone</th>
      
      <th scope="col">Address</th>
      <th scope="col">Center Name</th>
      <th scope="col">Center address</th>
      <th scope="col">Center Contact</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
</thead>

  <tbody>
  @foreach($admin as $admin)   
  </tr>
    <tr >
      
      <td>{{ $admin->user_id }}</td>
      <td>{{ $admin->name }}</td>
      <td>{{ $admin->email }}</td>
      <td>{{ $admin->phone }} </td>
     
      <td>{{ $admin->address }}</td>
      <td>{{ $admin->center_name}}</td>
      <td>{{ $admin->center_address }}</td>
      <td>{{ $admin->center_contact_no }}</td>
      <td> <img src = {{asset('storage/' . $admin->image_path)}} height =100 width=200> </td>
      <td> <input type="submit"  class="btn btn-outline-primary" formaction="/AdminEdit/<?= $admin->user_id ?>" value="Edit"> </td>   
    </tr>
   

   
@endforeach

  </tbody>
</table>


</div>
</element>
</div>
</form>
@endsection 
