@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="tambah-karyawan">
    <div class="title">
        <h1>Karyawan / Eksternal <span>/ Tambah Karyawan</span></h1>
    </div>

    <div class="wrapper">
        <div class="inner">
            <h2>Informasi Karyawan</h2>
            <hr>

            <div class="inner1">
                <h5>Nama Karyawan</h5>
                <input type="text" disabled placeholder="Nama Karyawan">
            </div>
            <div class="inner2">
                <div class="email">
                    <h5>Email</h5>
                    <input type="text" disabled placeholder="Email">
                </div>
                <div class="nomor">
                    <h5>Nomor Telephone</h5>
                    <input type="text" placeholder="08xx-xxxx-xxxx" disabled>
                </div>
            </div>
            <div class="inner3">
                <div class="kelamin">
                    <h5>Jenis Kelamin</h5>
                    <select id="karyawan" class="opsi">
                    
                    <option class="select" value="" selected> Laki-laki</option>
                    <option class="select" value="" selected> Perempuan</option>
                    <option class="select" value="" selected disabled> Pilih</option>
                    </select>
                </div>
                <div class="tanggallahir">
                    <h5>Tanggal Lahir</h5>
                    <div class="input-logo">
                    <input type="date">
                    
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper2">
        <div class="inner-wrapper2">
            <h2>Informasi Pekerjaan</h2>
            <hr>

            <div class="inner1">
                <h5>Nama Perusahaan</h5>
                <input type="text" disabled placeholder="Nama Karyawan">
            </div>
            <div class="inner2">
                <div class="email">
                    <h5>Jabatan</h5>
                    <input type="text" disabled placeholder="Email">
                </div>
                <div class="tanggallahir">
                    <h5>Tanggal Mulai Kerja</h5>
                    <input type="date">
                </div> 
            </div>
            <div class="inner3">
                <h5>Alamat Perusahaan</h5>
                <textarea name="" id="">Alamat</textarea>
            </div>    
        </div>
    </div>
    @include('landing.components.button-submit',[
                'btnText' => 'Submit',
                'modalTarget' => '#konfirmasiEksternal'
                ])
</div>

@include('landing.karyawan.eksternal.modal.tambah-karyawan-modal')
@endsection
