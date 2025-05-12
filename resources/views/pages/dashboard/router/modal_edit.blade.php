<div class="modal fade text-left" id="ubahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Ubah Data</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input type="text" class="form-control" id="brand" name="brand">
                            </div>
                        </div>
                        <div class=" col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password">
                            </div>
                        </div>
                    </div>
                    <label for="preconfig">Pre-Config </label>
                    <div class="form-group">
                        {{-- <button type="button" id="copyPreconfig" class="btn btn-secondary mt-2">Copy to
                            Clipboard</button> --}}
                        <textarea id="preconfig" name="preconfig" class="form-control" rows="5"></textarea>
                    </div>
                    <label for="command">Command Pendukung </label>
                    <div class="form-group">
                        {{-- <button type="button" id="copyCommand" class="btn btn-secondary mt-2">Copy to Clipboard</button> --}}
                        <textarea id="command" name="command" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ms-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>