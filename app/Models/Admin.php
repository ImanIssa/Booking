<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\AdminController;

class Admin extends Model
{
    
    use HasFactory;

   protected $fillable = ['user_id' , 'name' , 'email' , 'password' , 'center_name' , 'center_address' , 'address' , 'phone' , 'center_contact_no' , 'image_path',];
    public function user(){

    return $this->belongsTo(User::class , 'user_id' , 'id');

}
}
