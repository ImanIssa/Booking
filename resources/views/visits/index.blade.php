
@extends('layouts/dashlayout');
@section('doc')

<h4><p class="a"  style="color:#a5c422;">List of Visits</p></h4>
    <div class="col-md-12"> 
    <div style="overflow-x:auto;">
      <element class="datepicker">

    <table class="table">
  
  <thead class="thead-dark">
    <tr >
   
     
      <th scope="col">Appointment Date</th>
     
      <th scope="col">Patient Name</th>
      <th scope="col">Patient Email</th>
      <th scope="col">Patient visit date</th>
      <th scope="col">Doctor Name</th>
   
    
     
    
    </tr>
  </thead>
  <tbody>
      @foreach($visit as $visit)
    <tr>
   
      <td>{{$visit->appointments->date}}</td>
     
      <td>{{$visit->patient->name}}</td>
      <td>{{$visit->patient->email}}</td>
      <td>{{$visit->patient->date}}</td>
      <td>{{$visit->doctor->name}}</td>
     
     
    
     

    
    </tr>
   @endforeach
  </tbody>
</element>
</table>
</div>
 @endsection 