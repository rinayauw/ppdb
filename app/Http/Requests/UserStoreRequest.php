<?php

namespace App\Http\Requests;

use App\Enums\RoleEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'role' => ['required', 'string', new Enum(RoleEnum::class)],
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string', 'min:6'],
            'photo' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
        ];
    }
}
