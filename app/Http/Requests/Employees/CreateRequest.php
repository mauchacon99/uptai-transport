<?php

namespace App\Http\Requests\Employees;

use App\Models\Employee;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'identity' => ['required','present','numeric', Rule::unique('employee')],
            'name'     => ['required','present'],
            'surname'  => ['required','present'],
            'phone'    => ['required','present','numeric'],
            'sex'      => ['required','present'],
            'birthdate'=> ['required'],
            'occupation'  => ['required','present'],
            'address'  => ['required','present'],
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

    public function EmployeeCreate()
    {

        Employee::create([
            'identity' => $this->identity,
            'name'     => $this->name,
            'surname'  => $this->surname,
            'phone'    => $this->phone,
            'sex'      => $this->sex,
            'birthdate'=> $this->birthdate,
            'address'  => $this->address,
            'occupation'=> $this->occupation,
        ]);
     } 
}
