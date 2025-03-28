@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="tambah-surat">
    <div class="title">
        <h1>Surat Peringatan <span>/ Tambah Surat Peringatan</span></h1>
    </div>
    
    <div class="informasi-surat">
        <h6>Informasi Surat Peringatan</h6>
        <hr>
        <div class="nama-karyawan">
            <h5 for="karyawan">Nama Karyawan</h5>
            <select id="karyawan" class="opsi">
                <option class="select" value="" selected> Pilih</option>
            </select>
        </div>
        <div class="inner-surat1">
            <div class="tanggal">
                <label>Tanggal Pelanggaran</label>
                <input type="date">
               
            <div class="durasi">
                <label for="durasi">Durasi Peringatan</label>
                    <select id="nama" class="opsi">
                        <option value="" selected>Pilih</option>
                    </select>
            </div>
        </div>
        <div class="tindakan-pelanggaran">
            <h5>Tindakan Pelanggaran</h5>
            <a class="tindakan-btn" href="{{route('surat.detail')}}">
                <span class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 13H11V15C11 15.2652 11.1054 15.5196 11.2929 15.7071C11.4804 15.8946 11.7348 16 12 16C12.2652 16 12.5196 15.8946 12.7071 15.7071C12.8946 15.5196 13 15.2652 13 15V13H15C15.2652 13 15.5196 12.8946 15.7071 12.7071C15.8946 12.5196 16 12.2652 16 12C16 11.7348 15.8946 11.4804 15.7071 11.2929C15.5196 11.1054 15.2652 11 15 11H13V9C13 8.73478 12.8946 8.48043 12.7071 8.29289C12.5196 8.10536 12.2652 8 12 8C11.7348 8 11.4804 8.10536 11.2929 8.29289C11.1054 8.48043 11 8.73478 11 9V11H9C8.73478 11 8.48043 11.1054 8.29289 11.2929C8.10536 11.4804 8 11.7348 8 12C8 12.2652 8.10536 12.5196 8.29289 12.7071C8.48043 12.8946 8.73478 13 9 13ZM21 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2ZM20 20H4V4H20V20Z" fill="#FCFCFD"/>
                </svg>Tindakan Pelanggaran</span>
            </a>
        </div>
        <div class="inner-surat2">
            <div class="inner-tindakan">
                <h5>Tindakan Pelanggaran I</h5>
                <div class="input-container">
                    <input type="text" id="inputField" placeholder="Deskripsi" class="deskripsi">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M18 18.5L6 6.5M18 6.5L6 18.5" stroke="#B1202D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        <div class="inner-tindakan">
                <h5>Tindakan Pelanggaran I</h5>
                <div class="input-container">
                    <input type="text" id="inputField" placeholder="Deskripsi" class="deskripsi">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M18 18.5L6 6.5M18 6.5L6 18.5" stroke="#B1202D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
    </div>
        
    <div class="referensi">
        <h6>Refrensi Kebijakan (Opsional)</h6>
        <div class="file-input-container">
            <input type="text" class="file-name" placeholder="PDF" readonly>
            <label for="fileInput" class="upload-btn1">Unggah</label>
            <input type="file" id="fileInput" accept="image/png, image/jpeg" hidden>
        </div>
</div> 

<div class="referensi">
    <h6>Lampiran (Opsional)</h6>
    <div class="file-input-container">
        <input type="text" class="file-name" placeholder="PDF" readonly>
        <label for="fileInput" class="upload-btn2">Unggah</label>
        <input type="file" id="fileInput" accept="image/png, image/jpeg" hidden>
    </div>
</div> 
</div>

<div class="button" style="padding:0;">
    <button type="button" class="batal-modal" data-bs-dismiss="modal">Batal</button>
    <button type="button" class="submit-modal" data-bs-toggle="modal" data-bs-target="#konfirmasiModal">
    Submit
</button>
</div>
@include('landing.surat.modal.submit-modal')

@section('script')
<script>
    $(document).ready(function() {
            $('#nama').select2({
                width: '100%',
                placeholder: "Pilih"
            });
        });

        $(document).ready(function() {
            $('#karyawan').select2({
                width: '100%',
                placeholder: "Pilih"
            });
        });

        document.getElementById("fileInput").addEventListener("change", function(event) {
        let file = event.target.files[0];
        document.getElementById("fileName").textContent = file ? file.name : "PDF";
    });
</script>
@endsection