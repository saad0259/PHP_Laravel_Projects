<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Dealer extends Model
{
    use HasFactory;
    use SoftDeletes;

    //protected $table='';
    // protected $primarykey='id';

    protected $fillable=[   ///// Use this to allow mass assignment
        'name',
        'owner_name',
        'owner',
        'cnic',
        'phone',
        'address',
        'longitude',
        'latitude'
    ];

    protected $dates=['deleted_at'];
}
