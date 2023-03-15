<?php

namespace Modules\GolfBooking\Http\Traits;
use Illuminate\Support\Facades\Hash;
use Nwidart\Modules\Facades\Module;

trait UserGetters
{
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function setUsernameAttribute($username)
    {
        $this->attributes['username'] = strtolower(trim($username));
    }

    public function setNicknameAttribute($nickname)
    {
        $this->attributes['nickname'] = ucfirst(strtolower($nickname));
    }

    public function setFirstNameAttribute($first_name)
    {
        $this->attributes['first_name'] = strtoupper($first_name);
    }

    public function setLastNameAttribute($last_name)
    {
        $this->attributes['last_name'] = strtoupper($last_name);
    }

    public function getPhotoAttribute()
    {
        return $this->profile_photo_path ? asset('storage/' . $this->profile_photo_path) : Module::asset('golfbooking:media/avatars/blank.png');
    }

    public function getFullNameAttribute()
    {
        $full_name = '';

        $full_name .= $this->first_name . ' ';

        if ($this->religion == 'islam') {
            if ($this->gender == 'male') {
                $full_name .= 'BIN';
            } elseif ($this->gender == 'female') {
                $full_name .= 'BINTI';
            }

            $full_name .= ' ' . $this->last_name;
        } else {
            $full_name .= ' ' . $this->last_name;
        }

        return $full_name;
    }

    public function getPhoneAttribute($phone)
    {
        return $phone ? $phone : '-';
    }
}
