<div class="header">
    <div class="logo">
        <img src="{{asset('svg/logo.svg')}}" alt="">
    </div>
    <div class="profile">
    <div class="dropdown">
    <button class="btn-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('svg/profile.svg') }}" class="rounded-circle" width="40" height="40" alt="User">
        <div class="admin-profile">
            <div class="Nama">Admin HR</div>
            <div class="email">adminhr@email.com</div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M15.5914 6.84122C15.514 6.76312 15.4218 6.70112 15.3202 6.65882C15.2187 6.61651 15.1098 6.59473 14.9998 6.59473C14.8898 6.59473 14.7808 6.61651 14.6793 6.65882C14.5777 6.70112 14.4856 6.76312 14.4081 6.84122L10.5914 10.6579C10.514 10.736 10.4218 10.798 10.3202 10.8403C10.2187 10.8826 10.1098 10.9044 9.99977 10.9044C9.88976 10.9044 9.78083 10.8826 9.67929 10.8403C9.57774 10.798 9.48557 10.736 9.4081 10.6579L5.59143 6.84122C5.51396 6.76312 5.4218 6.70112 5.32025 6.65882C5.2187 6.61651 5.10978 6.59473 4.99977 6.59473C4.88976 6.59473 4.78083 6.61651 4.67928 6.65882C4.57774 6.70112 4.48557 6.76312 4.4081 6.84122C4.25289 6.99736 4.16577 7.20857 4.16577 7.42872C4.16577 7.64888 4.25289 7.86009 4.4081 8.01622L8.2331 11.8412C8.70185 12.3094 9.33726 12.5723 9.99977 12.5723C10.6623 12.5723 11.2977 12.3094 11.7664 11.8412L15.5914 8.01622C15.7466 7.86009 15.8338 7.64888 15.8338 7.42872C15.8338 7.20857 15.7466 6.99736 15.5914 6.84122Z" fill="#202A37"/>
</svg>
    </button>
    <ul class="dropdown-menu shadow">
        <li>
            <a data-bs-toggle="modal" data-bs-target="#keluarModal" class="dropdown-item d-flex align-items-center" href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M16.8 2H14.2C11 2 9 4 9 7.2V11.25H15.25C15.66 11.25 16 11.59 16 12C16 12.41 15.66 12.75 15.25 12.75H9V16.8C9 20 11 22 14.2 22H16.79C19.99 22 21.99 20 21.99 16.8V7.2C22 4 20 2 16.8 2Z" fill="#202A37"/>
            <path d="M4.56 11.25L6.63 9.18003C6.78 9.03003 6.85 8.84003 6.85 8.65003C6.85 8.46003 6.78 8.26003 6.63 8.12003C6.34 7.83003 5.86 7.83003 5.57 8.12003L2.22 11.47C1.93 11.76 1.93 12.24 2.22 12.53L5.57 15.88C5.86 16.17 6.34 16.17 6.63 15.88C6.92 15.59 6.92 15.11 6.63 14.82L4.56 12.75H9V11.25H4.56Z" fill="#202A37"/>
            </svg>Logout
            </a>
        </li>
    </ul>
</div>
    </div>
</div>

<div  class="sidebar">
    <div class="sidebar-inner">
        <a href="{{route('dashboard')}}" class="sidebar-link"><img  src="{{asset('svg/side-1.svg')}}" alt=""><img class="img-aktif" src="{{asset('svg/dashboard.svg')}}" alt=""> Dashboard</a>
        
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <a class="accordion-button collapsed {{ Route::is('karyawan*') ? 'collapsed' : '' }}" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseOne" 
                        aria-expanded="{{ Route::is('karyawan*') ? 'true' : 'false' }}" 
                        aria-controls="flush-collapseOne">
                        <img src="{{ asset('svg/side-2.svg') }}" alt="">
                        <img class="img-aktif" src="{{ asset('svg/karyawan.svg') }}" style="width:24px; height:24px;" alt="">
                        Karyawan
                    </a>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse {{ Route::is('karyawan*') ? 'show' : '' }}" 
                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <a href="{{ route('karyawan.eksternal.eksternal') }}" class="sidebar-link {{ Route::is('karyawan.eksternal*') ? 'active' : '' }}">Eksternal</a>
                    <a href="{{ route('karyawan.internal.internal') }}" class="sidebar-link {{ Route::is('karyawan.internal*') ? 'active' : '' }}">Internal</a>
                </div>
            </div>
        </div>
  
        <a href="{{route('onboarding.index')}}" class="sidebar-link {{ Route::is('onboarding*') ? 'active' : '' }}"><img src="{{asset('svg/side-3.svg')}}" alt=""><img class="img-aktif" src="{{asset('svg/onboarding.svg')}}" style="width:24px; height:24px;" alt="">On Boarding</a>
        <a href="{{route('contract')}}" class="sidebar-link {{ Route::is('contract*') ? 'active' : '' }} " ><img src="{{asset('svg/side-4.svg')}}" alt=""><img class="img-aktif" src="{{asset('svg/contract.svg')}}" style="width:19px; height:24px;" alt="">Contract & PKWT</a>
        <a href="{{route('resign.index')}}" class="sidebar-link {{ Route::is('resign*') ? 'active' : '' }} "><img src="{{asset('svg/side-5.svg')}}" alt=""><img class="img-aktif" src="{{asset('svg/resign.svg')}}" style="width:24px; height:24px;" alt="">Resign</a>
        <a href="{{route('surat.index')}}" class="sidebar-link {{ Route::is('surat*') ? 'active' : '' }} "><img src="{{asset('svg/side-6.svg')}}" alt=""><img class="img-aktif" src="{{asset('svg/surat.svg')}}" style="width:24px; height:24px;" alt="">Surat Peringatan</a>
        <a href="{{route('pengaturan')}}" class="sidebar-link "><img src="{{asset('svg/side-7.svg')}}" alt=""><img class="img-aktif" src="{{asset('svg/pengaturan.svg')}}" style="width:24px; height:24px;" alt="">Pengaturan</a>
        </div>
    </div>
@include('landing.dashboard.modal.keluar')
@section('script')
<script>
document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll(".sidebar-link");

    links.forEach(link => {
        link.addEventListener("click", function() {
            // Hapus class active dari semua link
            links.forEach(item => item.classList.remove("active"));

            // Tambahkan class active ke link yang diklik
            this.classList.add("active");
        });
    });

    // Saat halaman dimuat ulang, pastikan menu yang sesuai dengan URL aktif
    const currentUrl = window.location.href;
    links.forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add("active");
        }
    });
});
</script>



