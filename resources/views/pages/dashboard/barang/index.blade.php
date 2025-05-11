@extends('layouts.dashboard')

@section('title')
Dashboard Data Barang
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
                <h3>Data Barang</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"> Table Data Barang
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#tambahForm">
                        +
                    </button>
                </h5>
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
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1101010115</td>
                            <td>Kabel FOC</td>
                            <td>Kabel FOC</td>
                            <td>FOC,ADSS SS 100m 6F/1T,Kuning,,ZTT</td>
                            <td>50</td>
                            <td>pcs</td>
                            <td>
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#detailForm1">
                                    <i class="bi bi-pencil"></i> Ubah
                                </button>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>1101010080</td>
                            <td>Kabel FOC</td>
                            <td>Kabel FOC</td>
                            <td>FFOC,ADSS SS 100m,24F/4T,Strip Biru,JEMBO</td>
                            <td>150</td>
                            <td>pcs</td>
                            <td>
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#detailForm1">
                                    <i class="bi bi-pencil"></i> Ubah
                                </button>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Tambah-->
        @include('pages.dashboard.barang.modal_tambah')
        <!-- End Modal Tambah -->

        <!-- Modal Edit -->
        @include('pages.dashboard.barang.modal_edit')
        <!-- End Modal Edit -->

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <i class="bi bi-exclamation-circle-fill" style="color: white;"></i>
                        <h5 class="modal-title" id="exampleModalCenterTitle" style="color: white;">
                            Apakah Anda Yakin Ingin Menghapus?
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#info">
                            Tidak
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#danger">
                            Ya
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal -->

    </section>
</div>
@endsection

@push('addon-script')
<script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="/assets/static/js/pages/simple-datatables.js"></script>
@endpush