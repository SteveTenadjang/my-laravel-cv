<?php

namespace App\Http\Requests;

use App\Rules\profilerInfoIDRule;
use Illuminate\Foundation\Http\FormRequest;

class profilerSkillUpdate extends FormRequest
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
        $id = $this->profiler_skill;
        return [
            'skill_title' => 'required|string|max:50|min:2' . $id,
            'profiler_infos_id' => ['required', 'int', new profilerInfoIDRule(),],
            'skill_level' => 'required|int|max:100|min:1',
            'skill_description' => 'required|string|max:300|min:2',
        ];
    }
}
