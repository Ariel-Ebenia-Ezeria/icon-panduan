<form action="{{ route('barang-keluar.store') }}" method="POST">
    @csrf
    <div class="modal fade text-left w-100" id="tambahModal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel20" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel20">Detail Barang Keluar</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="barang_id">Material</label>
                                <!-- <input id="barang_id" name="barang_id" type="text" class="form-control" value="7"
                                    placeholder="" disabled> -->
                                <select class="choices form-select" id="barang_id" name="barang_id">
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
                                <label for="jenis_barang">Jenis Barang</label>
                                <input id="jenis_barang" name="jenis_barang" type="text" class="form-control"
                                    placeholder="" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="keterangan_barang">Keterangan Barang</label>
                                <input id="keterangan_barang" name="keterangan_barang" type="text" class="form-control"
                                    placeholder="" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input id="jumlah" name="jumlah" type="number" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="jenis_kebutuhan">Jenis Kebutuhan</label>
                                <input id="jenis_kebutuhan" name="jenis_kebutuhan" type="text" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="tanggal_pengambilan">Tanggal Pengambilan</label>
                                <input id="tanggal_pengambilan" name="tanggal_pengambilan" type="date"
                                    class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="nama_engineer">Nama Engineer</label>
                                <input id="nama_engineer" name="nama_engineer" type="text" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="nama_mitra">Nama Mitra</label>
                                <input id="nama_mitra" name="nama_mitra" type="text" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="no_pa_ar">NO PA / AR</label>
                                <input id="no_pa_ar" name="no_pa_ar" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="lokasi_pemasangan">Lokasi Pemasangan</label>
                                <input id="lokasi_pemasangan" name="lokasi_pemasangan" type="text" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="status_rsvp">Status Reservasi</label>
                                <select class="form-select" id="status_rsvp" name="status_rsvp">
                                    <option value="Sudah Reservasi">Sudah Reservasi</option>
                                    <option value="Belum Reservasi">Belum Reservasi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="kode_rsvp">Kode Reservasi</label>
                                <input id="kode_rsvp" name="kode_rsvp" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="kode_gi">Kode GI</label>
                                <input id="kode_gi" name="kode_gi" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="no_io">NO IO</label>
                                <input id="no_io" name="no_io" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="plant">Plant</label>
                                <input id="plant" name="plant" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="storage_location">Storage Location</label>
                                <input id="storage_location" name="storage_location" type="text" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="df_stor_loc_level">DF stor. loc. level</label>
                                <input id="df_stor_loc_level" name="df_stor_loc_level" type="text" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="batch_real">Batch Real</label>
                                <input id="batch_real" name="batch_real" type="text" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="">
                                <label for="batch">Batch</label>
                                <input id="batch" name="batch" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input id="keterangan" name="keterangan" type="text" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-secondary">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reset</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Tambah</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>