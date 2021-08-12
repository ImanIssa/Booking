
@extends('layouts/dashlayout');
@section('doc')

<h4><p class="a"  style="color:#a5c422;">List of Patients</p></h4>
    <div class="col-md-12"> 
    <div style="overflow-x:auto;">
      <element class="datepicker">

    <table class="table">
  
  <thead class="thead-dark">
    <tr >
   
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
      <th scope="col">Phone</th>
      <th scope="col">Date</th>
      <th scope="col">Message</th>
    
     
    
    </tr>
  </thead>
  <tbody>
      @foreach($patient as $patient)
    <tr>
      <td>{{$patient->name}}</td>
     
      <td>{{$patient->email}}</td>
     
      <td>{{$patient->phone}}</td>
      <td>{{$patient->date}}</td>
      <td>{{$patient->message}}</td>
     
    
     

    
    </tr>
   @endforeach
  </tbody>
</element>
</table>
</div>
 @endsection 