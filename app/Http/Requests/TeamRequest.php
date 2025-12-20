<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'name' => ['required', 'string', 'min:3',  'max:100'],
            'jop' => ['required', 'string', 'min:3',  'max:100'],
            'phone' => ['required'],
           'facebook' => ['required', 'string', 'min:3',  'max:100'],
            'twitter' => ['required', 'string', 'min:3',  'max:100'],
            'email' => ['required', 'min:10', 'max:100'],
            'insagram' => ['required', 'min:10', 'max:100'],
            'show'=>['in:0,1'],
            'status'=>['in:0,1'],
            
            'image' => ['nullable'],
            'image.*' => ['image', 'mimes:png,jpg'],
        ];
    }
}
