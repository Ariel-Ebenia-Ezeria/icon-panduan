@extends('layouts.dashboard')

@section('title')
Dashboard Barang Keluar
@endsection
@push('addon-style')
<link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="/assets/compiled/css/table-datatable.css">
@endpush

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Barang Keluar</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"> Table Barang Keluar  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#tambahModal">
                        +
                    </button>   </h5> 
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Tanggal Pengambilan</th>
                            <th>Jenis Kebutuhan</th>
                            <th>Nama Enginner</th>
                            <th>Nama Mitra</th>
                            <th>Nomor PA/AR</th>
                            <th>Lokasi Pemasangan</th>
                            <th>Jenis Kabel</th>
                            <th>Panjang Kabel</th>
                            <th>Status Reservasi</th>
                            <th>Kode Reservasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>24/09/2022</td>
                            <td>AKTIVASI</td>
                            <td>NAZIM</td>
                            <td>INTERNAL</td>
                            <td>PA/ACT/2207/3517/TER</td>
                            <td>Indomaret Soekarno Hatta</td>
                            <td>6 CORE</td>
                            <td>200</td>
                            <td>
                                <span class="badge bg-success">Sudah Reservasi</span>
                            </td>
                            <td>1188575</td>
                            <td>
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                    data-bs-target="#detailModal">
                                    Detail
                                </button> 
                                 <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>24/09/2022</td>
                            <td>GANGGUAN</td>
                            <td>YUSRIL</td>
                            <td>INTERNAL</td>
                            <td>4500018744</td>
                            <td>GIS MINTIN-GI PULPIS</td>
                            <td>24 CORE</td>
                            <td>4000</td>
                            <td>
                                <span class="badge bg-success">Sudah Reservasi</span>
                            </td>
                            <td>1188575</td>
                            <td>
                                <div class="d-flex gap-2">
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#detailModal1">
        Detail
    </button>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
        <i class="bi bi-trash"></i>
    </button>
</div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

<!-- Tambah Modal -->
        <div class="modal fade text-left w-100" id="tambahModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel20" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel20">Detail Barang Keluar</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Penggambilan</label>
                                    <input type="date" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Jenis Kebutuhan</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Nama Enginneer</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Nama Mitra</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">NO PA / AR</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Lokasi Pemasangan</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Jenis Kabel</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Panjang Kabel</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Status Reservasi</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Kode Reservasi</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Kode Reservasi</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div>  
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Kode GI</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">NO IO</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Keterangan</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Material</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Material Description</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Palnt</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Storage Location</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">DF stor. loc. level</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Batch Real</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Batch</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder=""> 
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <!-- <button type="button" class="btn btn-primary ms-1"
                            data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Accept</span>
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Tambah Modal -->

<!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <i class="bi bi-exclamation-circle-fill" style="color: white;"></i>
                                            <h5 class="modal-title" id="exampleModalCenterTitle" style="color: white;">
                                                Apakah Anda Yakin Ingin Menghapus?
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <!-- <div class="modal-body">
                                            <p>
                                                Croissant jelly-o halvah chocolate sesame snaps. Brownie caramels candy
                                                canes chocolate cake
                                                marshmallow icing lollipop I love. Gummies macaroon donut caramels
                                                biscuit topping danish.
                                            </p>
                                        </div> -->
                                        <div class="modal-footer d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                            data-bs-target="#info">
                                            Tidak
                                        </button>
                                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#danger">
                                            Ya
                                        </button>
                                </div>
                        </div>
                </div>
        </div>
