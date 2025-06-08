@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="pengaturan">
    <div class="title">
        <h1>Pengaturan</h1>
    </div>

    <div class="ttd">
    <p>Tanda Tangan HR</p>
        <div id="drop-area" class="drop-area">    
                <input type="file" id="file-input" class="d-none" accept="image/png, image/jpeg">
                <div id="preview-container">
                </div>
            </div>
        <!-- Ganti id fileInput menjadi file-input -->
<div class="file-input-container">
    <input type="text" class="file-name" placeholder="JPG / PNG" readonly>
    <label for="file-input" class="upload-btn5">Unggah</label>
    <input type="file" id="file-input" accept="image/png, image/jpeg" hidden>
</div>

    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const dropArea = document.getElementById("drop-area");
    const fileInput = document.getElementById("file-input");
    const previewContainer = document.getElementById("preview-container");
    const uploadBtn = document.getElementById("upload-btn");

    // Klik untuk memilih file
    dropArea.addEventListener("click", () => fileInput.click());

    // Menampilkan preview gambar
    fileInput.addEventListener("change", function () {
        showPreview(this.files[0]);
    });

    // Drag & Drop File
    dropArea.addEventListener("dragover", function (e) {
        e.preventDefault();
        dropArea.style.borderColor = "blue";
    });

    dropArea.addEventListener("dragleave", function () {
        dropArea.style.borderColor = "#ccc";
    });

    dropArea.addEventListener("drop", function (e) {
        e.preventDefault();
        dropArea.style.borderColor = "#ccc";
        let file = e.dataTransfer.files[0];
        fileInput.files = e.dataTransfer.files; // Simpan ke input file
        showPreview(file);
    });

    function showPreview(file) {
        if (file && (file.type === "image/png" || file.type === "image/jpeg")) {
            let reader = new FileReader();
            reader.onload = function (e) {
                previewContainer.innerHTML = `<img src="${e.target.result}" class="img-fluid">`;
            };
            reader.readAsDataURL(file);
        } else {
            alert("Hanya file JPG/PNG yang diperbolehkan.");
        }
    }

    // Tombol Unggah (Opsional)
    uploadBtn.addEventListener("click", function () {
        let file = fileInput.files[0];
        if (!file) {
            alert("Pilih atau unggah file terlebih dahulu!");
            return;
        }

        let formData = new FormData();
        formData.append("file", file);

        fetch("/upload", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => alert("File berhasil diunggah!"))
        .catch(error => alert("Gagal mengunggah file."));
    });
});
</script>

@endsection