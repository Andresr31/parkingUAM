<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking_lot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','status'
    ];

    public function parking_spots()
    {
        return $this->hasMany('App\Parking_spot');
    }
}
