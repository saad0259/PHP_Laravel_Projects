<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];



    protected $fillable=[   ///// Use this to allow mass assignment
        'name'
    ];

    public function getNameAttribute($val){

        return ucwords($val);

    }

    public function setNameAttribute($val){

        $this->attributes['name']=ucwords($val);
    
    }


}
