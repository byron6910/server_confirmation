<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
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
        return [
            'id_reserva'=>'max:10|required|unique:reserva,fecha_reserva',
            'fecha_reserva'=>'required|date',
            'estado'=>'boolean|required',//revisar tiempo
            'cantidad'=>'required|numeric',
            'asiento'=>'required|numeric',
            'ci'=>'required|numeric',
            'id_viaje'=>'required|numeric'
        ];
    }
}
