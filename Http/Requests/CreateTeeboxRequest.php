<?php

namespace Modules\GolfBooking\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeeboxRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'slot' => 'required',
            'expiration_date' => 'date|nullable',
            'disable_date' => 'nullable',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
