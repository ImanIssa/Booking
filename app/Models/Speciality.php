<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;
protected $table = "specilties";
    protected $fillable = ['name'];
   
        public function doctor(){

        return $this->hasMany(Doctor::class , 'specility_id' , 'id');}


 public function patient(){

        return $this->hasMany(Patient::class , 'specility_id' , 'id');}


   

}