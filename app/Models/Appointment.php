<?php

namespace App\Models;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'appointment', 'doctors_id', 'date', 'day', 'status' ];

    public function doctor(){

        return $this->belongsTo(Doctor::class , 'doctors_id' , 'id');}


public function visit(){

    return $this->HasOne(Visit::class , 'appo_id' , 'id');
}}