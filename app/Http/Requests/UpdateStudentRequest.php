<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
        $studentId = $this->route('student')->id;

        return [
            'name' => 'required|max:40',
            'email' => 'required|email|unique:students,email,' . $studentId,
            'phone' => 'required|digits:10',
            'education' => 'required',
            'percentage' => 'required|numeric|min:0|max:100',
            'year_of_passed' => 'required|integer|min:1900|max:' . date('Y'),
        ];
    }
}
