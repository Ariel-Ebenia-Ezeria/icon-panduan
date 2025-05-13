<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Faq;
use App\Models\Router;
use App\Models\Switchh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Data chart: jumlah barang keluar per tanggal (untuk line chart)
        $dataBarangKeluar = DB::table('barang_keluars')
            ->select(DB::raw('DATE(tanggal_pengambilan) as tanggal'), DB::raw('count(*) as total'))
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'asc')
            ->get();

        // Data chart: jumlah barang keluar per item per bulan (untuk stacked bar chart)
        $dataPerItemPerBulan = DB::table('barang_keluars')
            ->join('barangs', 'barang_keluars.barang_id', '=', 'barangs.id')
            ->select(
                DB::raw("DATE_FORMAT(tanggal_pengambilan, '%Y-%m') as bulan"),
                'barangs.nama_material',
                DB::raw('COUNT(*) as jumlah')
            )
            ->groupBy('bulan', 'barangs.nama_material')
            ->orderBy('bulan')
            ->get();

        // Persiapkan data untuk chart.js stacked bar
        $bulanList = $dataPerItemPerBulan->pluck('bulan')->unique()->values()->toArray();
        $barangList = $dataPerItemPerBulan->pluck('nama_material')->unique()->values()->toArray();

        $datasets = [];
        foreach ($barangList as $barang) {
            $dataPerBarang = [];

            foreach ($bulanList as $bulan) {
                $jumlah = $dataPerItemPerBulan->firstWhere(fn ($item) => $item->bulan == $bulan && $item->nama_material == $barang)->jumlah ?? 0;
                $dataPerBarang[] = $jumlah;
            }

            $datasets[] = [
                'label' => $barang,
                'data' => $dataPerBarang,
                'backgroundColor' => '#' . substr(md5($barang), 0, 6), // Warna unik
            ];
        }

        // Gabungkan semua data ke array yang dikirim ke view
        $data = [
            'jml_material' => Barang::count(),
            'jml_switch' => Switchh::count(),
            'jml_router' => Router::count(),
            'jml_pertanyaan' => Faq::count(),
            'tanggal' => $dataBarangKeluar->pluck('tanggal'),
            'total' => $dataBarangKeluar->pluck('total'),
            'bulanList' => $bulanList,
            'datasets' => $datasets
        ];

        return view('pages.dashboard.dashboard', $data);
    }

    public function getBarang($id)
    {
        $barang = Barang::find($id);
        return response()->json($barang);
    }
}