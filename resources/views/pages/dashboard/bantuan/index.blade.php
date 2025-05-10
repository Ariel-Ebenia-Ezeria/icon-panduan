@extends('layouts.dashboard')

@section('title')
Dashboard Bantuan
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
                <h3>Bantuan</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"> Kontak Bantuan
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#tambahForm">
                        +
                    </button>
                </h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kontak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ariel Ebenia Ezeria</td>
                            <td>+62 823-1761-6289</td>
                            <td>
                                <button type="button" class="btn btn-danger block" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade text-left" id="tambahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Tambah Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <label for="kode_material">Nama</label>
                            <div class="form-group">
                                <input id="kode_material" type="text" placeholder="" class="form-control">
                            </div>
                            <label for="nama_material">Kontak</label>
                            <div class="form-group">
                                <input id="number" type="text" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="reset" class="btn btn-light-secondary">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button> -->
                            <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tambah</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal Tambah -->

        <!-- Modal Detail -->
        <div class="modal fade text-left" id="detailForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Detail Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <label for="kode_material">Pertanyaan</label>
                            <div class="form-group">
                                <input id="kode_material" type="text" value="Semut makan apa?" class="form-control" readonly>
                            </div>
                            <label for="nama_material">Jawaban</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" readonly>Toyongg</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-light-secondary">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>
                            <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tambah</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Detail -->

        <!-- Modal Delete -->
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
        <!-- End Modal Delete -->

    </section>
</div>
@endsection

@push('addon-script')
@endpush