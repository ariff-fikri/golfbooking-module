<?php

namespace Modules\Golfbooking\Models;

use Modules\Golfbooking\Http\Traits\UserGetters;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Modules\Golfbooking\Models\Booking;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, UserGetters;

    protected $fillable = [
        'first_name',
        'last_name',
        'nickname',
        'email',
        'username',
        'password',
        'date_of_birth',
        'profile_photo_path',
        'gender',
        'phone_no',
        'google_id',
        'member_id',
        'active',
        'last_login',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'user_id', 'id');
    }
}
