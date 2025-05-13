<div class="modal fade text-left w-100" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel20">Detail Barang Keluar</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('barang-keluar.store') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Material</label>
                                <select class="choices form-select">
                                    @forelse($barangs as $item)
                                    <option value="{{ $item->id }}">{{ $item->kode_material }} -
                                        {{ $item->nama_material }}
                                    </option>
                                    @empty
                                    <option value="-" disabled>Tidak ada data material</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Jenis Barang</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Keterangan Barang</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Jumlah</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Jenis Kebutuhan</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Tanggal Penggambilan</label>
                                <input type="date" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Nama Enginneer</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Nama Mitra</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">NO PA / AR</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Lokasi Pemasangan</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Status Reservasi</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Kode Reservasi</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Kode GI</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">NO IO</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Material Description</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Plant</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Storage Location</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">DF stor. loc. level</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Batch Real</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Batch</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Keterangan</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                </div>
        </div>
    </div>
</div>