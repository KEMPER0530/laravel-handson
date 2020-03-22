<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrdcardinfoRequest extends FormRequest
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
            'cardnumber' => 'required',
            'cardname' => 'required|regex:(^[A-Z][A-Z]+ [A-Z]+$)',
            'cardmonth' => 'required|not_in: 0',
            'cardyear' => 'required|not_in: 0',
            'cardcvv' => 'digits_between:3,4',
        ];
    }

    public function message()
    {
        return [];
    }
}
