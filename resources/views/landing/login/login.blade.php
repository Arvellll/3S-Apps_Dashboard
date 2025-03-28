@extends('base.app')
@section('title','homepage')
@section('content')
<!-- <div class="login">
            <div class="component-login">
                <div class="left-login">
                    <div class="logo">
                        <img src="{{asset('svg/logo.svg')}}" alt="">
                    </div>
                    <div class="card-login">
                        <div class="title">
                        <h2>Selamat Datang</h2>
                        <p>Masukkan email dan kata sandi akun anda</p>
                        </div>
                        <form action="{{ route('dashboard') }}" method="get">
                            <div class="content-login">
                                <p>Email</p>
                                <div class="input">
                                <input type="text" class="form-control" id="email" Placeholder="Masukkan Email">
                                <img src="{{asset('svg/logo-email.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="content-login">
                                <p>Kata Sandi</p>
                                <div class="input">
                                <input type="text" class="form-control" id="email" Placeholder="Masukkan Email">
                                <img src="{{asset('svg/pass-logo.svg')}}" alt="">
                                </div>
                            </div>
                            <button class="btn-masuk" type="input">Masuk</button>
                        </form>
                    </div>
                </div>
            <div class="logo-bg">
                <img src="{{asset('svg/vektor-bg.svg')}}" alt="">
            </div>
            <div class="background">
            <img src="{{asset('svg/background.svg')}}" alt="">
            </div>
        </div>
</div> -->

<div class="login-container">
        <!-- Bagian Kiri (Form) -->
        <div class="left">
            <div class="logo">
            <img src="{{asset('svg/logo.svg')}}" alt="">
            </div>
            <form action="{{ route('dashboard') }}" method="get">
            <div class="judul">
                <h2>Selamat Datang</h2>
                <p>Masukkan email dan kata sandi akun Anda</p>
            </div>
                <div class="contentt">
                    <div class="content-login">
                        <h6>Email</h6>
                        <div class="input">
                        <input type="text" class="form-control" id="email" Placeholder="Masukkan Email">
                        <img src="{{asset('svg/logo-email.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="content-login">
                        <h6>Kata Sandi</h6>
                        <div class="input">
                        <input type="text" class="form-control" id="email" Placeholder="Masukkan Email">
                        <img src="{{asset('svg/pass-logo.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <button class="btn-masuk" type="input">Masuk</button>
            </form>
        </div>


        <div class="right">
            <img src="{{asset('svg/vektor-bg.svg')}}" alt="Illustrasi Login">
        </div>
    </div>