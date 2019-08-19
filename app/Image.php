<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    // Relación one to may (uno a muchos)
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    // Relación one to many
    public function likes(){
        return $this->hasMany('App\Like');
    }

    // Relación de many to one
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
