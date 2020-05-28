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
        'plate', 'user_id', 'parking_spot_id',  'paid'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function spot()
    {
        return $this->belongsTo('App\Parking_spot', 'parking_spot_id');
    }
}
