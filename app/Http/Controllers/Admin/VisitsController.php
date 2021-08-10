<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
       return view ('visits.create' ,[
        'doctors'=>$doctors,
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $doctors = Doctor::all();
       //$app = Appointment::all();
        //$patient = Patient::all();
        return view ('visits.create' ,[
            'doctors'=>$doctors,
            'app'=>$app ,
            'patient'=>$patient,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    { $visit = new Visit();
      //  dd($visit);
   //   $patient = Patient::findOrFail($id) ;
      $visit->doctor_id = $request->post('doctor_id');
      $visit->appo_id= $request->post('appo_id');
      $visit->patient_id= $request->post('patient_id');

     /*$appointment = Appointment::find($request->post('appo_id'));
      $appointment->state = 'Booked';
      $appointment->save();*/
  //    $visit = Patient::find($visit->patient_id)->patient()->get();
   //dd($visit);
      $visit->save();
     // return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
