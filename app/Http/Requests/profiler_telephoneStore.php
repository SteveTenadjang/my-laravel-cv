<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profiler_telephoneStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'profiler_phone_number' => 'required|string|max:25|min:2',
            'profiler_info_id' => 'required',
            'phone_number_description' => 'required|string|max:300|min:2',
        ];
    }
}
