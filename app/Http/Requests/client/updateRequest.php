<?php

namespace App\Http\Requests\client;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
        $id = $this->route('client');

        return [
              'name'               => 'required|string'
            , 'email'              => 'required|email|unique:clients,email,' . $id
            , 'cpf'                => 'required|string|unique:clients,cpf,' . $id
            , 'date_of_birth'      => 'required|date'
            , 'street'             => 'required|string'
            , 'house_number'       => 'required|string'
            , 'cep'                => 'required|string'
            , 'city'               => 'required|string'
            , 'state_abbreviation' => 'required|string|max:2'
            , 'active'             => 'boolean'
      ];
    }
}
