<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaStoreRequest extends FormRequest
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
            'title'     => 'required',
            'subtitle'  => 'required',
            'copete'    => 'required',
            'contenido' => 'required',
            'img'       => 'required',
            'status'    => 'required',
            'img'       => 'mimes:jpg,jpeg,png'
        ];
    }
}