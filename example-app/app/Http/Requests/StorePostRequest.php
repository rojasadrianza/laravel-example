<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:10',     //validacion que pide que sea requerido y tenga un maximo de 10 caracteres
            'descripcion'=>'required|min:10', //validacion que pide que sea requerido y tenga un minimo de 10 caracteres
            'categoria'=>'required'
        ];
    }

    /*cambiando el mensaje cuando es el campo nombre name*/
    public function attributes()
    {
        return [
            'name'=>'nombre del curso',     
        ];
        
    }

    /*cambiando el mensaje de validacion para el campo nombre descripcion solo para el caso cuando es requerido*/
    public function messages()
    {
        {
            return [
                'descripcion.required'=>'debe agregar una descipcion del curso valida',     
            ];
            
        }
    }
}
