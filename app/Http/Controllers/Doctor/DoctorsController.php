<?php

namespace App\Http\Controllers\Doctor;
use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spec =Speciality::all();
        $doctors = Doctor::all();
        return view('Doctors.index',[
            'spec'=>$spec,
            'doctor'=>$doctors,
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('Doctors.create',[
            'spec'=>Speciality::all() ,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = $request->validate(  
            [
                'name'=>         'required | alpha',
                'image'=>        'required | file | dimensions: max_width:300,min_width:300 ' ,
                'phone'=>        'required | size:10 ',  
                'address'=>      'required | alpha-dash ',
                'price'=>        'required | max:4',
                'email'=>        'required | Email',
                'age'=>          'required | max:3',
                'start_time'=>   'required ',
                'end_time'=>     'required ',
                'specility_id'=> 'required' ,
            ] 
            ) ;

        $doctor = new Doctor();
        $doctor->id = $request->post('id');
        $doctor->name = $request->post('name');
   
        $doctor->phone = $request->post('phone');
        $doctor->address = $request->post('address');
        $doctor->age = $request->post('age');
        $doctor->gender = $request->post('gender');
        $doctor->image = $request->file('image');
        $doctor->email = $request->post('email');
        $doctor->price = $request->post('price');
        $doctor->start_time = $request->post('start_time');
        $doctor->end_time = $request->post('end_time');
        $doctor->specility_id = $request->post('specility_id');
     


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $doctor['image'] = $file->store('/images' , 'public');}

            $doctor->save();

           return redirect('/DoctorCreate')->with('success','Doctor has been successfully added !');
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
   
    {  $doctors = Doctor::where('id' , '=' , $id)->get();
        $spec = Speciality::all(); 
        return view('Doctors.edit' ,[
            'spec'=>$spec ,
            'doctor' => $doctors , ]);
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
        $validator = $request->validate(  
            [
                'name'=>         'required | alpha',
                'image'=>        'required | file | dimensions: max_width:300,min_width:300 ' ,
                'phone'=>        'required | size:10 ',  
                'address'=>      'required | alpha-dash ',
                'price'=>        'required | max:4',
                'email'=>        'required | Email',
                'age'=>          'required | max:3',
                'start_time'=>   'required ',
                'end_time'=>     'required ',
            ] 
            ) ;
     

        $doctor = Doctor::where('id' , '=' , $id)->first();
     //   $doctor->id = $request->post('id');
        $doctor->name = $request->post('name');
      
        $doctor->phone = $request->post('phone');
        $doctor->address = $request->post('address');
        $doctor->age = $request->post('age');
        $doctor->gender = $request->post('gender');
        $doctor->image = $request->file('image');
        $doctor->email = $request->post('email');
        $doctor->price = $request->post('price');
        $doctor->start_time = $request->post('start_time');
        $doctor->end_time = $request->post('end_time');
        $doctor->specility_id = $request->post('specility_id');
     


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $doctor['image'] = $file->store('/images' , 'public');}

            $doctor->save();

           return redirect('#')->with('success','Doctor has been successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::destroy($id);
       
        return redirect('/DoctorRead' );
    }
}
