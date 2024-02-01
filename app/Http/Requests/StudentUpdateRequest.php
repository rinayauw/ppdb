<?php

namespace App\Http\Requests;

use App\Enums\GenderEnum;
use App\Enums\ReligionEnum;
use App\Enums\StudentStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StudentUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule', 'array<mixed>', 'string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'birth' => ['required', 'date'],
            'gender' => ['required', new Enum(GenderEnum::class)],
            'religion' => ['required', new Enum(ReligionEnum::class)],
            'status' => ['required', new Enum(StudentStatusEnum::class)],
            'address' => ['required', 'string'],
            'major_id' => ['required', 'exists:majors,id'],
            'extracurricular_id' => ['required', 'exists:extracurriculars,id'],
            'photo' => ['nullable', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
        ];
    }
}
