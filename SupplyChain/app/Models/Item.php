<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    //protected $table='users';
    // protected $primarykey='id';

    protected $fillable=[   ///// Use this to allow mass assignment
        'name',
        'email',
        'password'
    ];

    protected $dates=['deleted_at'];
}
