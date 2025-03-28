<!-- Modal Detail Rejected -->
<div class="modal fade" id="detailRejected" tabindex="-1" aria-labelledby="detailRejectedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailRejectedLabel">Detail On Boarding</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="inner-body">
                    <!-- Nama Karyawan -->
                    <h5>Nama Karyawan</h5>
                    <p class="text-muted" id="modalNama">Andi Pratama</p>

                    <hr class="custom-dashed">

                    <!-- Status dan File -->
                   
                    <div class="dalam2">
                        <div class="dalam">
                            <h5>Status</h5>
                            <p>Rejected</p>
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
                    <p class="text-muted" id="modalDeskripsi">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
