<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    protected $table = 'passwords';

    public function categories(){

        return $this->belongsTo('App/Category');
    }


    public function users(){

        return $this->belongsTo('App/User');
    }
}