<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="inner-body">
                <img class="gambar" src="{{ asset('svg/hapus-modal.svg') }}" alt="Upload Icon">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-cancel" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn-hapus" data-bs-dismiss="modal">Hapus</button>
            </div>
        </div>
    </div>
</div>
