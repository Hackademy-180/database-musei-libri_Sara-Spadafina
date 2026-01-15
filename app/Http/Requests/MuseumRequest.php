<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuseumRequest extends FormRequest
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
            "name"=>"required",
            "country"=>"required",
            "year"=>"required|min:4|max:4",
            "description"=>"required"
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'questo campo è obbligatorio',
            "country.required"=>'questo campo è obbligatorio',
            "year.required"=>"questo campo è obbligatorio",
            "year.min"=>"inserire l'anno per esteso. Es. 1996",
            "year.max"=>"inserire l'anno per esteso. Es. 1996",
            "description.required"=>'questo campo è obbligatorio'
        ];
    }
}
