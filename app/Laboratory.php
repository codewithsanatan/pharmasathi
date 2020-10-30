<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    protected $fillable = [
        'user_id', 'lab_name', 'reg_no', 'lab_contact_person', 'lab_contact_no', 'lab_contact_no2', 'city', 'state', 'country', 'latitude', 'longitude', 'lab_open_time', 'lab_close_time', 'full_close_day', 'pan_no', 'gst_no', 'details',
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
