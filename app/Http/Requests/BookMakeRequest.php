<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookMakeRequest extends FormRequest
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
            //

            "title" => "required|max:200",
            "description" => "required|max:500",
            "pages" => "required|max:4",
            "author" => "required|max:100",
            "publishYear" => "required|max:4",
            "genre" => "required|max:100",


        ];
    }
}
