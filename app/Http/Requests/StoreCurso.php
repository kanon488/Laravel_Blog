<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> 'required|max:50',
            'description' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Debe ingresar una descripción del curso',
        ];
    }
}
