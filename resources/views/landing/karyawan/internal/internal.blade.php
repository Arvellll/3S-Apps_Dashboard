@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="internal">
    <div class="title">
        <h1>Karyawan <span>/ Internal</span></h1>
    </div>
    <div class="wrapper">
        <div class="inner">
            <h2>Daftar Karyawan Internal</h2>
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
                </div>
        
        <div class="tabel">
        <table class="display" id="employeeTable">
            <thead>
                <tr>
                    <th>Nama Karyawan</th>
                    <th>Email</th>
                    <th>Nomor Telephone</th>
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
                                <li><a class="dropdown-item" href="{{route('karyawan.internal.detail')}}">Detail</a></li>
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