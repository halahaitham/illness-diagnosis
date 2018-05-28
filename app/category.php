<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    protected $fillable=['name'];
    public $timestamps = false;


    public function symptoms()
    {
        return $this->hasMany(symptoms::class);
    }




}
