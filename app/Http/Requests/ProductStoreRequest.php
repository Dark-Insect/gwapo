<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'firname' => 'required|string|max:255',
            'midname' => 'required|string|max:255',
            'lasname' => 'required|string|max:255',
            'birthdate' => 'required',
            'street' => 'required|string|max:255',
            'barangay' => 'required|string|max:255',
            'status' => 'required|boolean',
            'town' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',

        ];
    }
}
