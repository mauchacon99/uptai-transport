<?php

namespace App\Http\Requests\Routes;

use App\Models\{Routes};
use Illuminate\Foundation\Http\FormRequest;
 
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
            'km' => ['present', 'required'],
            'addreses_exit_id'         => ['present','required'],
            'addreses_intermediate_id' => ['present'],
            'addreses_destination_id'  => ['present','required'],
        ];
    }

    public function createRoute()
    {
       $route = new Routes;

       $route->create([
            'km' => $this->km,
            'addreses_exit_id'         => $this->addreses_exit_id,
            'addreses_intermediate_id' => $this->addreses_intermediate_id,
            'addreses_destination_id'  => $this->addreses_destination_id ??[],

       ]);
    }
}
