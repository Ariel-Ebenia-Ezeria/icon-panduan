<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BarangKeluarRequest;
use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'barangs' => Barang::all(),
            'barang_keluars' => BarangKeluar::with('barang')->get()
        ];
        return view('pages.dashboard.barang_keluar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BarangKeluarRequest $request)
    {
        // dd($request->all());
        $data = $request->all();
        try {
            $barang = Barang::findOrFail($request->barang_id);

            if ($barang->stok < $request->jumlah) {
                return back()->with('error', 'Stok barang tidak mencukupi!');
            }

            // Gunakan transaction untuk menjaga konsistensi
            DB::beginTransaction();

            $barang->stok -= $request->jumlah;
            $barang->save();

            BarangKeluar::create($data);

            DB::commit();

            return redirect()->route('barang-keluar.index')->with('success', 'Barang Keluar berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack(); // Kembalikan perubahan jika error

            // Log error jika perlu
            Log::error('Gagal tambah Barang Keluar: ' . $e->getMessage());

            return back()->with('error', 'Gagal tambah data Barang Keluar');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BarangKeluarRequest $request, string $id)
    {
        // dd($request->all());
        DB::transaction(function () use ($request, $id) {
            $data = $request->all();
            $barangKeluar = BarangKeluar::findOrFail($id);
            $barang = Barang::findOrFail($request->barang_id);

            $jumlahLama = $barangKeluar->jumlah;
            $jumlahBaru = $request->jumlah;
            $selisih = $jumlahBaru - $jumlahLama;

            // Jika jumlah baru lebih besar, cek stok cukup atau tidak
            if ($selisih > 0 && $barang->stok < $selisih) {
                return back()->with('error', 'Stok barang tidak mencukupi!');
            }

            // Update stok
            $barang->stok -= $selisih; // bisa negatif (artinya stok ditambah)
            $barang->save();

            $data['jumlah'] = $jumlahBaru;

            // Update data barang_keluar
            $barangKeluar->update($data);
        });

        return redirect()->route('barang-keluar.index')->with('success', 'Data barang keluar berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarangKeluar $barangKeluar)
    {
        // Tambahkan kembali ke stok barang
        $barang = $barangKeluar->barang;
        $barang->stok += $barangKeluar->jumlah;
        $barang->save();

        $barangKeluar->delete();
        return redirect()->route('barang-keluar.index')->with('success', 'Data berhasil dihapus');
    }
}