<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [

        'content','date_written','user_id','post_id',

    ];



    public function author()
    {
        return $this->belongTo(User::class);
    }


    public function posts()
    {
        return $this->belongTo(Post::class);
    }




}
