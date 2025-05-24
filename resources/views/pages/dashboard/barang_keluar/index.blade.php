@extends('layouts.dashboard')

@section('title')
Dashboard Barang Keluar
@endsection
@push('prepend-style')
<link rel="stylesheet" href="assets/extensions/choices.js/public/assets/styles/choices.css">
@endpush
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
                            <th>No</th>
                            <th>Tanggal Pengambilan</th>
                            <th>Jenis Kebutuhan</th>
                            <th>Nama Enginner</th>
                            <th>Nama Mitra</th>
                            <th>Nomor PA/AR</th>
                            <th>Kode Reservasi</th>
                            <th>Status Reservasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @forelse($barang_keluars as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                {{ \Carbon\Carbon::parse($item->tanggal_pengambilan)->translatedFormat('d F Y') }}</td>
                            <td>{{ $item->jenis_kebutuhan }}</td>
                            <td>{{ $item->nama_engineer}}</td>
                            <td>{{ $item->nama_mitra}}</td>
                            <td>{{ $item->no_pa_ar}}</td>
                            <td>{{ $item->kode_rsvp}}</td>
                            <td>
                                @if($item->status_rsvp == 'Sudah Reservasi')
                                    <span class="badge bg-success">Sudah Reservasi</span>
                                @else
                                    <span class="badge bg-warning">{{ $item->status_rsvp }}</span>
                                @endif
                            </td>
                            <td >
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#ubahForm"
                                    data-id="{{ $item->id }}"
                                    data-tanggal_pengambilan="{{ $item->tanggal_pengambilan }}"
                                    data-jenis_kebutuhan="{{ $item->jenis_kebutuhan }}"
                                    data-nama_engineer="{{ $item->nama_engineer }}"
                                    data-nama_mitra="{{ $item->nama_mitra }}"
                                    data-no_pa_ar="{{ $item->no_pa_ar }}"
                                    data-lokasi_pemasangan="{{ $item->lokasi_pemasangan }}"
                                    data-jumlah="{{ $item->jumlah }}"
                                    data-status_rsvp="{{ $item->status_rsvp }}"
                                    data-kode_rsvp="{{ $item->kode_rsvp }}"
                                    data-kode_gi="{{ $item->kode_gi }}"
                                    data-no_io="{{ $item->no_io }}"
                                    data-keterangan="{{ $item->keterangan }}"
                                    data-barang_id="{{ $item->barang_id }}"
                                    data-nama_barang="{{ $item->barang->nama_material }}"
                                    data-plant="{{ $item->plant }}"
                                    data-storage_location="{{ $item->storage_location }}"
                                    data-df_stor_loc_level="{{ $item->df_stor_loc_level }}"
                                    data-batch_real="{{ $item->batch_real }}"
                                    data-batch="{{ $item->batch }}"
                                    data-jenis_barang="{{ $item->barang->jenis_material }}"
                                    data-keterangan_barang="{{ $item->barang->deskripsi_material }}"
                                    >
                                    <i class="bi bi-pencil"></i> Ubah
                                </button>
                                <button type="button" class="btn btn-outline-danger delete-button" data-id="{{ $item->id }}">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                                <form id="deleteForm" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tambah Modal -->
        @include('pages.dashboard.barang_keluar.modal_tambah')
        <!-- Tambah Modal -->
        <!-- Ubah Modal -->
        @include('pages.dashboard.barang_keluar.modal_edit')
        <!-- Ubah Modal -->

    </section>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="/assets/static/js/pages/simple-datatables.js"></script>
<script src="/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
<script src="/assets/static/js/pages/form-element-select.js"></script>

{{-- AJAX get-barang --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#barang_id').change(function () {
        let barangId = $(this).val();

        if (barangId) {
            $.ajax({
                url: '/get-barang/' + barangId,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $('#jenis_barang').val(data.jenis_material);
                    $('#keterangan_barang').val(data.deskripsi_material);
                },
                error: function () {
                    alert('Gagal mengambil data barang.');
                }
            });
        }
    });
</script>
{{-- end AJAX get-barang --}}

