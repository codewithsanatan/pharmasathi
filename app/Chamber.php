<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamber extends Model
{

    protected $fillable = [
        'user_id', 'status', 'day_from', 'day_to', 'evening_from', 'evening_to'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
