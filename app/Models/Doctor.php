<?php

namespace App\Models;
use App\Models\Appointment;
use App\Models\Visit;
use App\Models\Speciality;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['specility_id' , 'name' , 'email' , 'gender', 'address' , 'phone' , 'appoinments_id' , 'image', 'start_time', 'end_time', 'price', ];
    
    public function speciality(){

        return $this->belongsTo(Speciality::class , 'specility_id' , 'id')->withDefault(['name'=> 'no select']);
}

public function visit(){

    return $this->HasOne(Visit::class , 'doctor_id' , 'id');
}

public function appointments(){

    return $this->hasMany(Appointment::class , 'doctors_id' , 'id');
}
}