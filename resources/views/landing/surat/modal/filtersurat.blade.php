<div class="modal fade" id="filterModal2" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr style="margin:0;">
            <div class="modal-body">
                <div class="inner-bodyy">
                    <!-- Pilihan Status -->
                    <div class="status">
                        <h5 for="statusSelect" class="form-label">Status</h5>
                        <select class="form-select" id="statusSelect">
                            <option selected>Pilih</option>
                            <option value="aktif">Aktif</option>
                            <option value="tidak_aktif">Tidak Aktif</option>
                        </select>
                    </div>

                    <div class="jenis">
                        <h5>Jenis Surat</h5>
                        <select class="form-select" id="statusSelect">
                            <option selected>Pilih</option>
                            <option value="aktif"></option>
                            <option value="tidak_aktif"></option>
                        </select>
                    </div>

                    <!-- Pilihan Tanggal Penerbitan -->
                    <div class="tanggal">
                        <h5 for="tanggalPenerbitan" class="form-label">Tanggal Unggah</h5>
                        <input type="date" class="form-control" id="tanggalUnggah">
                    </div>
                </div>
            </div>
            <hr style="margin:0;">
            <div class="modal-footer">
                <div class="button">
                <button type="button" class="batal-modal" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="submit-modal" data-bs-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>