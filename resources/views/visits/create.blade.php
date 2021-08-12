@extends('layouts/main')
@section('website')

<section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               
          <form action="/VisitCreate" method = 'post' >
          @csrf
          <input type= "hidden" name="patient_id"  value = "{{$patient->id }}">
       
          <div class="col-md-12 col-sm-12">
                                  
          <div class="col text-left" ><h3 >Patient Name: {{$patient->name}}<h3>  </div>


          
          <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Doctors</h2>
                         </div>
                    </div>
                    <div class="clearfix"></div>
                    @foreach( $doctors as $doctor)
                  

                    <div class="col-md-4 col-sm-6 ">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        
                              <img src="{{asset('storage/' . $doctor->image)}}" height="300"  width="400" alt="Doctor image">

                                   <div class="team-info">
                                   <h3><div class="col text-left">  <input type= "hidden" name="doctor_id"  value = "{{$doctor->id}} ">{{$doctor->name}} </div><h3>
                                        
                                 <div>  <select  class="form-control @error('specility_id') is-invalid @enderror" name = "appo_id"    >
      <option value="">Select Appointment</option>
      @foreach($doctor->appointments as $appointment)
      @if($appointment->status != "Booked")
  <option value="{{$appointment->id}}"> <?= $appointment->date?>:<?= $appointment->appointment?>  </option>
  @endif
  @endforeach
</select>
</div>
                                        <div class="team-contact-info">
                                             <p><button type="submit" class="form-control" id="cf-submit" value=<?= $doctor->doctor_id?>>Book an appointment</button></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">{{$doctor->email}}</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>
                    @endforeach
                  

                
                    
               </div>
          </div>
        
     </section>

  
</div></div></div></div>





@endsection
