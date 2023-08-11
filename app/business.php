<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class business extends Model
{
    protected $fillable = [
        'name', 'description','logo','email','address','ruc',
    ];
   
}
