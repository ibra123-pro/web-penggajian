<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT. Karl Wig Abadi</title>

    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link href="{{ asset('asset/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-0">
                    <img src="{{asset('asset/img/foto.png')}}" width="60">
                </div>
                <div class="sidebar-brand-text mx-2">PT. Karl Wig Abadi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
            </li>
            <li>
            @role('admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('user.index')}}">Data User</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jabatan.index')}}">Data Jabatan</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('karyawan.index')}}">Data Karyawan</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('paket.index')}}">Data Paket</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                    aria-expanded="true" aria-controls="collapsePages1">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Presensi</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jammasuk.create')}}">Presensi Masuk</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jamkeluar.create')}}">Presensi Keluar</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('kasbon.create')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengajuan Kasbon</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages2"
                    aria-expanded="true" aria-controls="collapsePages2">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data - Data</span></a>
                <div id="collapsePages2" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('datapresensi.index')}}">Data Presensi</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('costumer.index')}}">Data Costumer</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('pemasangan.index')}}">Data Pemasangan</a>                   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('kasbon.index')}}">Data Pengajuan Kasbon</a>                 
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('updatekasbon.index')}}">Data Update Kasbon</a>                    
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages3"
                    aria-expanded="true" aria-controls="collapsePages3">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data Rekap</span></a>
                <div id="collapsePages3" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('rekappresensi.index')}}">Rekap Presensi</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('rekappemasangan.index')}}">Rekap Pemasangan</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('rekapcostumer.index')}}">Rekap Costumer</a>                     
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('rekapkasbon.index')}}">Rekap Kasbon</a>
                    </div>
                </div>
            </li> 

            <li class="nav-item">
                <a class="nav-link" href="#"data-toggle="collapse" data-target="#collapsePages12"
                    aria-expanded="true" aria-controls="collapsePages12">
                <i class="fas fa-fw fa-archive"></i>
                <span>Data Penggajian</span>
                </a>
                <div id="collapsePages12" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('gajikotor.index')}}">Gaji Kotor</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('gajibersih.index')}}">Gaji Bersih</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('thp.index')}}">THP</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jurnal.index')}}">Jurnal</a>
                    </div>
                </div>
            </li>            
            @endrole
            </li>

            <li>
            @role('teknisi')
            <li class="nav-item">                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3"
                    aria-expanded="true" aria-controls="collapsePages3">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data - Data</span>
                </a>
                <div id="collapsePages3" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('costumer.index')}}">Data Costumer</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('pemasangan.index')}}">Data Pemasangan</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('pemasangan.create')}}">Input Pemasangan</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4"
                    aria-expanded="true" aria-controls="collapsePages4">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Presensi</span>
                </a>
                <div id="collapsePages4" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jammasuk.create')}}">Presensi Masuk</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jamkeluar.create')}}">Presensi Keluar</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('kasbon.create')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengajuan Kasbon</span></a>
            </li>          
            @endrole
            </li>

            <li>
            @role('sales')
            <li class="nav-item">
                <a class="nav-link" href="{{route('costumer.create')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Input Costumer</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages6"
                    aria-expanded="true" aria-controls="collapsePages6">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data - Data</span></a>
                <div id="collapsePages6" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('sales.index')}}">Data Paket</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('costumer.index')}}">Data Costumer</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('kasbon.create')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengajuan Kasbon</span></a>
            </li> 
            @endrole
            </li>

            <li>
            @role('karyawan')
            <li class="nav-item">                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages8"
                    aria-expanded="true" aria-controls="collapsePages8">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Presensi</span>
                </a>
                <div id="collapsePages8" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jammasuk.create')}}">Presensi Masuk</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jamkeluar.create')}}">Presensi Keluar</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('kasbon.create')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengajuan Kasbon</span></a>
            </li> 
            @endrole
            </li>

            <li>
            @role('dirut')
            <li class="nav-item">                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages19"
                    aria-expanded="true" aria-controls="collapsePages19">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Presensi</span>
                </a>
                <div id="collapsePages19" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jammasuk.create')}}">Presensi Masuk</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('jamkeluar.create')}}">Presensi Keluar</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('kasbon.create')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengajuan Kasbon</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('laporanpaket.index')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan Data Paket</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('laporanjabatan.index')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan Data Jabatan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('laporankaryawan.index')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan Data Karyawan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages16"
                    aria-expanded="true" aria-controls="collapsePages16">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Data Laporan Karyawan</span></a>
                <div id="collapsePages16" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporanpresensi.index')}}">Laporan Presensi</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporanpemasangan.index')}}">Laporan Pemasangan</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporancostumer.index')}}">Laporan Costumer</a>                        
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporanpengajuankasbon.index')}}">Laporan Kasbon</a>                 
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporanupdatekasbon.index')}}">Laporan Update Kasbon</a>
                    </div>
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages17"
                    aria-expanded="true" aria-controls="collapsePages17">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Laporan Data Rekap</span></a>
                <div id="collapsePages17" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporanrekappresensi.index')}}">Laporan Rekap Presensi</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporanrekappemasangan.index')}}">Laporan Rekap Pemasangan</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporanrekapcostumer.index')}}">Laporan Rekap Costumer</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporanrekapkasbon.index')}}">Laporan Rekap Kasbon</a>
                    </div>
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages18"
                    aria-expanded="true" aria-controls="collapsePages18">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Laporan Data Keuangan</span></a>
                <div id="collapsePages18" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporangajikotor.index')}}">Laporan Gaji Kotor</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporangajibersih.index')}}">Laporan Gaji Bersih</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('laporanthp.index')}}">Laporan THP</a>
                    </div>
                </div> 
            </li>
            @endrole
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <div class="input-group-append">
                                <h4>Web Penggajian PT. Karl Wig Abadi</h4>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{('storage/' .  Auth::user()->foto)}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('profile.index')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <!-- Page Heading -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Create By: Your Name<br>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar aplikasi ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" apabila ingin keluar aplikasi</div>
                <div class="modal-footer">
                  <a class="btn btn-primary" href="{{ route('logout') }}" 
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="asset/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="asset/vendor/chart.js/Chart.min.js"></script>
    <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="asset/js/demo/chart-area-demo.js"></script>
    <script src="asset/js/demo/chart-pie-demo.js"></script>
    <script src="asset/js/demo/datatables-demo.js"></script>
    
</body>

</html>