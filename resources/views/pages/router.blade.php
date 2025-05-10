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
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#inlineForm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="/assets/compiled/jpg/1.jpg" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">BDCOM</h5>
                                    <h6 class="text-muted mb-0">S4800</h6>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#inlineForm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="/assets/compiled/jpg/1.jpg" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">BDCOM</h5>
                                    <h6 class="text-muted mb-0">S4800</h6>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#inlineForm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="/assets/compiled/jpg/1.jpg" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">BDCOM</h5>
                                    <h6 class="text-muted mb-0">S4800</h6>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Detail Modal-->
 <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">BDCOM S4800</h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
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
                                                    <button type="button" class="btn btn-primary ms-1"
                                                        data-bs-dismiss="modal">
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