@extends('layouts.dashboard')

@section('title')
Dashboard Preconfig Switch
@endsection
@push('prepend-style')
@endpush
@push('addon-style')
<link rel="stylesheet" href="/assets/compiled/css/app.css">
<link rel="stylesheet" href="/assets/compiled/css/app-dark.css">
@endpush

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Switch
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#tambahForm">
                        +
                    </button>
                </h3>
            </div>
        </div>
    </div>
    <section id="content-types">
        <div class="row">
            @forelse ($switch as $item)
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <button type="button" class="btn btn-block" data-bs-toggle="modal"
                        data-bs-target="#ubahForm"
                        data-id="{{ $item->id }}"
                        data-brand="{{ $item->brand }}"
                        data-username="{{ $item->username }}"
                        data-password="{{ $item->password }}"
                        data-preconfig="{{ $item->preconfig }}"
                        data-command="{{ $item->command }}">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="{{ Storage::url($item->logo) }}" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold" style="font-size: xx-large;">{{ $item->brand }}</h5>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-danger delete-button" data-id="{{ $item->id }}">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                        <form id="deleteForm" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </button>
                </div>
            </div>
            @empty
            <h6>
                <div class="alert alert-danger" style="text-align: center;">
                    <i class="bi bi-exclamation-triangle"> Data Switch Kosong</i>
                </div>
            </h6>
            @endforelse
        </div>

        <!-- Tambah Modal -->
        @include('pages.dashboard.switch.modal_tambah')
        <!-- End Tambah Modal -->

        <!-- Modal Edit-->
        @include('pages.dashboard.switch.modal_edit')
        <!-- End Modal Edit -->
    </section>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            const brand = button.getAttribute('data-brand');
            const username = button.getAttribute('data-username');
            const password = button.getAttribute('data-password');
            const preconfig = button.getAttribute('data-preconfig');
            const command = button.getAttribute('data-command');
    
            // Isi input di modal
            ubahFormModal.querySelector('#brand').value = brand;
            ubahFormModal.querySelector('#username').value = username;
            ubahFormModal.querySelector('#password').value = password;
            ubahFormModal.querySelector('#preconfig').value = preconfig;
            ubahFormModal.querySelector('#command').value = command;
    
            // Set action form (jika pakai route update)
            ubahFormModal.querySelector('form').action = `/switch/${id}`;
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
                        deleteForm.action = `/switch/${itemId}`; // Sesuaikan URL jika pakai prefix
                        deleteForm.submit();
                    }
                });
            });
        });
    });
</script>
{{-- end pop up delete --}}

<script>
    // Function to copy text to clipboard
    function copyToClipboard(text) {
        // Create a temporary textarea to select and copy the text
        var tempTextArea = document.createElement("textarea");
        tempTextArea.value = text;
        document.body.appendChild(tempTextArea);
        tempTextArea.select();
        document.execCommand("copy");
        document.body.removeChild(tempTextArea);
    }

    // Add event listener to copy preconfig text
    document.getElementById("copyPreconfig").addEventListener("click", function() {
        var preconfigText = document.getElementById("preconfig").value;
        copyToClipboard(preconfigText);
        alert("Pre-config berhasil disalin!");
    });

    // Add event listener to copy command text
    document.getElementById("copyCommand").addEventListener("click", function() {
        var commandText = document.getElementById("command").value;
        copyToClipboard(commandText);
        alert("Command berhasil disalin!");
    });
</script>

@endpush