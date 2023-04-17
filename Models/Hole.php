<?php

namespace Modules\GolfBooking\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hole extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'member_weekday_amount',
        'member_weekend_amount',
        'visitor_weekday_amount',
        'visitor_weekend_amount',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
