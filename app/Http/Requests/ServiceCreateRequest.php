<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCreateRequest extends FormRequest
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
            'banner' => 'required|file|image|mimes:jpeg,jpg,png',
            'heading' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ];
    }
}
