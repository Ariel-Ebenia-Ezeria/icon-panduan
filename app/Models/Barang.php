<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'kode_material',
        'nama_material',
        'jenis_material',
        'deskripsi_material',
        'stok',
        'satuan',
    ];
    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class);
    }
}