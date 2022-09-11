<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderCreateRequest extends FormRequest
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
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
             'heading' => 'required',
             'content' => 'required',
             'button1_text' => 'required',
             'button1_url' => 'required|url',
             'button2_text' => 'required',
             'button2_url' => 'required|url',
        ];
    }
}
