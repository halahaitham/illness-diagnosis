<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specialism extends Model
{
    protected $table = 'specialism';
    protected $fillable=['name'];
    public $timestamps = false;

    public function hospitals()
    {
        return $this->belongsToMany(hospital::class,'hospital-specialism');
    }

    public function schedual()
    {
        return $this->hasMany(schedual::class);
    }



}
