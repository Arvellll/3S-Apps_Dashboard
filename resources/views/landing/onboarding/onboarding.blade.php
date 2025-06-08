@extends('base.app')
@section('title', 'On Boarding')
@section('content')
@include('landing.components.sidebar')

<div class="onboarding">
<div class="title">
            <h1>On Boarding</h1>
        </div>
        <div class="wrapper">
    <div class="inner">
            <h2>Daftar On Boarding</h2>
            <hr>
            <div class="filter-search">
                <div class="search-box" style="margin:0 !important;">
                <i class="bi bi-search"></i>
                <input type="search" class="form" placeholder="Cari">
                </div>
                        <a href="" class="filter" data-bs-toggle="modal" data-bs-target="#filterModal">
                            <p>Filter</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M2.5 5.83301H17.5" stroke="#117CC1" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M5 10H15" stroke="#117CC1" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M8.33334 14.167H11.6667" stroke="#117CC1" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </a>
                        </div>

    <div class="tabel">
        <table class="display" id="onboardingTable">
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
                        ['name' => 'Albert Flores', 'date' => '15 Oktober 2024', 'email' => 'Albert@email.com', 'phone' => '085749935234', 'status' => 'Need Approve'],
                        ['name' => 'Annette Black', 'date' => '15 Oktober 2024', 'email' => 'Annette@email.com', 'phone' => '085749935234', 'status' => 'Need Approve'],
                        ['name' => 'Dianne Russell', 'date' => '15 Oktober 2024', 'email' => 'Dianne@email.com', 'phone' => '085749935234', 'status' => 'Rejected'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Approved'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Approved'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Approved'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Approved'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Approved'],
                        ['name' => 'Devon Lane', 'date' => '15 Oktober 2024', 'email' => 'Devon@email.com', 'phone' => '085749935234', 'status' => 'Approved']
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
                            <button id="onboardingBtn" data-bs-toggle="dropdown">
                                <img src="{{ asset('svg/action_button.svg') }}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item detail-btn" href="#" data-status="{{ $employee['status'] }}">Detail</a></li>
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
    $(document).ready(function () {
        $('#onboardingTable').DataTable();
    });

    document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".detail-btn").forEach(button => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            
            let status = this.getAttribute("data-status").toLowerCase(); // Konversi ke huruf kecil
            
            // Tutup modal yang sedang terbuka (jika ada)
            let openModal = document.querySelector(".modal.show");
            if (openModal) {
                let modalInstance = bootstrap.Modal.getInstance(openModal);
                modalInstance.hide();
            }

            // Tentukan modal yang akan ditampilkan berdasarkan status
            let modalId = "";
            if (status === "pending") {
                modalId = "#detailPending";
            } else if (status === "approved") {
                modalId = "#detailApproved";
            } else if (status === "need approve") {
                modalId = "#detailNeedApprove";
            } else if (status === "rejected") {
                modalId = "#Rejected";
            }

            // Tampilkan modal jika ID valid
            if (modalId) {
                let modal = new bootstrap.Modal(document.querySelector(modalId));
                modal.show();
            }
        });
    });
});

</script>
@include('landing.onboarding.modal.filter')
@include('landing.onboarding.modal.detail-pending')
@include('landing.onboarding.modal.detail-approve')
@include('landing.onboarding.modal.detail-need')
@include('landing.onboarding.modal.rejected')
@include('landing.onboarding.modal.detail-rejected')
@endsection