<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class days extends Model
{
    protected $table='days_of_week';
    protected $fillable=['day'];
    public $timestamps = false;

    public function doctors()
    {
        return $this->hasMany(schedual::class);
    }
}
