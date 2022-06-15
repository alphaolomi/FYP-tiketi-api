<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Route;
use App\Models\BusClass;
use App\Models\Driver;

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

    public function routes()
    {
        return $this->belongsToMany(Route::class);
    }

    public function busClass()
    {
        return $this->belongsTo(BusClass::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
