<?php

namespace Modules\Golfbooking\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'description',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'facility_id', 'id');
    }
}
