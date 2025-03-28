<div class="modal fade" id="unggahFileContract" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadModalLabel">Unggah File Contract</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="uploadForm" enctype="multipart/form-data">
          <div class="content">
            <label for="contractFile" class="form-label">File Contract & PKWT</label>
            <div class="file-input-container">
            <input type="text" class="file-name" placeholder="PDF" readonly>
            <label for="fileInput" class="upload-btn1">Unggah</label>
            <input type="file" id="fileInput" accept="application/pdf" hidden>
        </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="button">
        <button type="button" class="batal-modal" data-bs-dismiss="modal">Batal</button>
        <button data-bs-toggle="modal" data-bs-target="#submitModal" type="submit" class="submit-modal">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>

@include('landing.karyawan.eksternal.modal.submitmodal')