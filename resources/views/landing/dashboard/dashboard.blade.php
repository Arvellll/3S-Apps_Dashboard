@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')
<div class="background">
<div class="dashboard">
    <h1 class="">My Dashboard</h1>
    <section class="jumlah">
                <div class="jumlahh">
                    <div class="jumlah-atas">
                        <div class="img-card"><img src="{{asset('svg/karyawan.svg')}}" alt=""></div>
                        <p>Total Karyawan <br><span>104</span></p>
                    </div>
                    <div class="jumlah-atas">
                    <div class="img-card"><img src="{{asset('svg/karyawan.svg')}}" alt=""></div>
                    <p>Karyawan Eksternal <br><span>104</span></p>
                    </div>
                    <div class="jumlah-atas">
                    <div class="img-card"><img src="{{asset('svg/karyawan.svg')}}" alt=""></div>
                    <p>Karyawan Internal <br><span>104</span></p>
                    </div>
                </div>
                <div class="jumlahh">
                    <div class="jumlah-bawah">
                    <div class="img-card"><img src="{{asset('svg/onboarding.svg')}}" alt=""></div>
                    <p>On Boarding <br><span>104</span></p>
                    </div>
                    <div class="jumlah-bawah">
                    <div class="img-card"><img src="{{asset('svg/contract.svg')}}" alt=""></div>
                    <p>Contract & PWKT <br><span>104</span></p>
                    </div>
                    <div class="jumlah-bawah">
                    <div class="img-card"><img src="{{asset('svg/resign.svg')}}" alt=""></div>
                    <p>Resign <br><span>104</span></p>
                    </div>
                    <div class="jumlah-bawah">
                    <div class="img-card"><img src="{{asset('svg/surat.svg')}}" alt=""></div>
                    <p>Surat Peringatan <br><span>104</span></p>
                    </div>
                </div>
    </section>
    <section class="chart-js">
    <!-- Container utama untuk menampung semua chart -->
