<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedual extends Model
{
    protected $table ='doctor-schedual';
    protected $fillable=['doctor_name','specialism_id','day','from','to','image'];
    public $timestamps = false;


    public function specialism()
    {
        return $this->belongsTo(specialism::class);
    }


    public function patient_appointments()
    {
        return $this->hasMany(patientappointment::class);
    }

    public function day()
    {
        return $this->belongsTo(days::class);
    }

}
