
<div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            
            <!-- Header Modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Konten Modal -->
             <!-- Konten Modal -->
             <div class="modal-body">
            <div class="inner-body">
                <img class="gambar" src="{{ asset('svg/submit-modal.svg') }}" alt="Upload Icon">
                </div>

            </div>
            
            <div class="titleee">
            <p>Apakah Anda yakin dengan data yang telah diisi?</p>
            </div>
            <hr style="margin-top:16px;">
            <!-- Footer Modal (Tombol) -->
            <div class="modal-footer">
                <!-- Tombol Batal -->
                 <div class="button">
    
                        <button type="button" class="batal-modal" data-bs-dismiss="modal">Batal</button>
                        
                        <button type="button" class="submit-modal" onclick="window.location.href='{{ route('surat.detail') }}'">Submit</button>

                </div>
            </div>
        </div>
    </div>
</div>

