<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'name', 'max_matches', 'default_background', 'default_background2', 'example'
    ];
}
