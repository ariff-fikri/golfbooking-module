<?php

namespace Modules\GolfBooking\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buggy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'booking_id',
        'member_weekday_amount',
        'member_weekend_amount',
        'visitor_weekday_amount',
        'visitor_weekend_amount',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
