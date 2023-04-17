<?php

namespace Modules\GolfBooking\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'facility_id',
    ];

    public function date_slots()
    {
        return $this->hasMany(DateSlot::class, 'course_id', 'id');
    }

    public function holes()
    {
        return $this->hasMany(Hole::class, 'course_id', 'id');
    }
}
