<?php

namespace Mirror\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            //
            'username'  =>  'required|unique:users|max:32',
            'email'     =>  'required|unique:users|email',
            'password'  =>  'required|min:6',
            'password-confirm'  =>  'required|same:password'
        ];
    }
}
