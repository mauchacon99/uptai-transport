<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserEditRequest extends FormRequest
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
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255',  Rule::unique('users')->ignore($this->user->id)],
            'password' => 'present',
            'role'     => 'present'
        ];
    }

    public function createUser(User $user)
    {
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password ? $this->password : $user->password ;
        $user->syncRoles($this->role);

        $user->update();
    }
}
