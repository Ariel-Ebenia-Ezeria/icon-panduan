@extends('layouts.dashboard')

@section('title')
Dashboard Preconfig Switch
@endsection
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
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="./assets/compiled/png/switch.png" alt="Card image cap"
                            style="height: 20rem" />
                        <div class="card-body">
                            <h4 class="card-title">BDCOM S4800</h4>
                            <p class="card-text">
                                Manageable switch 8Port 100/1000 Mbps, 2 SFP port 1G, 1 Console port.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-info block" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">
                                Detail
                            </button>
                            <button type="button" class="btn btn-danger block" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="./assets/compiled/png/switch.png" alt="Card image cap"
                            style="height: 20rem" />
                        <div class="card-body">
                            <h4 class="card-title">BDCOM S4800</h4>
                            <p class="card-text">
                                Manageable switch 8Port 100/1000 Mbps, 2 SFP port 1G, 1 Console port.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-info block" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">
                                Detail
                            </button>
                            <button type="button" class="btn btn-danger block" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="./assets/compiled/png/switch.png" alt="Card image cap"
                            style="height: 20rem" />
                        <div class="card-body">
                            <h4 class="card-title">BDCOM S4800</h4>
                            <p class="card-text">
                                Manageable switch 8Port 100/1000 Mbps, 2 SFP port 1G, 1 Console port.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-info block" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">
                                Detail
                            </button>
                            <button type="button" class="btn btn-danger block" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                role="document">
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
                        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                            data-bs-target="#info">
                            Tidak
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#danger">
                            Ya
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal -->

        <!-- Tambah Modal -->
        <div class="modal fade text-left" id="tambahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Tambah Swicth</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="basicInput">Brand Swicth</label>
                                        <input type="text" class="form-control" id="basicInput" value="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="basicInput">Brand Logo</label>
                                        <input type="file" class="form-control" id="basicInput" value="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="basicInput">Username Default</label>
                                        <input type="text" class="form-control" id="basicInput" value="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="basicInput">Password Default</label>
                                        <input type="text" class="form-control" id="basicInput" value="">
                                    </div>
                                </div>
                            </div>
                            <label>Pre-Config </label>
                            <div class="form-group">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                            <label>Command Pendukung </label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Kembali</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Tambah Modal -->

        <!-- Detail Modal-->
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">BDCOM S4800</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="basicInput">Username</label>
                                        <input type="text" class="form-control" id="basicInput" value="admin">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="basicInput">Password</label>
                                        <input type="text" class="form-control" id="basicInput" value="12345" readonly>
                                    </div>
                                </div>
                            </div>
                            <label>Pre-Config </label>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" readonly>config
hostname RKAL-GEDUNG.ARSITEKTUR.UPR-FH.S4800.8P-CPE-01
vlan 15
alias WAN-NMS-RKAL
quit
vlan 908
alias METRO-200MBPS
quit 
int vlan 15
ip address 172.27.192.35/29
quit
ip route-static 0.0.0.0 0.0.0.0 172.27.192.33
ip route-static 10.14.4.0 255.255.255.0  172.27.192.33
ip route-static 10.14.3.0 255.255.255.0  172.27.192.33
int gi 1/0/1
alias "311202002379 METRO GEDUNG ARSITEKTUR, UPR"
port link-type access
port default vlan 908
quit
int gi 1/0/2
alias "311202002379 METRO GEDUNG ARSITEKTUR, UPR"
port link-type access
port default vlan 908
quit
int gi 1/0/3
alias "311202002379 METRO GEDUNG ARSITEKTUR, UPR"
port link-type access
port default vlan 908
quit
int gi 1/0/4
alias "311202002379 METRO GEDUNG ARSITEKTUR, UPR"
port link-type access
port default vlan 908
quit
int gi 1/0/5
alias "311202002379 METRO GEDUNG ARSITEKTUR, UPR"
port link-type access
port default vlan 908
quit
int gi 1/0/6
alias "311202002379 METRO GEDUNG ARSITEKTUR, UPR"
port link-type access
port default vlan 908
quit
int gi 1/0/9
alias "311202002379 METRO GEDUNG ARSITEKTUR, UPR"
port link-type trunk
port trunk allow-pass vlan 15,908
quit
wr f

                                                         </textarea>
                            </div>
                            <label>Command Pendukung </label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" readonly>enable          
configure terminal 
</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Kembali</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Detail Modal -->
    </section>
</div>
@endsection

@push('addon-script')
@endpush