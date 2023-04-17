<?php

namespace Modules\GolfBooking\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnavailableTimeSlot extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'time_slot_id',
        'date',
    ];

    public function time_slot()
    {
        return $this->belongsTo(TimeSlot::class, 'time_slot_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
