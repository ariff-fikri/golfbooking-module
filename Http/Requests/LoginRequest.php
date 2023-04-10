<?php

namespace Modules\Golfbooking\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email_username' => ['required', 'string', function ($attribute, $value, $fail) {
                $email_username = str_split($value);
                if (preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $email_username[0])) {
                    $fail('Email is invalid');
                }
            },],
            'password' => ['required', 'string'],
        ];
    }
}
