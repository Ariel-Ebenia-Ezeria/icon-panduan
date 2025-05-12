@extends('layouts.landing')

@section('title')
PLN ICON PLUS - Pre-Config Switch
@endsection
@push('addon-style')
<link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="/assets/compiled/css/table-datatable.css">
@endpush

@section('content')
<div class="page-heading">
    <h3>FAQ
</div>
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Pertanyaan yang paling sering diajukan.</h5>
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionExample">
                    @forelse($faqs as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $item->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}" aria-expanded="false" aria-controls="collapse{{ $item->id }}">
                                {{ $item->pertanyaan }}
                            </button>
                        </h2>
                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $item->jawaban }}
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-danger" style="text-align: center;">
                        <i class="bi bi-exclamation-triangle"> Data Switch Kosong</i>
                    </div>
                    @endforelse
                </div>

            </div>

    </section>
    <div class="container">
        <div class="alert alert-success" style="text-align: center;">
            <i class="bi bi-phone"></i> Kontak Bantuan <i class="bi bi-phone"></i>
        </div>
        <div class="row">
            @forelse ($bantuans as $item)
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <button type="button" class="btn btn-block" onclick="window.open('https://wa.me/62{{ $item->kontak }}', '_blank')">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="/assets/compiled/jpg/wangsap.webp" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold" style="font-size: xx-large;">{{ $item->nama }}</h5>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            @empty
            <h6>
                <div class="alert alert-danger" style="text-align: center;">
                    <i class="bi bi-exclamation-triangle"> Data Kontak Bantuan Tidak Ditemukan</i>
                </div>
            </h6>
            @endforelse
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="/assets/static/js/pages/simple-datatables.js"></script>
@endpush