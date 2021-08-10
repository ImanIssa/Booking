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
     <th scope="col">ID</th>
     <th scope="col">Name</th>
     <th scope="col">Action</th>
  </thead>

<tbody>

   @foreach($spec as $spec)
<tr>
      
      
      <td>{{$spec->id}} </td>
      <td> {{$spec->name}}</td>
     
      <td><input type="submit"  class="btn btn-danger" formaction="/SpecDelete/<?= $spec->id ?>" value="Delete"></td>
 </tr>
@endforeach
 </tbody>
</table>
</div>
</element>
</div>
</form>
@endsection