<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profiler_medicalStore extends FormRequest
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
            'medical_status' => 'required|string|max:50|min:2',
            'profiler_infos_id' => 'required',
            'medical_description' => 'required|int|max:300|min:2',
        ];
    }
}
