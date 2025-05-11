<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tanggal_pengambilan',
        'jenis_kebutuhan',
        'nama_engineer',
        'nama_mitra',
        'no_pa_ar',
        'lokasi_pemasangan',
        'jenis_barang',
        'jumlah',
        'status_rsvp',
        'kode_rsvp',
        'kode_gi',
        'no_io',
        'plant',
        'storage_location',
        'df_stor_loc_level',
        'batch_real',
        'batch',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}