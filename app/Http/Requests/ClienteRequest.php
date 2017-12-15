<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Validation\Rule;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     private $route;
        // public function __construct(Route $route){
        //         $this->route=$route;
        // }
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
            'ci'=>'digits:10|required|unique:clientes,correo',            
           
            'nombre'=>'required',
            'apellido'=>'required',
            'telefono'=>'max:10|required',
            'ciudad'=>'required',
            'calle'=>'required',
            'postal'=>'required',
           
            //'foto'=>'mimes:jpeg,bmp,png',//formato archivos
            'foto'=>'mimes:jpeg,png,bmp',
            'usuario'=>'required',
            'correo'=>'required|unique:clientes,ci',
     
           'password'=>'required'


        ];
    }
}
