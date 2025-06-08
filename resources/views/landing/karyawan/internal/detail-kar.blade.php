@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="detail-internal">
    <div class="title">
        <h1>Karyawan / Internal <span>/ Detail Surat Peringatan</span></h1>
    </div>

    <div class="wrapper">
        <div class="contentt-wrapper">
            <h2>Informasi Karyawan</h2>
            <hr>

            <div class="contentt">
                <div class="isi">
                    <h5>Nama Karyawan</h5>
                    <p>Marvin McKinney</p>
                </div>
                <div class="isi">
                    <h5>Jenis Kelamin</h5>
                    <p>Laki - Laki</p>
                </div> 
            </div>
            <hr class="custom-dashed"> 
            <div class="contentt">
                <div class="isi">
                    <h5>Tanggal Lahir</h5>
                    <p>Tuban, 19 August Nomor Telephonep>
                </div>
                <div class="isi">
                    <h5>Nomor Telephone</h5>
                    <p>0857493953234</p>
                </div>
            </div>
            <hr class="custom-dashed"> 
            <div class="contentt">
                <div class="isi">
                    <h5>Email</h5>
                    <p>marvin@email.com</p>
                </div>
                <div class="isi">
                    <h5>Jabatan</h5>
                    <p>Finance Reqruitment</p>
                </div>
            </div>
            <hr class="custom-dashed"> 
                <div class="contentt2">
                    <h5>Tanggal Mulai Kerja</h5>
                    <p>22 October 2024</p>
                </div>
                <hr class="custom-dashed"> 
                <div class="contentt2">
                    <h5>Alamat Tempat Tinggal</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="inner3" >
            <h5>Daftar Surat Peringatan <span>5</span></h5>
            <hr>
                <div class="filter-search">
                        <input type="search" class="form-control" placeholder="Cari">
                    
                        <a href="" data-bs-toggle="modal" data-bs-target="#filterModal2" class="filter">
                            <p>Filter</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M2.5 5.83301H17.5" stroke="#117CC1" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M5 10H15" stroke="#117CC1" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M8.33334 14.167H11.6667" stroke="#117CC1" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </a>
                        <a class="surat-btn" href="{{route('surat.tambah')}}">
                            <span class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M9 13H11V15C11 15.2652 11.1054 15.5196 11.2929 15.7071C11.4804 15.8946 11.7348 16 12 16C12.2652 16 12.5196 15.8946 12.7071 15.7071C12.8946 15.5196 13 15.2652 13 15V13H15C15.2652 13 15.5196 12.8946 15.7071 12.7071C15.8946 12.5196 16 12.2652 16 12C16 11.7348 15.8946 11.4804 15.7071 11.2929C15.5196 11.1054 15.2652 11 15 11H13V9C13 8.73478 12.8946 8.48043 12.7071 8.29289C12.5196 8.10536 12.2652 8 12 8C11.7348 8 11.4804 8.10536 11.2929 8.29289C11.1054 8.48043 11 8.73478 11 9V11H9C8.73478 11 8.48043 11.1054 8.29289 11.2929C8.10536 11.4804 8 11.7348 8 12C8 12.2652 8.10536 12.5196 8.29289 12.7071C8.48043 12.8946 8.73478 13 9 13ZM21 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2ZM20 20H4V4H20V20Z" fill="#FCFCFD"/>
                            </svg>Surat Peringatan</span>
                        </a>
                        </div>
                <div class="tabel">
                <table id="suratTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nomor Surat</th>
                            <th>Jenis Surat</th>
                            <th>Tanggal Penerbitan</th>
                            <th>Deskripsi Pelanggaran</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $suratList = [
                                ['nomor' => '001', 'jenis' => 'SP2', 'tanggal' => '2024-10-18', 'deskripsi' => 'Telat datang ke kantor', 'status' => 'Draft'],
                                ['nomor' => '002', 'jenis' => 'SP1', 'tanggal' => '2024-10-18', 'deskripsi' => 'Telat datang ke kantor', 'status' => 'Draft'],
                                ['nomor' => '003', 'jenis' => 'Peringatan Umum', 'tanggal' => '2024-10-18', 'deskripsi' => 'Telat datang ke kantor', 'status' => 'Done'],
                                ['nomor' => '004', 'jenis' => 'Peringatan Etika', 'tanggal' => '2024-10-18', 'deskripsi' => 'Telat datang ke kantor', 'status' => 'Done'],
                                ['nomor' => '005', 'jenis' => 'Peringatan Umum', 'tanggal' => '2024-10-18', 'deskripsi' => 'Telat datang ke kantor', 'status' => 'Done'],
                            ];
                        @endphp

                        @foreach($suratList as $surat)
                        <tr>
                            <td>{{ $surat['nomor'] }}</td>
                            <td>{{ $surat['jenis'] }}</td>
                            <td>{{ date('d F Y', strtotime($surat['tanggal'])) }}</td>
                            <td>{{ $surat['deskripsi'] }}</td>
                            <td>
                                <span class="badge {{ $surat['status'] == 'Done' ? 'done' : 'draft' }}">
                                    {{ $surat['status'] }}
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button data-bs-toggle="dropdown">
                                        <img src="{{ asset('svg/action_button.svg') }}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Detail</a></li>
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#"  data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
        
    </div> 
</div>

@include('landing.surat.modal.filtersurat')
@section('script')
<script>
    $(document).ready(function() {
        $('#suratTable').DataTable();
    });
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