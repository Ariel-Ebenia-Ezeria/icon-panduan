@extends('layouts.dashboard')

@section('title')
Dashboard FAQ
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
                <h3>FAQ</h3>
            </div>
            <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div> -->
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"> Pertanyaan dan Jawaban
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#tambahForm">
                        +
                    </button>    
                </h5> 
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Pertanyaan</th>
                            <th>Jawaban</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Apa yang harus dilakukan sebelum melakukan aktivasi layanan di ICON+?</td>
                            <td>Sebelum melakukan aktivasi, pastikan semua persyaratan seperti data pelanggan, lokasi pemasangan, dan perangkat yang dibutuhkan sudah tersedia. Tim harus melakukan survey lokasi untuk memastikan jaringan dapat menjangkau area tersebut dan melakukan reservasi perangkat dari gudang.</td>
                            <td>
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                    data-bs-target="#detailForm">
                                    Detail
                                </button> 
                            </td>
                        </tr>
                         <tr>
                            <td>Bagaimana cara memastikan perangkat yang akan dipasang dalam keadaan baik?</td>
                            <td>Pemeriksaan perangkat dilakukan di gudang sebelum pengeluaran perangkat. Setiap perangkat yang keluar harus diperiksa kondisinya, memastikan bahwa tidak ada kerusakan fisik dan berfungsi dengan baik. Pengujian sinyal juga dilakukan saat instalasi untuk memastikan kualitas layanan.</td>
                            <td>
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                    data-bs-target="#detailForm1">
                                    Detail
                                </button> 
                            </td>
                        </tr>
                         <tr>
                            <td>Apa itu Testcomm, dan mengapa itu penting dalam aktivasi layanan?</td>
                            <td>Testcomm adalah proses pengujian koneksi yang dilakukan setelah instalasi perangkat. Tim akan menguji koneksi dengan melakukan ping ke IP eksternal seperti Google dan memeriksa kecepatan bandwidth. Ini memastikan bahwa layanan berjalan dengan baik dan sesuai dengan standar yang ditetapkan oleh ICON+</td>
                            <td>
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                    data-bs-target="#detailForm2">
                                    Detail
                                </button> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Tambah Form -->
        <div class="modal fade text-left" id="tambahForm" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Tambah Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <label for="kode_material">Pertanyaan</label>
                            <div class="form-group">
                                <input id="kode_material" type="text" placeholder=""
                                    class="form-control">
                            </div>
                            <label for="nama_material">Jawaban</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="reset" class="btn btn-light-secondary">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button> -->
                            <button type="button" class="btn btn-primary ms-1"
                                data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tambah</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal Tambah Form -->

         <!-- Modal Detail -->
        <div class="modal fade text-left" id="detailForm" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                        role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Detail Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="#">
                         <div class="modal-body">
                            <label for="kode_material">Pertanyaan</label>
                            <div class="form-group">
                                <input id="kode_material" type="text" value="Apa yang harus dilakukan sebelum melakukan aktivasi layanan di ICON+?"
                                    class="form-control" readonly>
                            </div>
                            <label for="nama_material">Jawaban</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" readonly>Sebelum melakukan aktivasi, pastikan semua persyaratan seperti data pelanggan, lokasi pemasangan, dan perangkat yang dibutuhkan sudah tersedia. Tim harus melakukan survey lokasi untuk memastikan jaringan dapat menjangkau area tersebut dan melakukan reservasi perangkat dari gudang.</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger block">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Hapus</span>
                            </button>
                            <button type="button" class="btn btn-primary ms-1"
                                data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Kembali<span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <div class="modal fade text-left" id="detailForm1" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                        role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Detail Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="#">
                         <div class="modal-body">
                            <label for="kode_material">Pertanyaan</label>
                            <div class="form-group">
                                <input id="kode_material" type="text" value="Bagaimana cara memastikan perangkat yang akan dipasang dalam keadaan baik?"
                                    class="form-control" readonly>
                            </div>
                            <label for="nama_material">Jawaban</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" readonly>Sebelum melakukan aktivasi, pastikan semua persyaratan seperti data pelanggan, lokasi pemasangan, dan perangkat yang dibutuhkan sudah tersedia. Tim harus melakukan survey lokasi untuk memastikan jaringan dapat menjangkau area tersebut dan melakukan reservasi perangkat dari gudang.</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="reset" class="btn btn-light-secondary">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button> -->
                            <button type="button" class="btn btn-primary ms-1"
                                data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Kembali<span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <div class="modal fade text-left" id="detailForm2" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                        role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Detail Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="#">
                         <div class="modal-body">
                            <label for="kode_material">Pertanyaan</label>
                            <div class="form-group">
                                <input id="kode_material" type="text" value="Apa itu Testcomm, dan mengapa itu penting dalam aktivasi layanan?"
                                    class="form-control" readonly>
                            </div>
                            <label for="nama_material">Jawaban</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" readonly>estcomm adalah proses pengujian koneksi yang dilakukan setelah instalasi perangkat. Tim akan menguji koneksi dengan melakukan ping ke IP eksternal seperti Google dan memeriksa kecepatan bandwidth. Ini memastikan bahwa layanan berjalan dengan baik dan sesuai dengan standar yang ditetapkan oleh ICON+.</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="reset" class="btn btn-light-secondary">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button> -->
                            <button type="button" class="btn btn-primary ms-1"
                                data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Kembali<span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Detail Form -->

    </section>
</div>
@endsection

@push('addon-script')
@endpush