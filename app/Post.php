<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        
        'title','content','date_written','content','featured_image',
        'vote_up','vote_down','user_id','category_id',

    ];



public function author()
{
    return $this->belongTo(User::class);
}

public function comments()
{
    return $this ->hasMany(Comment::class);
}

public function categories()
{
    return $this->belongTo(category::class);
}


}
