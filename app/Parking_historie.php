<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking_historie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_id', 'parking_spot_id', 'user_id', 'date_start','date_end','status'
    ];
}
