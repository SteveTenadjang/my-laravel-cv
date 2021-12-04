<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profiler_ipStore extends FormRequest
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
            'ip_name' => 'required|string|max:50|min:2',
            'profiler_info_id' => 'required',
            'ip_description' => 'required|string|max:300|min:5',
            'ip_img' => 'required|binary',
        ];
    }
}
