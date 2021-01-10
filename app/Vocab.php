<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocab extends Model
{
    //
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function trains(){
        return $this->hasMany(Train::class);
    }

    public function tests(){
        return $this->hasMany(Test::class);
    }
}
