<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool //acá verifico permisos de usuario ADMIN/CLIENTE
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:20',
            'description' => 'required|min:10',
            'categoria' => 'required',
        ];
    }

    //Metedo CREADO por MI
    //personalizo los msjs de error -> para input name
    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
        ];
    }

     //Metedo CREADO por MI
    //personalizo los msjs de error -> para input description
    public function messages()
    {
        return [
            'description.required' => 'Es requerido',
            'description.min' => 'Como min 10 caracteres', 
        ];
    }
}