{{-- Pop up success --}}
@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 2000,
                showConfirmButton: false
            });
        });
    </script>
@endif
{{-- end pop up success --}}

{{-- Pop up error --}}
@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                timer: 2000,
                showConfirmButton: false
            });
        });
    </script>
@endif
{{-- end pop up error --}}

{{-- lempar data ke modal ubah --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ubahFormModal = document.getElementById('ubahForm');

        ubahFormModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            // Ambil data dari button
            const id = button.getAttribute('data-id');
            const tanggal_pengambilan = button.getAttribute('data-tanggal_pengambilan');
            const jenis_kebutuhan = button.getAttribute('data-jenis_kebutuhan');
            const nama_engineer = button.getAttribute('data-nama_engineer');
            const nama_mitra = button.getAttribute('data-nama_mitra');
            const no_pa_ar = button.getAttribute('data-no_pa_ar');
            const lokasi_pemasangan = button.getAttribute('data-lokasi_pemasangan');
            const jumlah = button.getAttribute('data-jumlah');
            const status_rsvp = button.getAttribute('data-status_rsvp');
            const kode_rsvp = button.getAttribute('data-kode_rsvp');
            const kode_gi = button.getAttribute('data-kode_gi');
            const no_io = button.getAttribute('data-no_io');
            const keterangan = button.getAttribute('data-keterangan');
            const barang_id = button.getAttribute('data-barang_id');
            const nama_barang = button.getAttribute('data-nama_barang');
            const plant = button.getAttribute('data-plant');
            const storage_location = button.getAttribute('data-storage_location');
            const df_stor_loc_level = button.getAttribute('data-df_stor_loc_level');
            const batch_real = button.getAttribute('data-batch_real');
            const batch = button.getAttribute('data-batch');
            const jenis_barang = button.getAttribute('data-jenis_barang');
            const keterangan_barang = button.getAttribute('data-keterangan_barang');

            // Isi input di modal
            ubahFormModal.querySelector('#tanggal_pengambilan').value = tanggal_pengambilan;
            ubahFormModal.querySelector('#jenis_kebutuhan').value = jenis_kebutuhan;
            ubahFormModal.querySelector('#nama_engineer').value = nama_engineer;
            ubahFormModal.querySelector('#nama_mitra').value = nama_mitra;
            ubahFormModal.querySelector('#no_pa_ar').value = no_pa_ar;
            ubahFormModal.querySelector('#lokasi_pemasangan').value = lokasi_pemasangan;
            ubahFormModal.querySelector('#jumlah').value = jumlah;
            ubahFormModal.querySelector('#status_rsvp').value = status_rsvp;
            ubahFormModal.querySelector('#kode_rsvp').value = kode_rsvp;
            ubahFormModal.querySelector('#kode_gi').value = kode_gi;
            ubahFormModal.querySelector('#no_io').value = no_io;
            ubahFormModal.querySelector('#keterangan').value = keterangan;
            ubahFormModal.querySelector('#barang_id').value = barang_id;
            ubahFormModal.querySelector('#nama_barang').value = nama_barang;
            ubahFormModal.querySelector('#plant').value = plant;
            ubahFormModal.querySelector('#storage_location').value = storage_location;
            ubahFormModal.querySelector('#df_stor_loc_level').value = df_stor_loc_level;
            ubahFormModal.querySelector('#batch_real').value = batch_real;
            ubahFormModal.querySelector('#batch').value = batch;
            ubahFormModal.querySelector('#jenis_barang').value = jenis_barang;
            ubahFormModal.querySelector('#keterangan_barang').value = keterangan_barang;

            // Set form action
            ubahFormModal.querySelector('form').action = `/barang-keluar/${id}`;
        });
    });
</script>

{{-- end lempar data ke modal ubah --}}

{{-- Pop up delete --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-button');
        const deleteForm = document.getElementById('deleteForm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const itemId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: "Data akan hilang secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        deleteForm.action = `/barang-keluar/${itemId}`; // Sesuaikan URL jika pakai prefix
                        deleteForm.submit();
                    }
                });
            });
        });
    });
</script>
{{-- end pop up delete --}}

@endpush