<?php

namespace App\Http\Requests\Drivers;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\{Drivers};
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class CreateRequest extends FormRequest
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
            'identity' => ['required','present','numeric', Rule::unique('drivers')],
            'name'     => ['required','present'],
            'surname'  => ['required','present'],
            'phone'    => ['required','present','numeric'],
            'sex'      => ['required','present'],
            'birthdate'=> ['required']
        ];
 
    }
    public function messages()
    {
        return [
            'identity.required' => 'Campo requerido',
            'name.required'     => 'Campo requerido',
            'phone.required'    => 'Campo requerido',
            'identity.numeric'  => 'Se permite solo numeros',
            'phone.numeric'     => 'Se permite solo numeros',
            'birthdate.required'=> 'Campo requerido',
            'surname.required'  => 'Campo requerido',
            'identity.unique'   => 'Cedula pertenece a un conductor registrado',

        ];
    }

    public function driversCreate()
    {

         $driver = new Drivers;

         $driver->create([
            'identity' => $this->identity,
            'name'     => $this->name,
            'surname'  => $this->surname,
            'phone'    => $this->phone,
            'sex'      => $this->sex,
            'birthdate'=> $this->birthdate,
            'status'   => 1
        ]);
     } 
}
