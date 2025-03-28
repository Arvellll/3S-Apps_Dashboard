@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="resign">
    <div class="title">
            <h1>Resign</h1>
        </div>
        <div class="wrapper">
            <div class="inner">
                    <h2>Daftar Resign</h2>
                    <hr>
                <div class="search">
                <div class="search-box" style="margin:0 !important;">
                <i class="bi bi-search"></i>
                <input type="search" class="form" placeholder="Cari">
                </div>
                
                <div class="col" style="position: relative;">
                    <input type="date" class="form" id="tanggalPenerbitan">
                   
                </div>

                    <a id="paklaringBtn" class="paklaring-btn " href="{{route('resign.paklaring')}}">
                        <span class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M9 13H11V15C11 15.2652 11.1054 15.5196 11.2929 15.7071C11.4804 15.8946 11.7348 16 12 16C12.2652 16 12.5196 15.8946 12.7071 15.7071C12.8946 15.5196 13 15.2652 13 15V13H15C15.2652 13 15.5196 12.8946 15.7071 12.7071C15.8946 12.5196 16 12.2652 16 12C16 11.7348 15.8946 11.4804 15.7071 11.2929C15.5196 11.1054 15.2652 11 15 11H13V9C13 8.73478 12.8946 8.48043 12.7071 8.29289C12.5196 8.10536 12.2652 8 12 8C11.7348 8 11.4804 8.10536 11.2929 8.29289C11.1054 8.48043 11 8.73478 11 9V11H9C8.73478 11 8.48043 11.1054 8.29289 11.2929C8.10536 11.4804 8 11.7348 8 12C8 12.2652 8.10536 12.5196 8.29289 12.7071C8.48043 12.8946 8.73478 13 9 13ZM21 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2ZM20 20H4V4H20V20Z" fill="#FCFCFD"/>
                        </svg>Paklaring</span>
                    </a>
        </div>
        <div class="tabel">
        <table id="resignTable" class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Karyawan</th>
                    <th>Tanggal Penerbitan</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    @php
                        $employees = [
                            ['name' => 'Marvin McKinney', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Marvin@email.com'],
                            ['name' => 'Albert Flores', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Albert@email.com'],
                            ['name' => 'Annette Black', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Annette@email.com'],
                            ['name' => 'Floyd Miles', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Floyd@email.com'],
                            ['name' => 'Dianne Russell', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Dianne@email.com'],
                            ['name' => 'Ralph Edwards', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Ralph@email.com'],
                            ['name' => 'Kathryn Murphy', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Kathryn@email.com'],
                            ['name' => 'Devon Lane', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Devon@email.com'],
                            ['name' => 'Courtney Henry', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Courtney@email.com'],
                            ['name' => 'Arlene McCoy', 'date' => '2024-10-15', 'phone' => '0857493953234', 'email' => 'Arlene@email.com'],
                        ];
                    @endphp
                    
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee['name'] }}</td>
                        <td>{{ date('d F Y', strtotime($employee['date'])) }}</td>
                        <td>{{ $employee['phone'] }}</td>
                        <td>{{ $employee['email'] }}</td>
                        <td>
                        <div class="dropdown">
                            <button id="onboardingBtn" data-bs-toggle="dropdown">
                                <img src="{{ asset('svg/action_button.svg') }}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item detail-btn" >Detail</a></li>
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

@section('script')
<script>
    $(document).ready(function() {
            $('#resignTable').DataTable();
        });
        
        
            function openDatePicker() {
    document.getElementById('tanggalPenerbitan').showPicker();
}

</script>
@endsection