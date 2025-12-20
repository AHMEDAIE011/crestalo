<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=>['required' , 'min:2' , 'max:50'],
            'name_ar'=>['required' , 'min:2' , 'max:50'],
            'desc' => ['required', 'min:10', 'max:600'],
            'desc_ar' => ['nullable', 'min:10', 'max:600'],
            'status'=>['in:0,1'],
        ];
    }
}
