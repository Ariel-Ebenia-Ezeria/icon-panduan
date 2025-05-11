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
        'id_barang',
        'jumlah',
        'tujuan',
        'tanggal_keluar',
        'keterangan',
        'created_at',
        'updated_at',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}