<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    public $timestamps = true;
    protected $guarded = [];
    public function pets(){
        return $this->hasMany('\App\Pets','province_id');
    }
    public function cities(){
        return $this->hasMany('\App\City','province_id');
    }
}
