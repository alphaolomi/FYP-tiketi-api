<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;


    protected $fillable =[
        'firstName',
        'lastName',
        'phoneNumber',
        'email',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
