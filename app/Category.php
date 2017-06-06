<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    // public $timestamps = false;
    protected $guarded = [];

    public function getImageAttribute($val)
    {
        return \URL::to('storage/' . $val);
    }
}
