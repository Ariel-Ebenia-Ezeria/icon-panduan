<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BarangKeluarRequest extends FormRequest
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
            'tanggal_pengambilan' => 'required|date',
            'jenis_kebutuhan' => 'required|string',
            'nama_engineer' => 'required|string',
            'nama_mitra' => 'required|string',
            'no_pa_ar' => 'required|string',
            'lokasi_pemasangan' => 'required|string',
            'jumlah' => 'required|integer',
            'status_rsvp' => 'required|string',
            'kode_rsvp' => 'required|integer',
            'kode_gi' => 'required|integer',
            'no_io' => 'required|string',
            'keterangan' => 'required|string',
            'barang_id' => 'required|exists:barangs,id',
            'plant' => 'required|string',
            'storage_location' => 'required|string',
            'df_stor_loc_level' => 'required|string',
            'batch_real' => 'required|string',
            'batch' => 'required|string',
        ];
    }

    // public function messages(): array
    // {
    //     return [];
    // }
}