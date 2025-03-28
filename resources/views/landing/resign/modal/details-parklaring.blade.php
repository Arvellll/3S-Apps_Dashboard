<!-- Modal -->
<div class="modal fade" id="paklaringModal" tabindex="-1" aria-labelledby="parklaringModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"> <!-- Tambahkan modal-dialog-centered -->
    <div class="modal-content">

      <!-- Header Modal -->
      <div class="modal-header">
        <h5 class="modal-title" id="parklaringModalLabel">Details Paklaring</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="window.location.href='{{ route('resign.paklaring') }}'"></button>
      </div>

      <!-- Konten Modal -->
      <div class="modal-body">
        <div class="modal-inner">
        <div class="baris-details">
          <div class="kol">
            <strong>Nama Karyawan</strong>
            <p>Marvin McKinney</p>
          </div>
          <div class="kol">
            <strong>Tanggal Penerbitan</strong>
            <p>18 October 2024</p>
          </div>
        </div>
        <hr class="custom-dashed">
        </div>

        <div class="modal-inner">
        <div class="baris-details">
          <div class="kol">
            <strong>Email</strong>
            <p>marvin@email.com</p>
          </div>
          <div class="kol">
            <strong>Nomor Telepon</strong>
            <p>0857493953234</p>
          </div>
        </div>
        <hr class="custom-dashed">
        </div>
      </div>

      <!-- Footer Modal -->
      <div class="modal-footer">
        <button type="button" class="button">Unduh Parklaring</button>
      </div>

    </div>
  </div>
</div>
