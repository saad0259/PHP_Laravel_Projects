<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Subitem extends Model
{
    use HasFactory;
    use SoftDeletes;

    //protected $table='';
    // protected $primarykey='id';

    protected $fillable=[   ///// Use this to allow mass assignment
        'name',
        'grade',
        'item_id'
    ];

    protected $dates=['deleted_at'];

    public function item(){

        // inverse relation. function is getting item where subitem belongs.
        return $this->belongsTo('App\Models\Item'); //
        
    }







}
