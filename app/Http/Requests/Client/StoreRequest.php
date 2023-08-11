<?php

namespace App\Http\Requests\Client;

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
            'name'=>'string|required|max:200',
             'dni'=>'string|required|unique:clients|max:10|min:6',
             'ruc'=>'string|unique:clients|max:11|min:6',
             'address'=>'nullable|string|max:200',
             'phone'=>'string|nullable|unique:clients|max:10|min:6',
             'email'=>'string|nullable|unique:clients|max:200',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'solo se permite 50 caracteres',

            'dni.required'=>'Este campo es requerido',
            'dni.string'=>'El valor no es correcto',
            'dni.max'=>'solo se permite 10 caracteres',
            'dni.unique'=>'La cedula ya esta registrada',

    
            'ruc.string'=>'El valor no es correcto',
            'ruc.max'=>'solo se permite 11 caracteres',
            'ruc.unique'=>'el ruc ya esta registrada',

          
            'address.string'=>'El valor no es correcto',
            'address.max'=>'solo se permite 250 caracteres',
          
            'phone.required'=>'Este campo es requerido',
            'phone.string'=>'El valor no es correcto',
            'phone.max'=>'solo se permite 10 caracteres',
            'phone.unique'=>'el numero celular ya esta registrado',

           
            'email.string'=>'El valor no es correcto',
            'email.max'=>'solo se permite 250 caracteres',
            'email.email'=>'no es un correo electronico',

        ];
    }
}
