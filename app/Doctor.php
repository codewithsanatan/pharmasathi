<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'user_id', 'gender', 'dob', 'phone', 'registration_no', 'aadhar_no', 'pan_no', 'city', 'state', 'country', 'latitude', 'longitude', 'about_me', 'is_blocked', 'is_deleted',
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
