<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|max:250',
             'email'=>'required|email|string|max:200|unique:providers',
             'ruc_number'=>'required|string|max:50|min:6|unique:providers',
             'aldress'=>'nullable|string|max:200',
             'phone'=>'required|string|max:11|min:6|unique:providers',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'solo se permite 50 caracteres',

            'email.required'=>'Este campo es requerido',
            'email.string'=>'El valor no es correcto',
            'email.email'=>'No es un correo electrinico',
            'email.max'=>'solo se permite 200 caracteres',
            'email.unique'=>'use encuentra registrado',

            'ruc_number.required'=>'Este campo es requerido',
            'ruc_number.string'=>'El valor no es correcto',
            'ruc_number.min'=>'minimi de 11 caracteres',
            'ruc_number.max'=>'solo se permite 50 caracteres',
            'ruc_number.unique'=>'use encuentra registrado',
            
            'aldress.max'=>'maximo de 200 caracteres',
            'aldress.string'=>'El valor no es correcto',

            'phone.required'=>'Este campo es requerido',
            'phone.string'=>'El valor no es correcto',
            'phone.min'=>'minimi de 10 caracteres',
            'phone.max'=>'solo se permite 11 caracteres',
            'phone.unique'=>'use encuentra registrado',
            
        ];
    }
}
