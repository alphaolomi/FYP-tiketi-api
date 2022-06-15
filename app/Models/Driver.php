<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Bus;

class Driver extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'nida_number',
        'drive_licence',
        'company_id'
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
