<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class ConductorRequest extends FormRequest
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
            'id_conductor'=>'max:10|required|unique:conductor,correo',
            'nombre'=>'required',
            'apellido'=>'required',
            'telefono'=>'max:10|required',
            'direccion'=>'required',
            'correo'=>'required|email|unique:conductor,id_conductor',
           'foto'=>'required',
             //'foto'=>'image:jpeg,bmp,png',//formato archivos
         // 'foto'=>Input::file('foto','mimes:jpeg,bmp,png'),//formato archivos
           // 'foto'=>'mimes:jpeg,bmp,png',//formato archivos
            
            'id_bus'=>'required'


        ];
    }
}
