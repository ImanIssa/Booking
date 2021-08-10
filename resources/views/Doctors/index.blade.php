
@extends('layouts/dashlayout');
@section('doc')


<form action=""  method='post' enctype="multipart/form-data">
    @csrf
    <input type= "hidden" name="_method"  value = "delete">
    <?php if (session()->has('success')) :?>
              <div>
                <?= session()->get('success') ?>
              </div>
              <?php endif ?>
              
    <h4><p class="a"  style="color:#a5c422;">List of Doctors</p></h4>
    <div class="col-md-12"> 
    <div style="overflow-x:auto;">
      <element class="datepicker">

    <table class="table">
  
  <thead class="thead-dark">
    <tr >
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>
      <th scope="col">price</th>
      <th scope="col">Start work</th>
      <th scope="col">Finish work</th>
      <th scope="col">Speciality</th>
    
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
      @foreach($doctor as $doctors)
    <tr>
      <td>{{$doctors->id}}</td>
      <td> <img src = {{asset('storage/' . $doctors->image)}} height="70" width="100"> </td>      
      <td><a href="/DoctorEdit/<?= $doctors->id?>"> {{$doctors->name}}</a></td>
      <td>{{$doctors->email}}</td>
      <td>{{$doctors->gender}}</td>
      <td>{{$doctors->phone}}</td>
      <td>{{$doctors->address}}</td>
      <td>{{$doctors->age}}</td>
      <td>{{$doctors->price}}</td>
      <td>{{$doctors->start_time}}</td>
      <td>{{$doctors->end_time}}</td>
      <td>{{$doctors->specility_id}}</td>
     
      <td><input type="submit" name="a" class="btn btn-danger" formaction="/DoctorDelete/<?= $doctors->id ?>" value="Delete">
    
    </tr>
   @endforeach
  </tbody>
</element>
</table>
</div>
 @endsection 