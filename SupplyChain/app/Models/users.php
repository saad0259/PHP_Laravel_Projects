<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $table='users';
    // protected $primarykey='id';

    protected $fillable=[   ///// Use this to allow mass assignment
        'name',
        'email',
        'password'
    ];

}
