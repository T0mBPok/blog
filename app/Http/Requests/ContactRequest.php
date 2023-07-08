<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email', 
            'name' => 'required|min:3', 
            'surname' => 'required|min:3', 
            'surname_2' => 'required|min:3'
        ];
    }
    public function messages()
    {
        return[
            'email.required' => 'Поле email является обязательным', 
            'name.required' => 'Поле имя является обязательным', 
            'surname.required' => 'Поле фамилия является обязательным', 
            'surname_2.required' => 'Поле отчество является обязательным', 
        ];
    }
}