<div class="chart-container">
    
    <!-- On Boarding Chart -->
    <div class="chart-box">
        <div class="title-chart">
            <h3>On Boarding</h3>
            <a href="{{route('onboarding.index')}}">Lihat Detail
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M7.17503 4.40845C7.09692 4.48591 7.03492 4.57808 6.99262 4.67963C6.95031 4.78118 6.92853 4.8901 6.92853 5.00011C6.92853 5.11012 6.95031 5.21904 6.99262 5.32059C7.03492 5.42214 7.09692 5.51431 7.17503 5.59178L10.9917 9.40845C11.0698 9.48591 11.1318 9.57808 11.1741 9.67963C11.2164 9.78118 11.2382 9.8901 11.2382 10.0001C11.2382 10.1101 11.2164 10.219 11.1741 10.3206C11.1318 10.4221 11.0698 10.5143 10.9917 10.5918L7.17503 14.4084C7.09692 14.4859 7.03492 14.5781 6.99262 14.6796C6.95031 14.7812 6.92853 14.8901 6.92853 15.0001C6.92853 15.1101 6.95031 15.219 6.99262 15.3206C7.03492 15.4221 7.09692 15.5143 7.17503 15.5918C7.33116 15.747 7.54237 15.8341 7.76252 15.8341C7.98268 15.8341 8.19389 15.747 8.35002 15.5918L12.175 11.7668C12.6432 11.298 12.9061 10.6626 12.9061 10.0001C12.9061 9.33761 12.6432 8.7022 12.175 8.23344L8.35002 4.40845C8.19389 4.25324 7.98268 4.16612 7.76252 4.16612C7.54237 4.16612 7.33116 4.25324 7.17503 4.40845Z" fill="#117CC1"/>
                </svg>
            </a>
        </div>
        <hr>
        <div class="inner-chart">
            <canvas id="onboardingChart"></canvas>
            <div class="chart-center">
                <span>200<br>Dokumen</span>
                </div>
                <div class="legend">
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #4DA8F7;"></span>
                        <p>Pending <strong>20</strong></p>
                    </div>
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #FFB74D;"></span>
                        <p>Need Approved <strong>40</strong></p>
                    </div>
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #E57373;"></span>
                        <p>Rejected <strong>40</strong></p>
                    </div>
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #81C784;"></span>
                        <p>Approved<strong>100</strong></p>
                    </div>
            </div>
        </div>
    </div>

    <!-- Contract & PKWT Chart -->
    <div class="chart-box">
        <div class="title-chart">
            <h3>Contract & PKWT</h3>
            <a href="{{route('karyawan.eksternal.detail-contract')}}">Lihat Detail<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M7.17503 4.40845C7.09692 4.48591 7.03492 4.57808 6.99262 4.67963C6.95031 4.78118 6.92853 4.8901 6.92853 5.00011C6.92853 5.11012 6.95031 5.21904 6.99262 5.32059C7.03492 5.42214 7.09692 5.51431 7.17503 5.59178L10.9917 9.40845C11.0698 9.48591 11.1318 9.57808 11.1741 9.67963C11.2164 9.78118 11.2382 9.8901 11.2382 10.0001C11.2382 10.1101 11.2164 10.219 11.1741 10.3206C11.1318 10.4221 11.0698 10.5143 10.9917 10.5918L7.17503 14.4084C7.09692 14.4859 7.03492 14.5781 6.99262 14.6796C6.95031 14.7812 6.92853 14.8901 6.92853 15.0001C6.92853 15.1101 6.95031 15.219 6.99262 15.3206C7.03492 15.4221 7.09692 15.5143 7.17503 15.5918C7.33116 15.747 7.54237 15.8341 7.76252 15.8341C7.98268 15.8341 8.19389 15.747 8.35002 15.5918L12.175 11.7668C12.6432 11.298 12.9061 10.6626 12.9061 10.0001C12.9061 9.33761 12.6432 8.7022 12.175 8.23344L8.35002 4.40845C8.19389 4.25324 7.98268 4.16612 7.76252 4.16612C7.54237 4.16612 7.33116 4.25324 7.17503 4.40845Z" fill="#117CC1"/>
                </svg></a>
        </div>
        <hr>
        <div class="inner-chart">
            <canvas id="contractChart"></canvas>
            <div class="chart-center">
                <span>200<br>Dokumen</span>
            </div>
            <div class="legend">
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #4DA8F7;"></span>
                        <p>Pending <strong>20</strong></p>
                    </div>
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #FFB74D;"></span>
                        <p>Need Approved <strong>40</strong></p>
                    </div>
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #E57373;"></span>
                        <p>Rejected <strong>40</strong></p>
                    </div>
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #81C784;"></span>
                        <p>Approved<strong>100</strong></p>
                    </div>
            </div>
        </div>
    </div>

    <!-- Surat Peringatan Chart -->
    <div class="chart-box">
        <div class="title-chart">
            <h3>Surat Peringatan</h3>
            <a href="{{route('surat.index')}}">Lihat Detail<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M7.17503 4.40845C7.09692 4.48591 7.03492 4.57808 6.99262 4.67963C6.95031 4.78118 6.92853 4.8901 6.92853 5.00011C6.92853 5.11012 6.95031 5.21904 6.99262 5.32059C7.03492 5.42214 7.09692 5.51431 7.17503 5.59178L10.9917 9.40845C11.0698 9.48591 11.1318 9.57808 11.1741 9.67963C11.2164 9.78118 11.2382 9.8901 11.2382 10.0001C11.2382 10.1101 11.2164 10.219 11.1741 10.3206C11.1318 10.4221 11.0698 10.5143 10.9917 10.5918L7.17503 14.4084C7.09692 14.4859 7.03492 14.5781 6.99262 14.6796C6.95031 14.7812 6.92853 14.8901 6.92853 15.0001C6.92853 15.1101 6.95031 15.219 6.99262 15.3206C7.03492 15.4221 7.09692 15.5143 7.17503 15.5918C7.33116 15.747 7.54237 15.8341 7.76252 15.8341C7.98268 15.8341 8.19389 15.747 8.35002 15.5918L12.175 11.7668C12.6432 11.298 12.9061 10.6626 12.9061 10.0001C12.9061 9.33761 12.6432 8.7022 12.175 8.23344L8.35002 4.40845C8.19389 4.25324 7.98268 4.16612 7.76252 4.16612C7.54237 4.16612 7.33116 4.25324 7.17503 4.40845Z" fill="#117CC1"/>
                </svg></a>
        </div>
        <hr>
        <div class="inner-chart">
            <canvas id="warningChart"></canvas>
            <div class="chart-center">
                <span>200<br>Dokumen</span>
            </div>
            <div class="legend">
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #4DA8F7;"></span>
                        <p>Pending <strong>20</strong></p>
                    </div>
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #FFB74D;"></span>
                        <p>Need Approved <strong>40</strong></p>
                    </div>
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #E57373;"></span>
                        <p>Rejected <strong>40</strong></p>
                    </div>
                    <div class="legend-item">
                        <span class="color-box" style="background-color: #81C784;"></span>
                        <p>Approved<strong>100</strong></p>
                    </div>
            </div>
        </div>
    </div>

