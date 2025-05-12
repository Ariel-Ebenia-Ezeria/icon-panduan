<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RouterRequest extends FormRequest
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
            'brand' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'username' => 'required|string',
            'password' => 'required|string',
            'preconfig' => 'required|string',
            'command' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'brand.required' => 'Brand harus diisi.',
            'logo.image' => 'Logo harus berupa gambar.',
            'logo.mimes' => 'Logo harus berupa file dengan ekstensi jpeg, png, jpg.',
            'logo.max' => 'Logo tidak boleh lebih dari 2MB.',
            'username.required' => 'Username harus diisi.',
            'password.required' => 'Password harus diisi.',
            'preconfig.required' => 'Preconfig harus diisi.',
            'command.required' => 'Command harus diisi.',
        ];
    }
}