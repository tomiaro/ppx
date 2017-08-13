<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvert extends FormRequest
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
        'urlAd' => 'required',
        'price' => 'required',
        'nameAd' => 'required|max:255',
        'limit' => 'required',
        'image' => 'required|image|resolution:h970w310,h320w100,h300w600,h300w300,h160w600',
        ];
    }
}
