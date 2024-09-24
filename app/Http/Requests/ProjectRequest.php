<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'title' => 'required|max:100|min:3',
            'theme' => 'required|max:100|min:4',
            'company' => 'required',
            'start_date' => 'required',
            'end_date' =>'required'
        ];

    }

    public function messages() {

        return [

            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo deve contenere al massimo più di :max caratteri',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'theme.required' => 'L\'argomento è obbligatorio',
            'theme.max' => 'L\'argomento deve contenere al massimo :max caratteri',
            'theme.min' => 'L\'argomento deve contenere almeno :min caratteri',
            'company.required' => 'L\'azienda è obbligatoria',
            'start_date.required' => 'La data d\'inizio è obbligatoria',
            'end_date.required' => 'La data di fine è obbligatoria',
        ];
    }
}
