<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => ["string", "max: 20", "nullable"],
            "name" => ["required", "string", "max: 100"],
            "address_line_1" => ["required", "string", "max: 100"],
            "address_line_2" => ["string", "max: 100", "nullable"],
            "postcode" => ["required", "string", "max: 15"],
            "city" => ["string", "max: 50", "nullable"],
        ];
    }
}
