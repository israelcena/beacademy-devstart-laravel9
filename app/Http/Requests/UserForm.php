<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserForm extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? "";
        $rules = [
            "name" => "required|string|max:50|min:3",
            "email" => [
                "required",
                "email",
                "unique:users,email,{$id},id"
            ],
            "image" => ["file"],
            "password" => "required|max:14|min:4",
        ];

        if ($this->method('PUT')) {
            $rules['password'] = "nullable|max:14|min:4";
        }

        return $rules;
    }
}