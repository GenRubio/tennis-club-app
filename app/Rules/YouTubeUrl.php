<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class YouTubeUrl implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($value != ""){
            if (strpos($value, 'https://youtu.be/') !== false) {
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return true;
        }
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El formato de url es incorrecto. Para obtener url de video dale click en compartir video en YouTube.';
    }
}
