@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="detail-surat">
    <div class="title">
        <h1>Karyawan / Eksternal <span>/ Detail Surat Peringatan</span></h1>
    </div>

    <div class="wrapper" style="margin-bottom:20px;">
        <div class="contentt-wrapper">
            <h2>Informasi Karyawan</h2>
            <hr>

            <div class="contentt">
                <div class="isi">
                    <h5>Nama Karyawan</h5>
                    <p>Marvin McKinney</p>
                </div>
                <div class="isi">
                    <h5>Status</h5>
                    <p>Done</p>
                </div> 
            </div>
            <hr class="custom-dashed"> 
            <div class="contentt">
                <div class="isi">
                    <h5>Tanggal Penerbitan</h5>
                    <p>19 August 2024</p>
                </div>
                <div class="isi">
                    <h5>Tanggal Pelanggaran</h5>
                    <p>19 August 2024</p>
                </div>
            </div>
            <hr class="custom-dashed"> 
            <div class="contentt">
                <div class="isi">
                    <h5>Jenis Surat</h5>
                    <p>SP2</p>
                </div>
                <div class="isi">
                    <h5>Referensi Kebijakan</h5>
                    <a href="">Policy 2024.pdf <img src="{{asset('svg/icon-pdf.svg')}}" alt=""></a>
                </div>
            </div>
            <hr class="custom-dashed"> 
                <div class="contentt2">
                    <h5>Deskripsi Pelanggaran</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <hr class="custom-dashed"> 
                <div class="contentt2">
                    <h5>Deskripsi Pelanggaran</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <hr class="custom-dashed"> 
                <div class="contentt2">
                    <h5>Deskripsi Pelanggaran</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <hr class="custom-dashed"> 
                <div class="contentt3">
                    <div class="ttd">
                    <h5>Tanda Tangan HRD</h5>
                    <img src="{{asset('svg/ttd.svg')}}" alt="">
                    </div>
                    <div class="ttd">
                    <h5>Tanda Tangan HRD</h5>
                    <img src="{{asset('svg/ttd.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="unduh">
            <button>Unduh</button>
        </div>
    </div> 
</div>


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