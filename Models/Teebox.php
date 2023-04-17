<?php

namespace Modules\GolfBooking\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teebox extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slot',
        'disable_date',
        'expiration_date'

    ];

    protected $dates = [
        'expiration_date'
    ];
}
