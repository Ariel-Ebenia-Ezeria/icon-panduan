<div class="modal fade text-left" id="ubahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Ubah Data</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form method="POST" action="" enctype="multipart/form-data"> {{-- Nanti diganti di JS --}}
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label for="kode_material">Kode Material: </label>
                    <input id="kode_material" name="kode_material" type="text" class="form-control">

                    <label for="nama_material" class="mt-2">Nama Material: </label>
                    <input id="nama_material" name="nama_material" type="text" class="form-control">

                    <label for="jenis_material" class="mt-2">Jenis Material: </label>
                    <input id="jenis_material" name="jenis_material" type="text" class="form-control">

                    <label for="deskripsi_material" class="mt-2">Deskripsi Material: </label>
                    <input id="deskripsi_material" name="deskripsi_material" type="text" class="form-control">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="stok_material" class="mt-2">Stok Material: </label>
                            <input id="stok_material" name="stok" type="number" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="satuan_material" class="mt-2">Satuan Material: </label>
                            <input id="satuan_material" name="satuan" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-warning">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
