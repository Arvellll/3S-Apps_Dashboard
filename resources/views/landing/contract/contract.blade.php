@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="contract">
<div class="title">
            <h1>Contract & PKWT</h1>
        </div>
        <div class="wrapper">
            <div class="inner">
                    <h2>Daftar Contract & PKWT</h2>
                    <hr>
                <div class="search">
                <div class="search-box" style="margin:0 !important;">
                <i class="bi bi-search"></i>
                <input type="search" class="form" placeholder="Cari">
                </div>
                <a href="" data-bs-toggle="modal" data-bs-target="#filterModal" class="filter">
                            <p>Filter</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M2.5 5.83301H17.5" stroke="#117CC1" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M5 10H15" stroke="#117CC1" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M8.33334 14.167H11.6667" stroke="#117CC1" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </a>
            </div>
        <div class="tabel">
        <table class="display" id="contractTable">
            <thead>
                <tr>
                    <th>Nama Karyawan</th>
                    <th>Tanggal Unggah</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $employees = [
                        ['name' => 'Marvin McKinney', 'date' => '15 Oktober 2024', 'email' => 'Marvin@email.com', 'phone' => '085749935234', 'status' => 'Pending'],
                        ['name' => 'Albert Flores', 'date' => '15 Oktober 2024', 'email' => 'Albert@email.com', 'phone' => '085749935234', 'status' => 'Pending'],
                        ['name' => 'Annette Black', 'date' => '15 Oktober 2024', 'email' => 'Annette@email.com', 'phone' => '085749935234', 'status' => 'On Going'],
                        ['name' => 'Dianne Russell', 'date' => '15 Oktober 2024', 'email' => 'Dianne@email.com', 'phone' => '085749935234', 'status' => 'On Going'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'On Going'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Need Sign'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Need Sign'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Done'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Done'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Done']
                    ];
                @endphp
                
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee['name'] }}</td>
                    <td>{{ $employee['date'] }}</td>
                    <td>{{ $employee['email'] }}</td>
                    <td>{{ $employee['phone'] }}</td>
                    <td>
                        <span class="badge status-{{ strtolower(str_replace(' ', '-', $employee['status'])) }}">{{ $employee['status'] }}</span>
                    </td>
                    <td>
                    <div class="dropdown">
                            <button id="contractBtn" data-bs-toggle="dropdown">
                                <img src="{{ asset('svg/action_button.svg') }}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                                <li> <a data-bs-toggle="modal" data-bs-target="#" class="dropdown-item detail-btn" href="#" data-status="{{ $employee['status'] }}">Detail</a></li>
                                <li> <a data-bs-toggle="modal" data-bs-target="#unggahFileContract" class="dropdown-item unggah-btn" href="#" data-status="{{ $employee['status'] }}">Unggah File Contract</a></li>
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
<!-- Modal untuk Status Pending -->
<div class="modal fade" id="modal-pending" tabindex="-1" aria-labelledby="onboardingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Detail On Boarding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr style="margin:0;">
                <div class="modal-body">
                    <div class="inner-modal">
                        <div class="status-modal">
                            <h5>Status</h5>
                            <p>Pending</p>
                        </div>
                        <div class="status-modal">
                            <h5>File On Boarding</h5>
                            <p>-</p>
                        </div>
                   </div>
                   <hr class="custom-dashed">
                </div>
            </div>
        </div>
    </div>
<!-- Modal untuk Status On Going -->
<div class="modal fade" id="modal-on-going" tabindex="-1" aria-labelledby="modalLabelOnGoing" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelOnGoing">Detail - On Going</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="dalam">
                    <h5>Nama Karyawan</h5>
                    <p>Marvin McKinney</p>
                </div>
                <hr class="custom-dashed">
                <div class="dalam2">
                    <div class="dalam">
                        <h5>Status</h5>
                        <p>On Going</p>
                    </div>
                    <div class="dalam">
                    <a href="#" id="modalFile">On Boarding.pdf
                                <img src="{{ asset('svg/icon-pdf.svg') }}" alt="Download" width="15px">
                            </a>
                    </div>
                    
                </div>
                <hr class="custom-dashed">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-done" tabindex="-1" aria-labelledby="onboardingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Detail On Boarding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr>
                <div class="modal-body">
                    <div class="inner-modal">
                        <div class="status-modal">
                            <h5>Status</h5>
                            <p>Done</p>
                        </div>
                        <div class="status-modal">
                            <h5>File On Boarding</h5>
                            
                        </div>
                        
                   </div>
                   <hr class="custom-dashed">
                </div>
            </div>
        </div>
    </div>
<!-- Modal untuk Status Need Sign -->
<div class="modal fade" id="modal-need-sign" tabindex="-1" aria-labelledby="onboardingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Detail On Boarding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr>
                <div class="modal-body">
                    <div class="inner-modal">
                        <div class="status-modal">
                            <h5>Status</h5>
                            <p>Need Sign</p>
                        </div>
                        <div class="status-modal">
                            <h5>File On Boarding</h5>
                            <p>-</p>
                        </div>
                        
                   </div>
                   <hr class="custom-dashed">
                </div>
            </div>
        </div>
    </div>

@include('landing.contract.modal.unggahfile')
@include('landing.onboarding.modal.filter')
@section('script')
<script>
$(document).ready(function () {
    $('#contractTable').DataTable({
        responsive: true,
        lengthMenu: [5, 10, 25, 50, 100],
        pageLength: 10,
        ordering: true,
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data"
        }
    });

    // Event listener hanya untuk tombol "Detail"
    $('.dropdown-item.detail-btn').on('click', function () {
        var status = $(this).data('status').toLowerCase().replace(/\s+/g, '-'); // Format status
        var modalId = "#modal-" + status; // Buat ID modal berdasarkan status

        if ($(modalId).length) {
            $(modalId).modal('show'); // Tampilkan modal yang sesuai
        } else {
            alert("Modal untuk status '" + status + "' tidak ditemukan.");
        }
    });
});
$('.dropdown-item.upload-btn').on('click', function (event) {
    event.stopPropagation(); // Mencegah event klik merambat ke elemen lain
});


</script>

@endsection