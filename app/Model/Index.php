<?php

namespace App\Index;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'address',
    ];

   
}
