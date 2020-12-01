<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\{Cars};
use Illuminate\Validation\Rule;


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
            'color' => ['present','required'],
            'chairs'=> ['present','numeric','required'],
            'year'  => ['present','required','numeric'],
            'plate' => ['present','required', Rule::unique('cars')],
            'number'=> ['present','required', Rule::unique('cars')],
            'models_id'      => ['present','required','numeric'],
            'trade_marks_id' => ['present','required','numeric'],
        ];

    }

    public function carsCreate()
    {
        $car = new Cars;
        
        $car->create([
            'color' => $this->color,
            'chairs'=> $this->chairs,
            'year'  => $this->year,
            'plate' => $this->plate,
            'number'=> $this->number, 
            'models_id'      => $this->models_id,
            'trade_marks_id' => $this->trade_marks_id,
            'status' => 1 
        ]);
    }
}
