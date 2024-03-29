<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'first_name' => ['required', 'max:50'],
            'second_name' => ['required', 'max:50'],
            'sexe' => ['required'],
            'dni' => ['required', 'max:20'],
            'nacionalidad' => ['required', 'max:20'],
            'address' => ['required', 'max:50'],
            'poblacio' => ['required', 'max:50'],
            'cp' => ['required'],
            'provincia' => ['required', 'max:20'],
            'data_naxement' => ['required'],
            'telefono_1' => ['required', 'max:20'],
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
