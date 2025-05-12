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
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kontak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @forelse($bantuans as $item)
                        <tr>
                            <td style="width:5%;">{{ $no++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kontak }}</td>
                            <td style="width:20%;">
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#ubahForm"
                                    data-id="{{ $item->id }}"
                                    data-nama="{{ $item->nama }}"
                                    data-kontak="{{ $item->kontak }}">
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
                            <td colspan="4" class="text-center">Data tidak ditemukan</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Tambah -->
       @include('pages.dashboard.bantuan.modal_tambah')
        <!-- End Modal Tambah -->

        <!-- Modal Ubah -->
       @include('pages.dashboard.bantuan.modal_edit')
        <!-- Modal Ubah -->

    </section>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="/assets/static/js/pages/simple-datatables.js"></script>

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

{{-- lempar data ke modal ubah --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ubahFormModal = document.getElementById('ubahForm');
    
        ubahFormModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
    
            // Ambil data dari button
            const id = button.getAttribute('data-id');
            const nama = button.getAttribute('data-nama');
            const kontak = button.getAttribute('data-kontak');
    
            // Isi input di modal
            ubahFormModal.querySelector('#nama').value = nama;
            ubahFormModal.querySelector('#kontak').value = kontak;
    
            // Set action form (jika pakai route update)
            ubahFormModal.querySelector('form').action = `/bantuan/${id}`;
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
                        deleteForm.action = `/bantuan/${itemId}`; // Sesuaikan URL jika pakai prefix
                        deleteForm.submit();
                    }
                });
            });
        });
    });
</script>
{{-- end pop up delete --}}

@endpush