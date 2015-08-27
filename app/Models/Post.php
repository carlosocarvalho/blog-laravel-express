<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'title','body'
    ];

    function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    function tags(){
        return $this->belongsToMany('App\Models\Tag','posts_tags');
    }
}
