<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'category_id',
        'image_id',
    ];

    protected $path = '/images/';

    public function getFileAttribute($value){
        return $this->path.$value;
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function image(){
        return $this->belongsTo('App\Image');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
