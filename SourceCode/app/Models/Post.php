<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function User() {

        return $this->belongsTo('App\Models\User','user_id');
    }

    function comments(){
     return $this->hasMany('App\Models\Comment')->orderBy('id','desc');
}

    function category(){
        return $this->belongsTo('App\Models\Category')->orderBy('cat_id');

    }
}

