<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    public $directory='/assets/uploads/images/';
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates=['deleted_at'];


    public function getNameAttribute($val){

        return ucwords($val);

    }

    public function setNameAttribute($val){

        $this->attributes['name']=ucwords($val);
    
    }

    public function getImageAttribute($val){

        $full_path=$this->directory.$val;
        return $full_path;

    }
    

    public static function scopeLatestCreated($query){

        return $query->orderBy('created_at','desc')->get();
    }

    public static function scopeLatestUpdated($query){

        return $query->orderBy('updated_at','desc')->get();
    }

    public function isadmin(){

        return $this->belongsTo('App\Models\Role');
        
    }
    
}
