<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking_spot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parking_lot_id', 'position', 'state'
    ];

    public function parking_lot()
    {
        return $this->belongsTo('App\Parking_lot');
    }
}
