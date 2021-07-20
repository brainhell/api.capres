<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAfiliadoRequest extends FormRequest
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
            'nombre' => "required",
            'cedula' => "required | unique:afiliados,cedula,".$this->route('afiliado')->id,
            'correo' => "required | unique:afiliados,correo,".$this->route('afiliado')->id,
        ];
    }
}
