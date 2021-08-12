<?php

namespace App\Models;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'doctor_id','patient_id', 'appo_id'];
    public function patient(){

        return $this->belongsTo(Patient::class , 'patient_id' , 'id');}

    public function doctor(){

            return $this->belongsTo(Doctor::class , 'doctor_id' , 'id');}
            

     public function appointments(){

            return $this->belongsTo(Appointment::class , 'appo_id' , 'id');}
}
