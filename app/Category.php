<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    // public $timestamps = false;
    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
    public function pets(){
        return $this->hasMany('\App\Pets');
    }


    public function getImageAttribute($val)
    {
        return \URL::to('storage/' . $val);
    }
}
