<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'pertanyaan.required' => 'Pertanyaan harus diisi.',
            'pertanyaan.string' => 'Pertanyaan harus berupa string.',
            'pertanyaan.max' => 'Pertanyaan tidak boleh lebih dari 255 karakter.',
            'jawaban.required' => 'Jawaban harus diisi.',
            'jawaban.string' => 'Jawaban harus berupa string.',
        ];
    }
}