<!-- End Delete Modal -->

        <!-- Detail Modal -->
        <div class="modal fade text-left w-100" id="detailModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel20" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel20">Detail Barang Keluar</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Penggambilan</label>
                                    <input type="text" class="form-control" id="basicInput" value="24/09/2022" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Jenis Kebutuhan</label>
                                    <input type="text" class="form-control" id="basicInput" value="AKTIVASI" disabled> 
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Nama Enginneer</label>
                                    <input type="text" class="form-control" id="basicInput" value="NAZIM" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Nama Mitra</label>
                                    <input type="text" class="form-control" id="basicInput" value="INTERNAL" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">NO PA / AR</label>
                                    <input type="text" class="form-control" id="basicInput" value="PA/ACT/2207/3517/TER" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Lokasi Pemasangan</label>
                                    <input type="text" class="form-control" id="basicInput" value="Indomaret Soekarno Hatta" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Jenis Kabel</label>
                                    <input type="text" class="form-control" id="basicInput" value="6 CORE" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Panjang Kabel</label>
                                    <input type="text" class="form-control" id="basicInput" value="200" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Status Reservasi</label>
                                    <input type="text" class="form-control" id="basicInput" value="SUDAH RESERVASI" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Kode Reservasi</label>
                                    <input type="text" class="form-control" id="basicInput" value="1188575" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Kode GI</label>
                                    <input type="text" class="form-control" id="basicInput" value="4901133207" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">NO IO</label>
                                    <input type="text" class="form-control" id="basicInput" value="" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Keterangan</label>
                                    <input type="text" class="form-control" id="basicInput" value="DIAMBIL" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Material</label>
                                    <input type="text" class="form-control" id="basicInput" value="1101010115" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Material Description</label>
                                    <input type="text" class="form-control" id="basicInput" value="FOC,ADSS SS 100m 6F/1T,Kuning,,ZTT" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Palnt</label>
                                    <input type="text" class="form-control" id="basicInput" value="2010" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Storage Location</label>
                                    <input type="text" class="form-control" id="basicInput" value="4" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">DF stor. loc. level</label>
                                    <input type="text" class="form-control" id="basicInput" value="" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Batch Real</label>
                                    <input type="text" class="form-control" id="basicInput" value="21-A5652" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Batch</label>
                                    <input type="text" class="form-control" id="basicInput" value="K210220665" disabled> 
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

         <div class="modal fade text-left w-100" id="detailModal1" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel20" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel20">Detail Barang Keluar</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Penggambilan</label>
                                    <input type="text" class="form-control" id="basicInput" value="24/09/2022" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Jenis Kebutuhan</label>
                                    <input type="text" class="form-control" id="basicInput" value="GANGGUAN" disabled> 
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Nama Enginneer</label>
                                    <input type="text" class="form-control" id="basicInput" value="YUSRIL" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Nama Mitra</label>
                                    <input type="text" class="form-control" id="basicInput" value="Internal" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">NO PA / AR</label>
                                    <input type="text" class="form-control" id="basicInput" value="4500018744" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Lokasi Pemasangan</label>
                                    <input type="text" class="form-control" id="basicInput" value="GIS MINTIN-GI PULPIS" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Jenis Kabel</label>
                                    <input type="text" class="form-control" id="basicInput" value="24 CORE" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Panjang Kabel</label>
                                    <input type="text" class="form-control" id="basicInput" value="4000" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Status Reservasi</label>
                                    <input type="text" class="form-control" id="basicInput" value="SUDAH RESERVASI" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Kode Reservasi</label>
                                    <input type="text" class="form-control" id="basicInput" value="1191967" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Kode GI</label>
                                    <input type="text" class="form-control" id="basicInput" value="4901136854" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">NO IO</label>
                                    <input type="text" class="form-control" id="basicInput" value="102230B0121J" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Keterangan</label>
                                    <input type="text" class="form-control" id="basicInput" value="DIAMBIL" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Material</label>
                                    <input type="text" class="form-control" id="basicInput" value="1101010115" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Material Description</label>
                                    <input type="text" class="form-control" id="basicInput" value="FOC,ADSS SS 100m,24F/4T,Strip Biru,JEMBO" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Palnt</label>
                                    <input type="text" class="form-control" id="basicInput" value="2010" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Storage Location</label>
                                    <input type="text" class="form-control" id="basicInput" value="4" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">DF stor. loc. level</label>
                                    <input type="text" class="form-control" id="basicInput" value="" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Batch Real</label>
                                    <input type="text" class="form-control" id="basicInput" value="" disabled> 
                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="basicInput">Batch</label>
                                    <input type="text" class="form-control" id="basicInput" value="37630740" disabled> 
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Detail Modal -->

    </section>
</div>
@endsection

@push('addon-script')
@endpush