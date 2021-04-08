<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Stock extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable=[   ///// Use this to allow mass assignment
        'subitem_id',
        'dealer_id',
        'receive_quantity',
        'receive_at',
        'sold_quantity',
        'sold_at',
        'unit_id'
    ];

}
