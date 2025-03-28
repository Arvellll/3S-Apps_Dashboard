
<div class="modal fade" id="keluarModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            
            <!-- Header Modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Keluar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Konten Modal -->
            <div class="modal-body">
            <div class="inner-body">
                <img class="gambar" src="{{ asset('svg/keluar-bg.svg') }}" alt="Upload Icon">
                </div>

            </div>
            
            <div class="titleee">
            <p>Anda yakin ingin keluar dari akun ini? Anda harus login kembali setelah berhasil keluar dari akun.</p>
            </div>
            <hr>
            <!-- Footer Modal (Tombol) -->
            <div class="modal-footer">
                <!-- Tombol Batal -->
                 <div class="button">
    
                        <button type="button" class="batal-modal" data-bs-dismiss="modal">Batal</button>
                        
                        <button type="button" class="submit-modal" onclick=window.location.href="{{ route('login') }}">Keluar</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Modal 2 -->
@include('landing.resign.modal.details-parklaring')
