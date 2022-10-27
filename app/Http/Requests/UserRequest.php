<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        switch ($this->method()) {
            
            case 'PUT':
                return [
                    'name'              => ['bail','required','string', 'max:60', 'min:4'],
                    'email'             => ['bail','required','email', 'max:60'],
                    'address'           => 'bail|required|string|max:20',
                    'birthdate'         => 'bail|date',
                    'city'              => 'bail|required|string|max:20',
                   
                ];
              break;  
           
           
        }
    }
}
