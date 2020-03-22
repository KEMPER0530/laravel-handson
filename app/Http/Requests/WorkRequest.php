<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            'work_id' => 'required|numeric',
            'title' => 'required|min:3|string',
            'comment' => 'required|min:3|string',
            'url' => 'required|url'
        ];
    }

    public function message()
    {
        return [
            'work_id.required' => 'please enter id!!!',
        ];
    }
}
