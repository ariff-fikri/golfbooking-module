<?php

namespace Modules\Golfbooking\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'time',
        'min_player',
        'max_player',
        'time_type',
        'booking_limit',
    ];

    protected $casts = [
        'time' => 'datetime',
    ];

    public function date_slot()
    {
        return $this->belongsTo(DateSlot::class, 'date_slot_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'time_slot_id', 'id');
    }

    public function unavailable_time_slots()
    {
        return $this->hasMany(UnavailableTimeSlot::class, 'time_slot_id', 'id');
    }
}
