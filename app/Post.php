<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    public $timestamps = true;
    
    protected $fillable = [
        'post_id','user_id','post','post_type','post_photo'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
          
    
    public function likes()
    {
        return $this->belongsTo('App\Like');
    }
}
