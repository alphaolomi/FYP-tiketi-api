<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable =[
        'bus_name',
        'plate_number',
        'class_id',
        'insurance_number',
         'company_id',
        'bus_image',
        'total_seats',
        'depature_time',
        'driver_id'
    ];
}
