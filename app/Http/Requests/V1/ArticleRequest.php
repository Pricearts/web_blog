<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:3', 'max:50'],
            'subtitle' => ['required', 'min:10', 'max:250'],
            'content' => ['required', 'min:10'],
            'author' => ['required']
        ];

        switch ($this->getMethod())
        {
            case 'POST':
                return $rules;
            case 'DELETE':
                return [
                    'id' => ['required', 'integer', 'exists:articles,id']
                ];
        }
    }
}
