<?php

namespace App\Models;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'spec_id', 'name', 'email', 'phone', 'date','message'];
    
    public function speciality(){

        return $this->belongsTo(Seciality::class , 'specility_id' , 'id')->withDefault(['name'=> 'no select']);
}

public function visit(){

    return $this->HasOne(Visit::class , 'patient_id' , 'id');
}

}
