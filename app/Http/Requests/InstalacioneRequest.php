<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Rules\YouTubeUrl;
use Illuminate\Foundation\Http\FormRequest;

class InstalacioneRequest extends FormRequest
{
   
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

  
    public function rules()
    {
        return [
            'titulo' => ['required'],
            'descripcion' => ['required'],
            'image' => ['required'],
        ];
    }

    
    public function attributes()
    {
        return [
            //
        ];
    }

    public function messages()
    {
        return [
            //
        ];
    }
}
