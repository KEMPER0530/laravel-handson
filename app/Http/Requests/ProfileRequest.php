<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        if ($this -> id) { // 編集画面の時
            $unique = 'unique:profile,id,' . $this -> id . ',id';
        } else { // 新規登録画面の時
            $unique = 'unique:profile,id';
        }

        return [
            'id' => 'required|' . $unique,
            'history' => 'required',
        ];
    }

    public function message()
    {
        return [
            'id.required' => 'please enter id!!!',
            'history.required' => 'please enter 変更内容!!!'
        ];
    }
}
