<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Summary;

class UpdateSummary extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $summary = Summary::find($this->route('summary')->id);
        return $summary && $this->user()->can('summary.update', $summary);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'school' => 'required|exists:schools,id',
            'education' => 'required|exists:educations,id',
            'course' => 'required|exists:courses,id',
            'pdf' => 'file|mimetypes:application/pdf|max:20000'
        ];
    }
}
