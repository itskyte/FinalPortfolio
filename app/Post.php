<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    //Primary Keys
    public $primaryKey = 'id';
    //Timestamps
    public $timestamp = true;


    public function user(){
        return $this->belongsTo('App\User');
    }
}
