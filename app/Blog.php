<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // protected $fillable = [
    //     'user_id','title', 'description'
    // ];

    protected $guarded = [];

    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }
}
