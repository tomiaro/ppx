<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCode extends FormRequest
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
        'codeName' => 'required',
        'codeUrl' => 'required|url',
        'codeResolution' => 'required',
        'codeResolution' => Rule::in(['970x310', '320x100','300x600','300x300','160x600']),
        ];
    }
}
