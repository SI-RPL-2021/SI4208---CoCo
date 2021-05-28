<?php

namespace App\Http\Requests;

use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */



    public function rules()
    {
        return [
            'name' => [
                'required', 'string', 'max:255'
            ],
            'username' => [
                'required', 'string', 'max:255',
                Rule::unique('users', 'username')->ignore(Auth::user()->id)
            ],
            'bio' => [
                'required', 'bio', 'max:255',
                Rule::unique('users', 'bio')->ignore(Auth::user()->id)
            ],
        ];
    }
}
