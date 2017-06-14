<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    public $timestamps = true;
    protected $guarded = [];
    public function provinces(){
        return $this->belongsTo('\App\Province','city_id');
    }
}
