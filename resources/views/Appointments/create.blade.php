@extends('layouts/dashlayout');
@section('doc')



<body>
<form action="/AppCreate" method = 'post' class="form-inline">
@csrf

<div class="col-md-8"> 
<table class="table">

 <tbody>
 <tr>
     <th scope="col">Appointment No.</th>
     <th scope="col"><input type="text" class="form-control @error('name') is-invalid @enderror" name = "id"  value="{{old('id' )}}" >
        <p class ="invalid-feedback ">
          @error('name') 
          {{ $message }} 
          @enderror 
        </p>
   </th>
 </tr>

 <tr>
     <th scope="col">date</th>
     <th scope="col"><input type="date" class="form-control @error('name') is-invalid @enderror" name = "date"  value="{{old('date' )}}" >
        <p class ="invalid-feedback ">
          @error('name') 
          {{ $message }} 
          @enderror 
        </p>
   </th>
 </tr> 

 <tr>
     <th scope="row">Appointment</th>
     <td><input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Enter appointment time" name = "appointment"   value="{{old('appointment')}}" >
     <p class ="invalid-feedback ">
          @error('appointment') 
          {{ $message }} 
          @enderror 
    </p>
    </td>
 </tr>

 <tr>
     <th scope="row">Day</th>
     <td> 
    <select id=" "  class="form-control @error('email') is-invalid @enderror" name = "Day"   value="{{old('day')}}" >
    <option value=""></option>
 <option value="Saturday" name ="day">Saturday</option>
 <option value="Sunday"  name ="day">Sunday</option>
 <option value="Monday" name ="day">Monday</option>
 <option value="Tuesday"  name ="day">Tuesday</option>
 <option value="Wednesday" name ="day">Wednesday</option>
 <option value="Thursday"  name ="day">Thursday</option>
 <option value="Friday" name ="day">Friday</option>
 
 
</select>
     
     
</tr>


<tr>
     <th scope="row">Status</th>
     <td> 
    <select id=" "  class="form-control @error('email') is-invalid @enderror" name = "status"   value="" >
    <option value=""></option>
 <option value="Booked" name ="status">Booked</option>
 <option value="Unbooked"  name ="status">Unbooked</option>
 </select>
     
</td>  
</tr>

<tr>
      <th scope="row">Doctor Name</th>
      <td> 
      <select id=" "  class="form-control @error('email') is-invalid @enderror" name = "doctors_id"   value="" >
      <option value=""></option>
      @foreach($doctor as $doctors)
  <option value="<?= $doctors->id?>"><?= $doctors->name?></option>
  @endforeach
 
      </td> 
</tr>
    </td> 



    <br>
<tr><td><button class="btn btn-outline-primary " type= submit>Add</button></td></tr>




  </tbody>
</table>

</div>

</body>
</form>
@endsection 

<!-- <input type="submit"  class="btn btn-outline-primary"  value="Create" name = "button1">-->
<!--<button class="btn btn-outline-primary " type= submit name="button1">Creat</button>--
<tr>
      <th scope="row">Name</th>
      <td><input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter the speciality name" name = "center_name"   value="{{old('center_name')}}" >
    
      <p class ="invalid-feedback ">
         @error('center_name') 
         {{ $message }} 
         @enderror 
      </p>
      </td>
      <td>
      <button class="btn btn-outline-primary " type= submit>Create</button>
       
      
      </td>
      
 </tr>-->



<!-- Modal -->
<!--
<div class="modal fade" id="specModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Speciality</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="SpecForm"  >
    @csrf
    <div> 
    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Add Here" name = "name"  >
         <p class ="invalid-feedback ">
           @error('name') 
           {{ $message }} 
           @enderror 
         </p>
    </div>
   
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-outline-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>

<script>
   $("#SpecForm").submit(function(e){
      e.preventDefault();

      let name = $("#name").val();
      let _token = $("input[name=_token]").val();

      $.ajax({
         url: "{{route('SpecStore')}}",
         type: "POST",
         data:{
            name:name,
            _token:_token
         },

         success:function(response)
         {
            if(response){
               $("#SpecTable tbody").prepend('<tr><td>' +response.name+ '</td></tr>');
               $("#SpecForm")[0].reset();
               $("#specModal").modal('hide');
            }
         }
      })
   });
</script>-->