<?php

namespace App\Http\Requests;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only admin user can add users
        return Auth::user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'rule' => 'required|boolean',
            'image' => 'image'
        ];
    }
}
