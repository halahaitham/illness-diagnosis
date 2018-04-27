<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class symptoms extends Model
{
    protected $table = 'symptoms';
    protected $fillable=['content_A','content_B','content_C','content_D','content_E','content_F'
       ,'content_G','content_H','content_I','content_J','diagnosis_yes','diagnosis_no' ,'illness_id'];
    public $timestamps = false;


    public function category()
    {
        return $this->belongsTo(category::class);
       // $symptoms=symptoms::with('category')->get();

    }


    public function diagnosis()
    {
        return $this->hasMany(diagnosis::class);
    }
}
