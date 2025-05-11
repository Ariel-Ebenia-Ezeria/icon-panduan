<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BarangRequest extends FormRequest
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
            'kode_material' => 'required|string|max:50',
            'nama_material' => 'required|string|max:255',
            'jenis_material' => 'required|string|max:100',
            'deskripsi_material' => 'nullable|string|max:500',
            'stok' => 'required|integer|min:0',
            'satuan' => 'required|string|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'kode_material.required' => 'Kode material harus diisi.',
            'kode_material.string' => 'Kode material harus berupa string.',
            'kode_material.max' => 'Kode material tidak boleh lebih dari 50 karakter.',
            'nama_material.required' => 'Nama material harus diisi.',
            'nama_material.string' => 'Nama material harus berupa string.',
            'nama_material.max' => 'Nama material tidak boleh lebih dari 255 karakter.',
            'jenis_material.required' => 'Jenis material harus diisi.',
            'jenis_material.string' => 'Jenis material harus berupa string.',
            'jenis_material.max' => 'Jenis material tidak boleh lebih dari 100 karakter.',
            'deskripsi_material.string' => 'Deskripsi material harus berupa string.',
            'deskripsi_material.max' => 'Deskripsi material tidak boleh lebih dari 500 karakter.',
            'stok.required' => 'Stok harus diisi.',
            'stok.integer' => 'Stok harus berupa angka bulat.',
            'stok.min' => 'Stok tidak boleh kurang dari 0.',
            'satuan.required' => 'Satuan harus diisi.',
            'satuan.string' => 'Satuan harus berupa string.',
            'satuan.max' => 'Satuan tidak boleh lebih dari 50 karakter.',
        ];
    }
}