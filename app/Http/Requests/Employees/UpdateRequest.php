<?php

namespace App\Http\Requests\Employees;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'identity' => ['required','present','numeric', Rule::unique('employee')->ignore($this->empleado->id)],
            'name'     => ['required','present'],
            'surname'  => ['required','present'],
            'phone'    => ['required','present','numeric'],
            'sex'      => ['required','present'],
            'birthdate'   => ['required'],
            'occupation'  => ['required','present'],
            'address'     => ['required','present'],
        ];
    }
    
    public function employeeUpdate($employee)
    {
        $employee->identity   =  $this->identity;
        $employee->name       =  $this->name ;
        $employee->surname    =  $this->surname;
        $employee->phone      =  $this->phone;
        $employee->sex        =  $this->sex;
        $employee->birthdate  =  $this->birthdate;
        $employee->address    =  $this->address;
        $employee->occupation =  $this->occupation;
        $employee->update();
        
     } 
}
