@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection

@section('content')
<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Jumlah Barang</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jml_material }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Jumlah Swicth</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jml_switch }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Jumlah Router</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jml_router }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Jumlah Pertanyaan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jml_pertanyaan }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Barang Keluar</h4>
                        </div>
                        <div class="card-body">
                            {{-- <div id="chart-profile-visit"></div> --}}
                            {{-- <canvas id="lineChartBarangKeluar" height="120"></canvas> --}}
                            <canvas id="stackedChartBarangKeluar" height="120"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('addon-script')
<!-- Need: Apexcharts -->
<script src="/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="/assets/static/js/pages/dashboard.js"></script>

{{-- start chart --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Line chart per tanggal
    new Chart(document.getElementById('lineChartBarangKeluar'), {
        type: 'line',
        data: {
            labels: {!! json_encode($tanggal) !!},
            datasets: [{
                label: 'Barang Keluar per Tanggal',
                data: {!! json_encode($total) !!},
                borderColor: 'blue',
                tension: 0.3,
                fill: false
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Barang Keluar per Tanggal'
                }
            }
        }
    });

    // Stacked bar chart per bulan
    new Chart(document.getElementById('stackedChartBarangKeluar'), {
        type: 'bar',
        data: {
            labels: {!! json_encode($bulanList) !!},
            datasets: {!! json_encode($datasets) !!}
        },
        options: {
            responsive: true,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            stacked: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Jumlah Barang Keluar per Bulan (per Item)'
                }
            },
            scales: {
                x: {
                    stacked: true
                },
                y: {
                    stacked: true,
                    beginAtZero: true
                }
            }
        }
    });
</script>

{{-- end chart --}}
@endpush