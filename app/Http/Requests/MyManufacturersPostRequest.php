<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class MyManufacturersPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return Auth::check();
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
            'manufacturer_id' => 'required|max:255',
            'manufacturer_model_id' => 'required'
        ];
    }

    /**
     * Validation messages
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'manufacturer_id.required' => 'The manufacturer is required field',
            'manufacturer_model_id.required' => 'The manufacturer model is required field'
        ];
    }
}
