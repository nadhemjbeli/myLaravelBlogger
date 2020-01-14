<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public $table='articles';
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
