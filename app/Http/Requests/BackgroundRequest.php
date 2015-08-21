<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BackgroundRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->get('manusia')!='dua'){
            return false;
        }
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
            'background' => 'max:1000|required|mimes:jpg,jpeg,JPG',
            'uploader' => 'max:16|required_with:link',
            'link' => 'max:255|url'
        ];
    }
}
