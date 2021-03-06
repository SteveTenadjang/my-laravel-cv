<?php

namespace App\Http\Requests;

use App\Rules\profilerInfoIDRule;
use Illuminate\Foundation\Http\FormRequest;

class profilerExpUpdate extends FormRequest
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
        $id = $this->profiler_exp;
        return [
            'job_title' => 'required|string|max:50|min:2' . $id,
            'company_name' => 'required|string|max:50|min:2',
            'company_website' => 'required|string|max:200|min:2',
            'job_start_date' => 'required',
            'job_end_date' => 'required|after:job_start_date',
            'profiler_infos_id' => ['required', 'int', new profilerInfoIDRule(),],
            'job_description' => 'required|string|max:300|min:5',
        ];
    }
}
