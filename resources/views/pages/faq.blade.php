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
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apa yang harus dilakukan sebelum melakukan aktivasi layanan di ICON+?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- <strong>This is the first item's accordion body.</strong>  -->
                                Sebelum melakukan aktivasi, pastikan semua persyaratan seperti data pelanggan, lokasi
                                pemasangan, dan perangkat yang dibutuhkan sudah tersedia. Tim harus melakukan survey
                                lokasi untuk memastikan jaringan dapat menjangkau area tersebut dan melakukan reservasi
                                perangkat dari gudang.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana cara memastikan perangkat yang akan dipasang dalam keadaan baik?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- <strong>This is the second item's accordion body.</strong>  -->
                                Pemeriksaan perangkat dilakukan di gudang sebelum pengeluaran perangkat. Setiap
                                perangkat yang keluar harus diperiksa kondisinya, memastikan bahwa tidak ada kerusakan
                                fisik dan berfungsi dengan baik. Pengujian sinyal juga dilakukan saat instalasi untuk
                                memastikan kualitas layanan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apa itu Testcomm, dan mengapa itu penting dalam aktivasi layanan?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- <strong>This is the third item's accordion body.</strong> -->
                                Testcomm adalah proses pengujian koneksi yang dilakukan setelah instalasi perangkat. Tim
                                akan menguji koneksi dengan melakukan ping ke IP eksternal seperti Google dan memeriksa
                                kecepatan bandwidth. Ini memastikan bahwa layanan berjalan dengan baik dan sesuai dengan
                                standar yang ditetapkan oleh ICON+

                            </div>

                        </div>

                    </div>

                </div>

            </div>

    </section>
    <div class="container">
        <button type="button" class="btn btn-success block mb-3" onclick="window.open('https://wa.me/6282317616289', '_blank')">
            <i class="fab fa-whatsapp"></i>
            Bantuan
        </button>
    </div>
</div>
@endsection

@push('addon-script')
<script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="/assets/static/js/pages/simple-datatables.js"></script>
@endpush