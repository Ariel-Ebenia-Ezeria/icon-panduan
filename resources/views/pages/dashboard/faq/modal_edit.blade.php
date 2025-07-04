<div class="modal fade text-left" id="ubahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
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
                    <label for="pertanyaan">Pertanyaan</label>
                    <div class="form-group">
                        <input id="pertanyaan" name="pertanyaan" type="text" class="form-control">
                    </div>
                    <label for="jawaban">Jawaban</label>
                    <div class="form-group">
                        <textarea id="jawaban" name="jawaban" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-secondary">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reset</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Tambah</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>