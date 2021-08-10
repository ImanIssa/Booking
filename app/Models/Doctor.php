<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['specility_id' , 'name' , 'email' , 'gender', 'address' , 'phone' , 'appoinments_id' , 'image', 'start_time', 'end_time', 'price', ];
    
    public function speciality(){

        return $this->belongsTo(Seciality::class , 'specility_id' , 'id')->withDefault(['name'=> 'no select']);
}

public function visit(){

    return $this->belongsTo(Visit::class , 'doctor_id' , 'id');
}
}