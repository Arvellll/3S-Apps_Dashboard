
<div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            
            <!-- Header Modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Konten Modal -->
            <div class="modal-body">
            <div class="inner-body">
                <img class="gambar" src="{{ asset('svg/submit-modal.svg') }}" alt="Upload Icon">
                </div>

            </div>
            
            <div class="titleee">
            <p>Apakah Anda yakin dengan data yang telah diisi?</p>
            </div>
            <hr>
            <!-- Footer Modal (Tombol) -->
            <div class="modal-footer">
            
                <!-- Tombol Batal -->
                 <div class="button">
    
                        <button type="button" class="batal-modal" data-bs-dismiss="modal">Batal</button>
                        
                        <button type="button" class="submit-modal" data-bs-dismiss="modal"
                                data-bs-toggle="modal" data-bs-target="#paklaringModal">
                            Submit</button>
            
                </div>
                
            </div>
            
        </div>
    </div>
</div>

<!-- Include Modal 2 -->
@include('landing.resign.modal.details-parklaring')
