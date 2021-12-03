<?php

namespace App\Http\Requests;

use App\Rules\ValidationMessage;
use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z]+$/u|min:3',
            'surname' => 'required|regex:/^[a-zA-Z]+$/u|min:3',
            'email' => 'required|email',
            'description' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'name.string'     => 'The name required string value',
            // 'surname.required'  => 'An address is required to add this cafe.',
            // 'email.required'     => 'A city is required to add this cafe.',
            // 'description.required'    => 'A state is required to add this cafe.',
        ];
    }
}
