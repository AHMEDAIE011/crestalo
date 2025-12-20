<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderIndexRequest extends FormRequest
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
           'title' => ['required', 'string', 'min:3',  'max:100'],
            'title_ar' => ['required', 'string', 'min:3',  'max:100'],
           'title2' => ['required', 'string', 'min:3',  'max:100'],
            'title2_ar' => ['required', 'string', 'min:3',  'max:100'],
            'desc' => ['required', 'min:10', 'max:600'],
            'desc_ar' => ['required', 'min:10', 'max:600'],
            'status'=>['in:0,1'],
        ];
    }
}
