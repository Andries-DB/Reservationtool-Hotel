<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'room_id' => 'required|exists:rooms,id',
            'client_id' => 'required|exists:clients,id',
            'date_start' => 'required|date',
            'date_end' => 'required|date|after:start_date',
        ];
    }
}
