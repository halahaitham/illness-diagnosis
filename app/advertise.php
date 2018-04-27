<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertise extends Model
{
    protected $table = 'advertisment';
    protected $fillable=['image'];
    //public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(User::class);

    }



}
