<!-- Modal Detail Rejected -->
<div class="modal fade" id="Rejected" tabindex="-1" aria-labelledby="detailRejectedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailRejectedLabel">Detail On Boarding</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="inner-body">
                    <!-- Nama Karyawan -->
                     <div class="dalam2">
                        <div class="dalam">
                        <h5>Nama Karyawan</h5>
                        <p class="text-muted" id="modalNama">Andi Pratama</p>
                        </div>
                        <div class="dalam">
                                <h5 class="text-muted" id="modalTanggal">File On Boarding</h5>
                                <a href="#" id="modalFile">On Boarding.pdf
                                    <img src="{{ asset('svg/icon-pdf.svg') }}" alt="Download" width="15px">
                                </a>
                        </div>
                    </div>


                    <hr class="custom-dashed">

                    <!-- Deskripsi Penolakan -->
                    <h5>Deskripsi Penolakan</h5>

                    <textarea type="text" placeholder="Deskripsi Penolakan"></textarea>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-cancel" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn-hapus" data-bs-toggle="modal" data-bs-target="#detailRejected">Reject</button>
            </div>
        </div>
    </div>
</div>

@include('landing.onboarding.modal.detail-rejected')