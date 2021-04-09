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
        'owner',
        'cnic',
        'phone',
        'address',
        'longitude',
        'latitude'
    ];

    protected $dates=['deleted_at'];


    public function getNameAttribute($val){

        return ucwords($val);

    }
    public function getOwnerAttribute($val){

        return ucwords($val);

    }

    public function getAddressAttribute($val){
    return ucwords($val);
    }

    public function setNameAttribute($val){

        $this->attributes['name']=ucwords($val);
    
    }


    public static function scopeLatestCreated($query){

        return $query->orderBy('created_at','desc')->get();
    }

    public static function scopeLatestUpdated($query){

        return $query->orderBy('updated_at','desc')->get();
    }
    
    
    public function stocks(){

        return $this->hasMany('App\Models\Stock');
        
    }




}
