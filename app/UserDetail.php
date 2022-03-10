<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
