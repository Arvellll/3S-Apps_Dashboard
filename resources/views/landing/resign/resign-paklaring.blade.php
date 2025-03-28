@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')
<div class="paklaring">
    <div class="title">
        <h1>Resign  <span>/ Tambah Paklaring</span></h1>
    </div>
        <div class="informasi-karyawan">
            <h5>Informasi Karyawan</h5>
            <hr style="margin-top: 0px;">

            <div class="nama-karyawan">
                <h6>Nama Karyawan</h6>
                <input type="text" value="Marvin McKinney" disabled>
                <hr class="custom-dashed">
            </div>
            <div class="wrapper-paklaring">
                <div class="wrapper-paklaring-inner">
                    <h6>Jenis Kelamin</h6>
                    <p>Laki-Laki</p>
                </div>
                
                <div class="wrapper-paklaring-inner">
                    <h6>Email</h6>
                    <p>marvin@email.com</p>
                </div>
            </div>
            <hr class="custom-dashed" style="margin-top: 0px;">
            <div class="wrapper-paklaring">
                <div class="wrapper-paklaring-inner">
                    <h6>Tanggal Lahir</h6>
                    <p>Tuban, 19 August 1998</p>
                </div>
                <div class="wrapper-paklaring-inner">
                    <h6>Nomor Telephone</h6>
                    <p>0857493953234</p>
                </div>
            </div>
            <hr class="custom-dashed" style="margin-top: 0px;">
            <div class="alamat">
                <h6>Alamat Tempat Tinggal</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="informasi-dokumen">
            <h5>Informasi Dokumen</h5>
            <hr style="margin-top: 0px;margin-bottom: 0px;">
            <div class="tanggal">
                <div class="tanggal-inner">
                    <h6>Tanggal Mulai Kerja</h6>
                    <input type="date">
                    
                </div>
                <div class="tanggal-inner">
                    <h6>Tanggal Berakhir Kerja</h6>
                    <input type="date">
                    
                </div>
            </div>
            <div class="wrapper-paklaring-inner">
                <h6>TTD HR</h6>
                <input type="text" class="file-name" placeholder="jpg/png" readonly>
                <label for="fileInput" class="upload-btn">Unggah</label>
                <input type="file" id="fileInput" accept="image/png, image/jpeg" hidden>
            </div>
            <div class="alasan">
                <h6>Alasan Resign</h6>
                <textarea id="alasanResign" class="form-control" placeholder="Alasan Resign"></textarea>
            </div>
            @include('landing.components.button-submit',[
                'btnText' => 'Submit',
                'modalTarget' => '#konfirmasiModal'
                ])
        </div>
        
</div>
@include('landing.resign.modal.submit-modal')
@endsection