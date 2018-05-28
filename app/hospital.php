<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    protected $table = 'hospitals';
    protected $fillable=['name'];
    public $timestamps = false;


    public function user()
    {
        return $this->hasMany(User::class);
    }


    public function specialism()
    {
        return $this->belongsToMany(hospital::class,'hospital-specialism');
    }
}
