<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientappointment extends Model
{
    protected $table='patient_appointments';
    protected $fillable=['patient_name','doctor_schedual_id'];
    public $timestamps = true;


    public function doctorschedual()
{
    return $this->belongsTo(schedual::class);
}



}
