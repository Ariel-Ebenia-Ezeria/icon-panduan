<div class="modal fade text-left" id="tambahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tambah Switch</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('switch.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Brand Swicth</label>
                                <input id="brand" name="brand" type="text" class="form-control" id="basicInput"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Brand Logo</label>
                                <input id="logo" name="logo" type="file" class="form-control" id="basicInput" required>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Username Default</label>
                                <input id="username" name="username" type="text" class="form-control" id="basicInput"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Password Default</label>
                                <input id="password" name="password" type="text" class="form-control" id="basicInput"
                                    required>
                            </div>
                        </div>
                    </div>
                    <label>Pre-Config </label>
                    <div class="form-group">
                        <textarea id="preconfig" name="preconfig" class="form-control" rows="5" required></textarea>
                    </div>
                    <label>Command Pendukung </label>
                    <div class="form-group">
                        <textarea id="command" name="command" class="form-control" rows="3" required></textarea>
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
            </form>
        </div>
    </div>
</div>