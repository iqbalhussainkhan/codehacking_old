<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['file'];
    protected $image = '/images/';

    public function getFileAttribute($value){
        return $this->image.$value;
    }

}
