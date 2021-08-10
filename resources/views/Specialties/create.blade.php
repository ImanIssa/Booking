@extends('layouts/dashlayout');
@section('doc')



<body>
<form action="/SpecCreate" method = 'post' class="form-inline">
@csrf
   <div class="col-md-6">

   <button class="btn btn-outline-primary " type= submit name="button1">Add Speciality</button>
<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Here" name = "name"   >

         <p class ="invalid-feedback ">
           @error('name') 
           {{ $message }} 
           @enderror 
         </p>

</div>
<br>
</form>


</div>




 </body>
 
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