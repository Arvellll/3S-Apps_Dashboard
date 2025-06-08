@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="detail-eksternal">
    <div class="title">
        <h1>Karyawan / Eksternal <span>/ Detail Karyawan Eksternal</span></h1>
    </div>
    <div class="wrapper">
        <div class="inner1">
            <div class="card1">
                <h5>Informasi Karyawan</h5>
                <hr>
                <div class="card-inner">
                    <div class="card-inner-left">
                        <h6>Nama Karyawan</h6>
                        <p>Marvin McKinney</p>
                    </div>
                    <div class="card-inner-right">
                        <h6>Username</h6>
                        <p>Marvin123</p>
                    </div>
                </div>
                <hr class="custom-dashed ">
                <div class="card-inner">
                    <div class="card-inner-left">
                            <h6>Jenis Kelamin</h6>
                            <p>Laki - Laki</p>
                        </div>
                        <div class="card-inner-right">
                            <h6>Email</h6>
                            <p>marvin@email.com</p>
                        </div>
                </div>
                <hr class="custom-dashed ">
                <div class="card-inner">
                    <div class="card-inner-left">
                            <h6>Tanggal Lahir</h6>
                            <p>Tuban, 19 August 1998</p>
                        </div>
                        <div class="card-inner-right">
                            <h6>Nomor Telephone</h6>
                            <p>0857493953234</p>
                        </div>
                </div>
                <hr class="custom-dashed ">
                <div class="card-inner-alamat">
                    <h6>Alamat Tempat Tinggal</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="card1">
                <h5>Informasi Pekerjaan</h5>
                <hr>
                <div class="card-inner2">
                    <h6>Nama Perusahaan</h6>
                    <p>Company A</p>
                    
                </div>
                <hr class="custom-dashed">
                <div class="card-inner2">
                    <h6>Jabatan</h6>
                    <p>Staff</p>
                    
                </div>
                <hr class="custom-dashed">
                <div class="card-inner2">
                    <h6>Tanggal Mulai Kerja</h6>
                    <p>22 October 2024</p>
                    
                </div>
                <hr class="custom-dashed">
                <div class="card-inner2">
                    <h6>Alamat Perusahaan</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="inner2">
            <div class="card3">
                <div class="card-inner3">
                    <h5>On Boarding</h5>
                    <a href="">Go To Details <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M6.84171 4.40857C6.76361 4.48604 6.70161 4.5782 6.6593 4.67975C6.617 4.7813 6.59521 4.89022 6.59521 5.00023C6.59521 5.11024 6.617 5.21916 6.6593 5.32071C6.70161 5.42226 6.76361 5.51443 6.84171 5.5919L10.6584 9.40857C10.7365 9.48604 10.7985 9.5782 10.8408 9.67975C10.8831 9.7813 10.9049 9.89022 10.9049 10.0002C10.9049 10.1102 10.8831 10.2192 10.8408 10.3207C10.7985 10.4223 10.7365 10.5144 10.6584 10.5919L6.84171 14.4086C6.76361 14.486 6.70161 14.5782 6.6593 14.6798C6.617 14.7813 6.59521 14.8902 6.59521 15.0002C6.59521 15.1102 6.617 15.2192 6.6593 15.3207C6.70161 15.4223 6.76361 15.5144 6.84171 15.5919C6.99785 15.7471 7.20906 15.8342 7.42921 15.8342C7.64937 15.8342 7.86058 15.7471 8.01671 15.5919L11.8417 11.7669C12.3099 11.2981 12.5728 10.6627 12.5728 10.0002C12.5728 9.33773 12.3099 8.70232 11.8417 8.23357L8.01671 4.40857C7.86057 4.25336 7.64937 4.16624 7.42921 4.16624C7.20906 4.16624 6.99785 4.25336 6.84171 4.40857Z" fill="#117CC1"/>
                    </svg></a>   
                </div>
                
                <div class="card-inner4">
                    <hr>
                    <h6>Status</h6>
                    <p>Pending</p>
                </div>
            </div>
            <div class="card3">
            <div class="card-inner3">
                    <h5>Contract & PKWT</h5>
                    <a href="{{route('karyawan.eksternal.detail-contract')}}">Go To Details <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M6.84171 4.40857C6.76361 4.48604 6.70161 4.5782 6.6593 4.67975C6.617 4.7813 6.59521 4.89022 6.59521 5.00023C6.59521 5.11024 6.617 5.21916 6.6593 5.32071C6.70161 5.42226 6.76361 5.51443 6.84171 5.5919L10.6584 9.40857C10.7365 9.48604 10.7985 9.5782 10.8408 9.67975C10.8831 9.7813 10.9049 9.89022 10.9049 10.0002C10.9049 10.1102 10.8831 10.2192 10.8408 10.3207C10.7985 10.4223 10.7365 10.5144 10.6584 10.5919L6.84171 14.4086C6.76361 14.486 6.70161 14.5782 6.6593 14.6798C6.617 14.7813 6.59521 14.8902 6.59521 15.0002C6.59521 15.1102 6.617 15.2192 6.6593 15.3207C6.70161 15.4223 6.76361 15.5144 6.84171 15.5919C6.99785 15.7471 7.20906 15.8342 7.42921 15.8342C7.64937 15.8342 7.86058 15.7471 8.01671 15.5919L11.8417 11.7669C12.3099 11.2981 12.5728 10.6627 12.5728 10.0002C12.5728 9.33773 12.3099 8.70232 11.8417 8.23357L8.01671 4.40857C7.86057 4.25336 7.64937 4.16624 7.42921 4.16624C7.20906 4.16624 6.99785 4.25336 6.84171 4.40857Z" fill="#117CC1"/>
                    </svg></a>
                </div>
                <div class="card-inner4">
                    <hr>
                    <h6>Status</h6>
                    <p>Pending</p>
                </div>
            </div>
        </div>

        <div class="inner3" >
            <h5>Daftar Surat Peringatan <span>5</span></h5>
            <hr>
                <div class="filter-search">
                        <input type="search" class="form-control" placeholder="Cari">
                    
                        <a data-bs-toggle="modal" data-bs-target="#filterModal2" href="" class="filter">
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
                <table id="detailkarTable" class="table table-striped">
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
@include('landing.karyawan.eksternal.modal.hapus-karyawan-modal')
@include('landing.surat.modal.filtersurat')
@section('script')
<script>
    $(document).ready(function() {
        $('#detailkarTable').DataTable();
    });
</script>
@endsection