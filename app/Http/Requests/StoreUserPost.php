<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPost extends FormRequest
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
            'name' => 'required|min:5|max:120',
            'email' => 'required',
            'identification_type' => 'required',
            'identification_number' => 'required|min:8|max:12',
            'role' => 'required',
            'phone' => 'required|min:7',
            'password' => 'required|min:8',
        ];
    }
}
