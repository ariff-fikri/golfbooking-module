<?php

namespace Modules\Golfbooking\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'user_id',
        'date',
        'course_id',
        'time_slot_id',
        'hole_id',
        'payment_status',
        'booking_status',
        'notes',
        'total_players',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function hole()
    {
        return $this->belongsTo(Hole::class, 'hole_id', 'id');
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function time_slot()
    {
        return $this->belongsTo(TimeSlot::class, 'time_slot_id', 'id');
    }

    public function payment_detail()
    {
        return $this->hasOne(PaymentDetail::class, 'booking_id', 'id');
    }

    public function getPaymentStatusNameAttribute()
    {
        if($this->payment_status == 1) {
            $payment_status_name = 'Paid';
        } else if ($this->payment_status == 2) {
            $payment_status_name = 'Incomplete';
        } else {
            $payment_status_name = 'Pending';
        }

        return $payment_status_name;
    }

    public function getPaymentStatusColorAttribute()
    {
        if($this->payment_status == 1) {
            $payment_status_color = 'badge-primary';
        } else if ($this->payment_status == 2) {
            $payment_status_color = 'badge-danger';
        } else {
            $payment_status_color = 'badge-warning';
        }

        return $payment_status_color;
    }
}
