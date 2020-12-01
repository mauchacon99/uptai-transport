<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\{Cars};
use Illuminate\Validation\Rule;


class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function rules()
    {
        return [
            'color' => ['present','required'],
            'chairs'=> ['present','numeric','required'],
            'year'  => ['present','required','numeric'],
            'plate' => ['present','required', Rule::unique('cars')->ignore($this->car->id)],
            'number'=> ['present','required', Rule::unique('cars')->ignore($this->car->id],
            'models_id'      => ['present','required','numeric'],
            'trade_marks_id' => ['present','required','numeric'],

        ];

    }

    public function carsUpdate(Cars $car)
    {
        die('maa');
        $car->update([
            'color' => $this->color,
            'chairs'=> $this->chairs,
            'year'  => $this->year,
            'plate' => $this->plate,
            'number'=> $this->number, 
            'models_id'      => $this->models_id,
            'trade_marks_id' => $this->trade_marks_id,
            'status' => 1 
        ]);
        $car->save();
    }
}