</div>

</section>
    <section class="data"> 
    <div class="container">
        <div class="inner-container">
        <h3>Waiting List</h3>
            <ul class="nav" id="myTab" role="tablist">
                <div class="navtabs">
            <div class="nav1">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="approve-tab" data-bs-toggle="tab" data-bs-target="#approve" type="button">On Boarding Need Approve</button>
                </li>
            </div>
            <div class="nav1">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button">Contract Need Sign & Pending</button>
                </li>
                </div>
            </ul>
            <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="search" class="form" placeholder="Cari">
            </div>
        
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="approve">
                <table id="approveTable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Karyawan</th>
                            <th>Tanggal Unggah</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#detailNeedApprove" class="dropdown-item" href="#">Detail</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pending">
                <table id="pendingTable" class="display" style="width:100%">
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
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span class="badge status-pending">Pending</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#pendingModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span class="badge status-pending">Pending</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#pendingModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span class="badge status-pending">Pending</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#pendingModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span class="badge status-pending">Pending</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#pendingModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span class="badge status-pending">Pending</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#pendingModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span  class="badge status-need-sign">Need Sign</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#needsignModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span  class="badge status-need-sign">Need Sign</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#needsignModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span  class="badge status-need-sign">Need Sign</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#needsignModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span  class="badge status-need-sign">Need Sign</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#needsignModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marvin McKinney</td>
                            <td>15 Oktober 2024</td>
                            <td>Marvin@email.com</td>
                            <td>0857493653234</td>
                            <td><span  class="badge status-need-sign">Need Sign</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('svg/action_button.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="modal" data-bs-target="#needsignModal" class="dropdown-item" href="#">Detail</a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#unggahFileSign" class="dropdown-item" href="#">Unggah File Contract</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    </div>
    </section>
</div>

@include('landing.dashboard.modal.need-sign-modal')
@include('landing.dashboard.modal.pending-modal')
@include('landing.onboarding.modal.detail-need')
@include('landing.karyawan.eksternal.modal.unggah-file')
@section('script')


<script>
     $(document).ready(function() {
            $('#approveTable').DataTable();
            $('#pendingTable').DataTable();
        });
    
    document.addEventListener("DOMContentLoaded", function () {
        const chartData = [
            { id: "onboardingChart", label: "200\nDokumen", data: [20, 40, 40, 100], colors: ["#44A8D9", "#F5AA3D", "#E1685D", "#8FE373"] },
            { id: "contractChart", label: "200\nDokumen", data: [20, 40, 40, 100], colors: ["#44A8D9", "#44D9BC", "#F5AA3D", "#8FE373"] },
            { id: "warningChart", label: "200\nDokumen", data: [120, 80], colors: ["#44A8D9", "#8FE373"] }
        ];

        chartData.forEach(chart => {
            var ctx = document.getElementById(chart.id).getContext("2d");
            new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: [],
                    datasets: [{
                        data: chart.data,
                        backgroundColor: chart.colors,
                        borderWidth: 2, 
                        borderRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    cutout: "70%",
                    plugins: {
                        legend: { display: false }
                    }
                }
            });
        });
    });
    </script>



@endsection
