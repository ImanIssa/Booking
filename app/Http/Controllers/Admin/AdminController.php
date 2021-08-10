<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       /* if (Auth::user()->type == 'Admin') {

        }*/
        $admin = Admin::all();
        
        return view ('Admin.index' , [
            'admin'=>$admin,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      /* if (Gate::allow('doctor.create')){
           abort(403);
       }*/

   
    return view ('Admin/create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*if (Gate::allow('doctor.create')){
            abort(403);
        }*/
       
        $validator = $request->validate(  
        [
            'name'=>              'required | alpha',
            'image_path'=>        'required | file | dimensions: max_width:300,min_width:300 ' ,
            'phone'=>             'required | size:10 ',  
            'address'=>           'required | alpha-dash ',
            'center_contact_no'=> 'required | max:15',
            'center_address'=>    'required | alpha-dash',
            'email'=>             'required | Email',
            'center_name'=>       'required ',
        ] 
        ) ;

      /*  $results = $validator->fails();
        $val=$validator->failed();
        $errors = $validator->errors();*/


        //$admin =   DB::table('users')->where('type', 'admin')->limit(1)->get();
      //  dd($admin);

        $admin = new Admin();
        $admin->user_id = Auth::user()->id;
        $admin->name = $request->post('name');
       
        $admin->phone = $request->post('phone');
        $admin->address = $request->post('address');
        $admin->center_contact_no = $request->post('center_contact_no');
        $admin->center_address = $request->post('center_address');
        $admin->image_path = $request->file('image_path');
        $admin->email = $request->post('email');
        $admin->center_name = $request->post('center_name');


        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $admin['image_path'] = $file->store('/images' , 'public');}

         
 //dd($errors);
        $admin->save();


       


      

        return redirect('/AdminRead' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {  
      
      
    $admin = Admin::where('user_id' , '=' , $user_id)->get();
       return view ('Admin.edit' ,
        [    
            'user_id' => $user_id ,
            
            'admin' => $admin , 
        ]
        );
      
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
{    
    
 $validator = $request->validate(  
        [
            'name'=>              'required | string | max:255',
            'image_path'=>        'required | file   | dimensions: max_width:300,min_width:300' ,
            'phone'=>             'required | size:10',  
            'address'=>           'required | alpha-dash',
            'center_contact_no'=> 'required | max:15',
            'center_address'=>    'required | alpha-dash',
            'email'=>             'required | Email',
            'center_name'=>       'required ',
        ] 
        ) ;
      /*  $errors = $validator->errors();
        dd(errors);*/
    
     $admin = Admin::where('user_id' , '=' , $user_id)->first();
    
      //  $admin = DB::table('admins')->where('user_id', $user_id)->get();
    
        $admin->user_id = Auth::user()->id;
        $admin->name = $request->post('name');
      
        $admin->phone = $request->post('phone');
        $admin->address = $request->post('address');
        $admin->center_contact_no = $request->post('center_contact_no');
        $admin->center_address = $request->post('center_address');
        $admin->image_path = $request->file('image_path');
        $admin->email = $request->post('email');
        $admin->center_name = $request->post('center_name');

        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $admin['image_path'] = $file->store('/images' , 'public');}

    // dd($admin);
        $admin->save();
      

        return redirect('/AdminRead');

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
