<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'doctor_id','patient_id', 'appo_id'];
    public function patient(){

        return $this->hasOne(Patient::class , 'patient_id' , 'id');}

    public function doctor(){

            return $this->hasOne(Doctor::class , 'doctor_id' , 'id');}
}
