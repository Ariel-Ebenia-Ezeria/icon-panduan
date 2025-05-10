@extends('layouts.landing')

@section('title')
PLN ICON PLUS - Gudang
@endsection
@push('addon-style')
<link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="/assets/compiled/css/table-datatable.css">
@endpush

@section('content')
<div class="page-heading">
    <h3>Data Stok Barang Gudang
</div>
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"> Data Barang</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Kode Material</th>
                            <th>Nama Material</th>
                            <th>Jenis Barang</th>
                            <th>Material Description</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1101010115</td>
                            <td>Kabel FOC</td>
                            <td>Kabel FOC</td>
                            <td>FOC,ADSS SS 100m 6F/1T,Kuning,,ZTT</td>
                            <td>50 pcs</td>
                        </tr>
                        <tr>
                            <td>1101010080</td>
                            <td>Kabel FOC</td>
                            <td>Kabel FOC</td>
                            <td>FOC,ADSS SS 100m,24F/4T,Strip Biru,JEMBO</td>
                            <td>150 pcs</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection

@push('addon-script')
@endpush