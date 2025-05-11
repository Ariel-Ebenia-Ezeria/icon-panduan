@extends('layouts.landing')

@section('title')
Landing Pages
@endsection

@section('content')
<div class="page-content">
    <section class="section">
        <div class="row">
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/assets/compiled/jpg/icon-plus.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/compiled/jpg/icon-plus1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/compiled/jpg/icon-plus2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection

@push('addon-script')
<script src="/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="/assets/static/js/pages/dashboard.js"></script>
@endpush