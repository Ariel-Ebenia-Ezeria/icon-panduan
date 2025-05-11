<div class="modal fade text-left" id="tambahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tambah Data</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label for="kode_material">Kode Material: </label>
                    <div class="form-group">
                        <input id="kode_material" type="text" placeholder="" class="form-control">
                    </div>
                    <label for="nama_material">Nama Material: </label>
                    <div class="form-group">
                        <input id="nama_material" type="text" placeholder="" class="form-control">
                    </div>
                    <label for="jenis_material">Jenis Material: </label>
                    <div class="form-group">
                        <input id="jenis_material" type="text" placeholder="" class="form-control">
                    </div>
                    <label for="deskripsi_material">Deskripsi Material: </label>
                    <div class="form-group">
                        <input id="deskripsi_material" type="text" placeholder="" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="stok_material">Stok Material: </label>
                            <div class="form-group">
                                <input id="stok_material" type="number" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="stok_material">Satuan Material: </label>
                            <div class="form-group">
                                <input id="stok_material" type="text" placeholder="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-secondary">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reset</span>
                    </button>
                    <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Tambah</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>