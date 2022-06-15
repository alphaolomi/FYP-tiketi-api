<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Locations;
use App\Models\Company;

class Office extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function locations()
    {
        return $this->hasMany(Locations::class);
    }
}
