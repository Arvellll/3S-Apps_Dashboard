@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="eksternal">
    <div class="title">
        <h1>Karyawan <span>/ Eksternal</span></h1>
    </div>
    <div class="wrapper">
         <!-- Filter Pencarian -->
        <div class="inner">
          <h2>Daftar Karyawan Eksternal</h2>
          <hr>  
         <div class="inner-search">
            
         <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="search" class="form" placeholder="Cari">
        </div>
            <div class="status">
                <button class="btn-status" type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Status
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M15.8334 7.5L10 13.3333L4.16669 7.5" stroke="#818489" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                </button>
                <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                    <li><a class="dropdown-item"data-value="Aktif">Aktif</a></li>
                    <li><a class="dropdown-item"data-value="Tidak Aktif">Tidak Aktif</a></li>
                </ul>
            </div>

            <a class="btn-eksternal" href="{{route('karyawan.eksternal.tambah')}}"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M9 13H11V15C11 15.2652 11.1054 15.5196 11.2929 15.7071C11.4804 15.8946 11.7348 16 12 16C12.2652 16 12.5196 15.8946 12.7071 15.7071C12.8946 15.5196 13 15.2652 13 15V13H15C15.2652 13 15.5196 12.8946 15.7071 12.7071C15.8946 12.5196 16 12.2652 16 12C16 11.7348 15.8946 11.4804 15.7071 11.2929C15.5196 11.1054 15.2652 11 15 11H13V9C13 8.73478 12.8946 8.48043 12.7071 8.29289C12.5196 8.10536 12.2652 8 12 8C11.7348 8 11.4804 8.10536 11.2929 8.29289C11.1054 8.48043 11 8.73478 11 9V11H9C8.73478 11 8.48043 11.1054 8.29289 11.2929C8.10536 11.4804 8 11.7348 8 12C8 12.2652 8.10536 12.5196 8.29289 12.7071C8.48043 12.8946 8.73478 13 9 13ZM21 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2ZM20 20H4V4H20V20Z" fill="#FCFCFD"/>
            </svg></span> Karyawan</a>
        </div>
        

        <div class="tabel">
        <table class="display" id="employeeTable">
            <thead>
                <tr>
                    <th>Nama Karyawan</th>
                    <th>Nomor Telephone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $employees = [
                        ['name' => 'Marvin McKinney', 'phone' => '085749935234', 'email' => 'Marvin@email.com', 'status' => 'Aktif'],
                        ['name' => 'Albert Flores', 'phone' => '085749935234', 'email' => 'Albert@email.com', 'status' => 'Aktif'],
                        ['name' => 'Annette Black', 'phone' => '085749935234', 'email' => 'Annette@email.com', 'status' => 'Aktif'],
                        ['name' => 'Floyd Miles', 'phone' => '085749935234', 'email' => 'Floyd@email.com', 'status' => 'Aktif'],
                        ['name' => 'Dianne Russell', 'phone' => '085749935234', 'email' => 'Dianne@email.com', 'status' => 'Aktif'],
                        ['name' => 'Ralph Edwards', 'phone' => '085749935234', 'email' => 'Ralph@email.com', 'status' => 'Tidak Aktif'],
                        ['name' => 'Kathryn Murphy', 'phone' => '085749935234', 'email' => 'Kathryn@email.com', 'status' => 'Tidak Aktif'],
                        ['name' => 'Devon Lane', 'phone' => '085749935234', 'email' => 'Devon@email.com', 'status' => 'Tidak Aktif'],
                        ['name' => 'Courtney Henry', 'phone' => '085749935234', 'email' => 'Courtney@email.com', 'status' => 'Tidak Aktif'],
                        ['name' => 'Arlene McCoy', 'phone' => '085749935234', 'email' => 'Arlene@email.com', 'status' => 'Tidak Aktif'],
                    ];
                @endphp
                
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee['name'] }}</td>
                    <td>{{ $employee['phone'] }}</td>
                    <td>{{ $employee['email'] }}</td>
                    <td>
                        <span class="badge {{ $employee['status'] == 'Aktif' ? 'aktif' : 'tidak-aktif' }}">
                            {{ $employee['status'] }}
                        </span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button data-bs-toggle="dropdown">
                            <img src="{{ asset('svg/action_button.svg') }}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item border-bottom border-1" href="{{route('karyawan.eksternal.detail')}}">Detail</a></li>
                                <li><a class="dropdown-item border-bottom border-1 " href="#">Edit</a></li>
                                <li><a class="dropdown-item border-bottom border-1" href="#" data-bs-toggle="modal" data-bs-target="#ubahStatusModal">Ubah Status</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</a></li>
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
@include('landing.karyawan.eksternal.modal.ubah-karyawan-modal')
@include('landing.karyawan.eksternal.modal.hapus-karyawan-modal')
@section('script')
<script>
    $(document).ready(function () {
        var table = $('#employeeTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "responsive": true,
            "lengthMenu": [10, 25, 50, 100],
            "language": {
                "search": "",
                "searchPlaceholder": "Cari..."
            }
        });

        // Custom Search
        $('#searchBox').on('keyup', function () {
            table.search(this.value).draw();
        });

        // Filter Status
        $('#statusFilter').on('change', function () {
            table.column(3).search(this.value).draw();
        });
    });
</script>
@endsection