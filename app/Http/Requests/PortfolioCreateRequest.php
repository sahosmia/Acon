<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioCreateRequest extends FormRequest
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
             'name' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'client_name' => 'required',
            'client_company' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'website' => 'required|url',
            'cost' => 'required',
            'client_comment' => 'required',
            'category_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
            'banner' => 'required|file|image|mimes:jpeg,jpg,png',
        ];
    }
}
