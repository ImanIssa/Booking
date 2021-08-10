<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { /* $d = Doctor::all();
        return view('index' , [
            'd'=>$d,
        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pat = Patient::all();
       return view('index' , [
           'pat'=>$pat,
           'spec'=>Speciality::all() ,
       ]);  
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    { 
      
        $pat          = new Patient();
        $pat->name    = $request->post('name');
        $pat->email   = $request->post('email');
        $pat->phone   = $request->post('phone');
        $pat->message = $request->post('message');
        $pat->spec_id = $request->post('spec_id');
    
        $pat->date    = $request->post('date');
        $pat->save();

       $app = Appointment::all();
       $doctors = Speciality::find($pat->spec_id)->doctor()->get();
     //  dd($doctors);
        return view ('visits.create' ,[
            'doctors'=>$doctors,
            'app'=>$app ,
            'patient'=>$pat,
        ]);

      //  return view('visits.create');
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
