<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaUpdateRequest extends FormRequest
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
        $rules = [
            'date'  => 'required',
            'title' => 'required',
        ];
        if($this->get('img'))
            $rules = array_merge($rules, ['img' => 'mimes:jpg,jpeg,png']);
        return $rules;
    }
}