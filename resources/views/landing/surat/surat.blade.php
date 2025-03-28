@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="surat">
    <div class="title">
        <h1>Surat Peringatan</h1>
    </div>
    <div class="wrapper">
            <div class="inner">
                    <h2>Daftar Resign</h2>
                    <hr>
                    <div class="filter-search">
                        <div class="search-box" style="margin:0 !important;">
                        <i class="bi bi-search"></i>
                        <input type="search" class="form" placeholder="Cari">
                        </div>
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
        <table class="display" id="suratTable">
            <thead>
                <tr>
                    <th>Nomor Surat</th>
                    <th>Nama Karyawan</th>
                    <th>Jenis Surat</th>
                    <th>Tanggal Penerbitan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php    
                        $surat = [
                            ['nomor' => '001', 'nama' => 'Marvin McKinney', 'jenis' => 'SP2', 'tanggal' => '2024-10-15', 'status' => 'Draft'],
                            ['nomor' => '002', 'nama' => 'Albert Flores', 'jenis' => 'SP2', 'tanggal' => '2024-10-15', 'status' => 'Draft'],
                            ['nomor' => '003', 'nama' => 'Annette Black', 'jenis' => 'SP2', 'tanggal' => '2024-10-15', 'status' => 'Draft'],
                            ['nomor' => '004', 'nama' => 'Floyd Miles', 'jenis' => 'SP1', 'tanggal' => '2024-10-15', 'status' => 'Draft'],
                            ['nomor' => '005', 'nama' => 'Dianne Russell', 'jenis' => 'Peringatan Umum', 'tanggal' => '2024-10-15', 'status' => 'Draft'],
                            ['nomor' => '006', 'nama' => 'Ralph Edwards', 'jenis' => 'Peringatan Umum', 'tanggal' => '2024-10-15', 'status' => 'Done'],
                        ];
                    
                @endphp
                @foreach($surat as $item)
                <tr>
                    <td>{{ $item['nomor'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['jenis'] }}</td>
                    <td>{{ date('d F Y', strtotime($item['tanggal'])) }}</td>
                    <td>
                    <span class="{{ $item['status'] == 'Draft' ? 'status-draft' : 
           ($item['status'] == 'Published' ? 'status-published' : 'status-done') }}">
        {{ $item['status'] }}
    </span></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn" data-bs-toggle="dropdown">
                                <img src="{{ asset('svg/action_button.svg') }}" alt="">
                            </button>
                            <ul class="dropdown-menu" style="overflow:hidden">
                                <li><a class="dropdown-item" href="#">Detail</a></li>
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
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
@include('landing.surat.modal.filtersurat')
@section('script')
<script>
   $(document).ready(function() {
    $('#suratTable').DataTable(); 
});
</script>

@endsection