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
        'status'
    ];
}
