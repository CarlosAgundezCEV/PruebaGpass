<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function users(){

        return $this->belongsTo('User/Category');
    }


    public function categories(){

        return $this->hasMany('App/Password');
    }
}