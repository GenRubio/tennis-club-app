<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CasalInscripcioneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => ['required'],
            'apellidos' => ['required'],
            'adresa' => ['required'],
            'poblacion' => ['required'],
            'codigo_postal' => ['required'],
            'provincia' => ['required'],
            'telefono_1' => ['required'],
            'data_nacimiento' => ['required'],
            'n_cat_salut' => ['required'],
            'nif_titular' => ['required'],
            'email' => ['required' , 'email'],
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
