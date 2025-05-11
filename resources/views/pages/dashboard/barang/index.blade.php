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
                            <th>No</th>
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
                        @php
                        $no=1;
                        @endphp
                        @forelse($barangs as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->kode_material }}</td>
                            <td>{{ $item->nama_material }}</td>
                            <td>{{ $item->jenis_material }}</td>
                            <td>{{ $item->deskripsi_material }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#ubahForm"
                                    data-id="{{ $item->id }}"
                                    data-kode_material="{{ $item->kode_material }}"
                                    data-nama_material="{{ $item->nama_material }}"
                                    data-jenis_material="{{ $item->jenis_material }}"
                                    data-deskripsi_material="{{ $item->deskripsi_material }}"
                                    data-stok="{{ $item->stok }}"
                                    data-satuan="{{ $item->satuan }}">
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
                            <td colspan="8" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
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

    </section>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="/assets/static/js/pages/simple-datatables.js"></script>

{{-- lempar data ke modal ubah --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ubahFormModal = document.getElementById('ubahForm');
    
        ubahFormModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
    
            // Ambil data dari button
            const id = button.getAttribute('data-id');
            const kode_material = button.getAttribute('data-kode_material');
            const nama_material = button.getAttribute('data-nama_material');
            const jenis_material = button.getAttribute('data-jenis_material');
            const deskripsi_material = button.getAttribute('data-deskripsi_material');
            const stok = button.getAttribute('data-stok');
            const satuan = button.getAttribute('data-satuan');
    
            // Isi input di modal
            ubahFormModal.querySelector('#kode_material').value = kode_material;
            ubahFormModal.querySelector('#nama_material').value = nama_material;
            ubahFormModal.querySelector('#jenis_material').value = jenis_material;
            ubahFormModal.querySelector('#deskripsi_material').value = deskripsi_material;
            ubahFormModal.querySelector('#stok_material').value = stok;
            ubahFormModal.querySelector('#satuan_material').value = satuan;
    
            // Set action form (jika pakai route update)
            ubahFormModal.querySelector('form').action = `/barang/${id}`;
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
                        deleteForm.action = `/barang/${itemId}`; // Sesuaikan URL jika pakai prefix
                        deleteForm.submit();
                    }
                });
            });
        });
    });
</script>
{{-- end pop up delete --}}

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

@endpush