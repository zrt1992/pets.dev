<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetImage extends Model
{
    protected $table = 'image_pets';
    // public $timestamps = false;
    protected $guarded = [];
    function pet(){
        return $this->hasMany('App\Pet');
    }
    public function category(){
        return $this->belongsTo('App\Pets', 'category_id');
    }
}
