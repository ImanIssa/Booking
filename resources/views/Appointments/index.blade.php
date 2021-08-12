@extends('layouts/dashlayout');
@section('doc')
<form action="" method ="post" >
@csrf
<input type= "hidden" name="_method"  value = "delete">

<div class="col-md-12"> 
<div style="overflow-x:auto;">
<element class="datepicker">   
<table  id = "SpecTable"class="table">
  <thead class="thead-dark">
     <th scope="col">Apoointment No.</th>
     <th scope="col">Apoointment</th>
     <th scope="col">Doctor Name</th>
     <th scope="col">Date</th>
     <th scope="col">Day</th>
     <th scope="col">Status</th>
     <th scope="col">Action</th>
  </thead>

<tbody>

   @foreach($app as $app)
<tr>
      
<td> {{$app->id}}</td>
      <td>{{$app->appointment}} </td>
      <td> {{$app->doctor->name}}</td>
      <td> {{$app->date}}</td>
      <td> {{$app->day}}</td>
      <td style="font-weight:900;"> {{$app->status}} </td>
     
     
     
      <td><input type="submit"  class="btn btn-danger" formaction="/AppDelete/<?= $app->id ?>" value="Delete"></td>
 </tr>
@endforeach
 </tbody>
</table>
</div>
</element>
</div>
</form>
@endsection