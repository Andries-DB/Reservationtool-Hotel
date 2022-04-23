<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                Rule::in('mr', 'ms', 'mrs', 'dr'),
            ],
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'address' => 'required|max:255',
            'postal_code' => 'required|max:255',
            'city' => 'required|max:255',
            'county' => 'required|max:255',
            'email' => [
                'required',
                Rule::unique('clients', 'email')->ignore($this->client),
            ],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'postal_code' => __('app.clients.fields.postal_code'),
            'county' => __('app.clients.fields.county'),
        ];
    }
}
