<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    protected $table = 'pets';
    public $timestamps = true;
    protected $guarded = [];
    function pet_image(){
        return $this->hasMany('App\PetImage', 'pet_id');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
//    public function pets(){
//        return $this->hasMany('\App\Pets');
//    }
    public function image(){
        return $this->hasMany('\App\PetImage','pet_id');
    }
    public function provinces(){
      return $this->belongsTo('\App\Province','province_id');
    }

}
