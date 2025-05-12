@extends('layouts.landing')

@section('title')
PLN ICON PLUS - Pre-Config Router
@endsection
@push('addon-style')
<link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="/assets/compiled/css/table-datatable.css">
@endpush

@section('content')
<div class="page-heading">
    <h3>Pre-Config Router</h3>
</div>
<div class="page-content">
    <section id="content-types">
        <div class="row">
            @forelse ($router as $item)
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#detailForm" data-id="{{ $item->id }}" data-brand="{{ $item->brand }}" data-username="{{ $item->username }}" data-password="{{ $item->password }}" data-preconfig="{{ $item->preconfig }}" data-command="{{ $item->command }}">
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
                    </button>
                </div>
            </div>
            @empty
            <h6>
                <div class="alert alert-danger" style="text-align: center;">
                    <i class="bi bi-exclamation-triangle"> Data Router Kosong</i>
                </div>
            </h6>
            @endforelse
        </div>

        <!-- Detail Modal-->
        <div class="modal fade text-left" id="detailForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Ubah Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="#" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="brand">Brand</label>
                                        <input type="text" class="form-control" id="brand" name="brand" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" id="password" name="password" readonly>
                                    </div>
                                </div>
                            </div>
                            <label for="preconfig">Pre-Config </label>
                            <div class="form-group">
                                <button type="button" id="copyPreconfig" class="btn btn-secondary mt-2">Copy to
                                    Clipboard</button>
                                <textarea id="preconfig" name="preconfig" class="form-control" rows="5" readonly></textarea>
                            </div>
                            <label for="command">Command Pendukung </label>
                            <div class="form-group">
                                <button type="button" id="copyCommand" class="btn btn-secondary mt-2">Copy to
                                    Clipboard</button>
                                <textarea id="command" name="command" class="form-control" rows="3" readonly></textarea>
                            </div>
                        </div>
                        {{-- <div class="modal-footer">
                        <button type="submit" class="btn btn-primary ms-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>
                    </div> --}}
                    </form>
                </div>
            </div>
        </div>
        <!-- End Detail Modal -->
    </section>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- lempar data ke modal detail --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ubahFormModal = document.getElementById('detailForm');

        ubahFormModal.addEventListener('show.bs.modal', function(event) {
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
        });
    });
</script>
{{-- end lempar data ke modal detail --}}

{{-- Toast Copy Clipboard --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        function showToast(icon, message) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: icon,
                title: message,
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true
            });
        }

        function copyText(id) {
            const text = document.getElementById(id).value;
            navigator.clipboard.writeText(text).then(() => {
                showToast('success', 'Teks berhasil disalin!');
            }).catch(() => {
                showToast('error', 'Gagal menyalin teks!');
            });
        }

        document.getElementById('copyPreconfig')?.addEventListener('click', function() {
            copyText('preconfig');
        });

        document.getElementById('copyCommand')?.addEventListener('click', function() {
            copyText('command');
        });
    });
</script>
{{-- End Toast --}}
@endpush