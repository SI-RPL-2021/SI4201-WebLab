<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/fe18d29869.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        #body-row {
            margin-left:0;
            margin-right:0;
        }
        #sidebar-container {
            min-height: 100vh;   
            background-color: #333;
            padding: 0;
        }

        .sidebar-expanded {
            width: 230px;
        }
        .sidebar-collapsed {
            width: 60px;
        }

        #sidebar-container .list-group a {
            height: 50px;
            color: white;
        }

        #sidebar-container .list-group .sidebar-submenu a {
            height: 45px;
            padding-left: 30px;
        }
        .sidebar-submenu {
            font-size: 0.9rem;
        }

        .sidebar-separator-title {
            background-color: #333;
            height: 35px;
        }
        .sidebar-separator {
            background-color: #333;
            height: 25px;
        }
        .logo-separator {
            background-color: #333;    
            height: 60px;
        }

        #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
        
        display: inline;
        text-align: right;
        padding-left: 10px;
        }

        #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
        
        display: inline;
        text-align: right;
        padding-left: 10px;
        }
    </style>
</head>
<body>
    
    {{-- sidebar --}}
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <span class="menu-collapsed">WebLab</span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- Do Not Delete --}}
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown d-sm-block d-md-none">
                    <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <a class="dropdown-item" href="#">Profile</a>
                    </div>
                </li>
            </ul>
        </div>
        {{-- End of Do Not Delete --}}
        <div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Selamat Datang, {{Auth::user()->nama}}<font style="color:white"></font>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="editprofile">Profile</a>
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="return confirm('Apakah anda ingin keluar?');">LogOut</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title d-flex align-items-center menu-collapsed">
                    <small style="color: white"><b>MAIN MENU</b></small>
                </li>
                
                {{-- Menampilkan Waktu dan Tanggal --}}
                <script type="text/javascript">
                    window.setTimeout("waktu()",1000);
                    function waktu() {
                        var jam = new Date();
                        setTimeout("waktu()",1000);
                        document.getElementById("jam").innerHTML = jam.getHours();
                        document.getElementById("menit").innerHTML = jam.getMinutes();
                        document.getElementById("detik").innerHTML = jam.getSeconds();
                    }
                </script>
                <li class="list-group-item list-group-item-action bg-dark text-white" onLoad="waktu()">
                    @php
                        date_default_timezone_set('Asia/Jakarta');
                        echo '<b>';
                        echo '<label>';
                        echo 'Tanggal : <br>';
                        echo date('D, d M Y');
                        echo '</label>';
                        echo '</b><br>';

                        echo '<b>';
                        echo 'Waktu : <br>';
                        echo '<span id="jam"></span>';
                        echo ':';
                        echo '<span id="menit"></span>';
                        echo ':';
                        echo '<span id="detik"></span>';
                        echo '</b>';
                    @endphp
                </li>
                {{-- end of menampilkan waktu dan tanggal --}}

                {{-- menu 1 --}}
                <a href="home" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"><i class="fa fa-dashboard mr-3"></i> Beranda</span>
                </a>
                {{-- end of menu 1 --}}
                {{-- menu 2 --}}
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start" @if ((Auth::user()->akses) == 'non_admin') {{'hidden'}}@endif>
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Menu Admin</span>
                        <span class="submenu-icon ml-auto"><i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div id='submenu2' class="collapse sidebar-submenu">
                    <a href="cek_aprovalRapat" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Cek Aproval Rapat</span>
                    </a>
                    <a href="cek_aprovalPelatihan" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Cek Aproval Pelatihan</span>
                    </a>
                    <a href="tempanggota" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Approval Anggota</span>
                    </a>
                    <a href="akunanggota" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Daftar Akun Anggota</span>
                    </a>
                    <a href="notifikasiKegiatan" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Notifikasi Kegiatan</span>
                    </a>
                </div>
                {{-- end of menu 2 --}}
                {{-- menu 3 --}}
                <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start" 
                <?php if ((Auth::user()->divisi) != 'Sekretaris') { echo 'hidden'; }
                if ((Auth::user()->akses == 'admin')) { echo 'visible'; } ?>>
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Menu Sekretaris</span>
                        <span class="submenu-icon ml-auto"><i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div id='submenu3' class="collapse sidebar-submenu">
                    <a href="rapat" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Membuat Rapat</span>
                    </a>
                    <a href="readRapat" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Notifikasi Rapat</span>
                    </a>
                    <a href="dokumentasiValidasi" class="list-group-item list-group-item-action bg-dark text-white" style="height: fit-content">
                        <span class="menu-collapsed">Dokumentasi dan Validasi Kegiatan</span>
                    </a>
                    <a href="daftarDokumentasi" class="list-group-item list-group-item-action bg-dark text-white" style="height: fit-content">
                        <span class="menu-collapsed">Daftar Foto Dokumentasi</span>
                    </a>
                </div>
                {{-- end of menu 3 --}}
                {{-- menu 4 --}}
                <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start" 
                <?php if ((Auth::user()->divisi) != 'Trainer') { echo 'hidden'; }
                if ((Auth::user()->akses == 'admin')) { echo 'visible'; } ?>>
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Menu Trainer</span>
                        <span class="submenu-icon ml-auto"><i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div id='submenu4' class="collapse sidebar-submenu">
                    <a href="pelatihan" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Membuat Pelatihan</span>
                    </a>
                    <a href="readPelatihan" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Notifikasi Pelatihan</span>
                    </a>
                </div>
                {{-- end of menu 4 --}}
                {{-- menu 5 --}}
                <a href="#submenu5" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Menu Anggota</span>
                        <span class="submenu-icon ml-auto"><i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div id='submenu5' class="collapse sidebar-submenu">
                    <a href="#submenu5a" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-dashboard fa-fw mr-3"></span>
                            <span class="menu-collapsed">Rapat</span>
                            <span class="submenu-icon ml-auto"><i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div id='submenu5a' class="collapse sidebar-submenu">
                        <a href="notifrapat" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Notifikasi Rapat</span>
                        </a>
                        <a href="absenrapat" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Absensi Rapat</span>
                        </a>
                    </div>
                    <a href="#submenu5b" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-dashboard fa-fw mr-3"></span>
                            <span class="menu-collapsed">Pelatihan</span>
                            <span class="submenu-icon ml-auto"><i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div id='submenu5b' class="collapse sidebar-submenu">
                        <a href="notifpelatihan" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Notifikasi Pelatihan</span>
                        </a>
                        <a href="absenpelatihan" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Absensi Pelatihan</span>
                        </a>
                    </div>
                </div>
                {{-- end of menu 5 --}}
            </ul>
        </div>
    {{-- end of sidebar --}}

    {{-- content --}}
    <div class="container col ml-2 mt-1">
        <div class="mb-3 text-muted">
            <label>Laman : @yield('title')</label>
        </div>
        {{-- Isi dari konten akan ditampilkan disini --}}
        @yield('konten')
    </div>
    {{-- end of content --}}

    {{-- footer --}}
    <footer class="page-footer font-small blue bg-primary" style="width: 100%;">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">?? 2020 Copyright:
            <a href="#" style="color: black"> TelkomUniversity</a>
        </div>
    </footer>
    {{-- end of footer --}}
</body>
</html>