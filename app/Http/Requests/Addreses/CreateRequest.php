<?php

namespace App\Http\Requests\Addreses;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Addreses;
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
            'name'  => ['required', 'present',Rule::unique('addreses')],
            'starting_point'    => ['required', 'present'],
            'states_id'         => ['present'],
            'parishes_id'       => ['present'],
            'municipalities_id' => ['present'],
        ];
    }

    public function createAddress()
    { 
        
        $Addreses = new Addreses;
        $addreses = $Addreses->create([
            'name'  => $this->name,
            'starting_point'    => $this->starting_point,
            'states_id'         => $this->states_id,
            'parishes_id'       => $this->parishes_id,
            'municipalities_id' => $this->municipalities_id,
            'status' => '1'
        ]);

        return $addreses;
    }
}
