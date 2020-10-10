<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table ='likes';

    protected $fillable =[
        'like_id','user_id','post_id','like'
    ];

    public function likes()
        {
            return $this->belongsTo(User::class, 'user_id', 'id');
        }

        public function user()
        {
            return $this->belongsTo('App\User');
        }

        public function post()
        {
            return $this->belongsTo('App\Post');
        }
}
