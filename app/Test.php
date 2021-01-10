<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function vocab(){
        return $this->belongsTo(Vocab::class);
    }
}
