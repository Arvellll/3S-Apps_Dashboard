@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="karyawan">
    <div class="title">
        <h1>Karyawan <span>/ Internal</span></h1>
    </div>
    <div class="wrapper">
        <div class="inner">
            <h2>Daftar Karyawan Internal</h2>
            <hr>
            <div class="filter-search">
                <input type="search" class="form-control" placeholder="Cari">
                    
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

        </div>
    </div>
</div>

@endsection