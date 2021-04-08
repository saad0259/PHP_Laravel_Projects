<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[   ///// Use this to allow mass assignment
        'name',
        'type'
    ];

    protected $dates=['deleted_at'];


    public function getNameAttribute($val){

        return ucwords($val);

    }

    public function setNameAttribute($val){

        $this->attributes['name']=ucwords($val);
    
    }

    // public function subitem(){

    //     // One to one relation. function is getting subitem where item_id matches.
    //     return $this->hasOne('App\Models\Subitem'); //it will search for item_id in Subitem model. Add 'somename_id' parameter with 'App\modelname' if you have a different name for item_id

    // }

    public function subitems(){

        // One to many relation. function is getting subitem where item_id matches.
        return $this->hasMany('App\Models\Subitem'); //it will search for item_id in Subitem model. Add 'somename_id' parameter with 'App\modelname' if you have a different name for item_id
        
    }


}
