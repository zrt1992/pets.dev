<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    protected $table = 'pets';
    public $timestamps = true;
    protected $guarded = [];
}
