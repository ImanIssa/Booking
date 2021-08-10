@extends('layouts/main')
@section('website')

<section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               
          <form action="/VisitCreate" method = 'post' >
          @csrf
        
       
          <div class="col-md-12 col-sm-12">
                                  
          <div class="col text-right"><h3>{{$patient->name}}<h3> <h3>{{$patient->email}}<h3> </div>


          
          <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Doctors</h2>
                         </div>
                    </div>
                    <div class="clearfix"></div>
                    @foreach( $doctors as $doctors)
                  

                    <div class="col-md-4 col-sm-6 ">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        
                              <img src="{{asset('storage/' . $doctors->image)}}" height="300"  width="400" alt="Doctor image">

                                   <div class="team-info">
                                   <h3><div class="col text-left">{{$doctors->name}}  </div><h3>
                                        <p>General Principal</p>
                                        <div class="team-contact-info">
                                             <p><button type="submit" class="form-control" id="cf-submit" name="submit" value=<?= $doctors->doctor_id?>>Book an appointment</button></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">{{$doctors->email}}</a></p>
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
