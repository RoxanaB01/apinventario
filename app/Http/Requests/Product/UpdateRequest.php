<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'string|required|unique:products,name,'. 
         $this->route('product')->id.'|max:200',
            
          
            'sell_price'=>'required',
            'category_id'=>'integer|required|exists:App\Category,id',
            'provider_id'=>'integer|required|exists:App\Provider,id',
          
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'solo se permite 200 caracteres',
            'name.unique'=>'El producto ya esta registrado',

            'image.required'=>'Este campo es requerido',
           
            
            'sell_price'=>'el campo es requerido',

            'category_id..integer'=>'el campo debe ser entero',
            'category_id.required'=>'el campo se requiere',
            'category_id.exists'=>'la categoria no existe',

            'provider_id..integer'=>'el campo debe ser entero',
            'provider_id.required'=>'el campo se requiere',
            'provider_id.exists'=>'el proveedor no existe',

        ];
    }
}
