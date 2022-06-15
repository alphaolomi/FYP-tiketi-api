<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'passenger_id',
        'seat_number',
        'buses_class_id'

    ];

    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }

    public function busClass()
    {
        return $this->belongsTo(BusClass::class);
    }

}
