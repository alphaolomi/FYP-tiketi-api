<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bus;

class Route extends Model
{
    use HasFactory;
    protected $fillable = [
        'via',
        'region_from',
        'destination',
        'trip_date',
        'price'
    ];

    public function buses()
    {
        return $this->belongsToMany(Bus::class);
    }
}
