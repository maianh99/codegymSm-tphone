<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|min:3|max:120',
            'email' => ['required','email','min:5','max:120','unique:users,email,'.$this->id],
//            'email' => ['required','email','min:5','max:120',Rule::unique('users')->ignore($this->email,'email')],
            'password' => 'required|min:6|max:120',
        ];
    }
}
