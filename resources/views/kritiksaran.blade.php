<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Al Falah</title>

    <!-- Custom fonts for this template -->
    <link href="admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admin/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="admin/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-coklat sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                {{-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> --}}
                <div class="sidebar-brand-text mx-3">Al - Falah</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>


            <li class="nav-item">
                <a class="nav-link" href="/ulasanalumni">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Ulasan Alumni</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/kritiksaran">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kritik Saran</span></a>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" href="/gelombang">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Gelombang</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/kode">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kode</span></a>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider">

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


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kirik Saran</h1>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            {{-- <button  type="button" class="btn btn-coklat" data-toggle="modal" data-target="#ulasanAlumniModal">
                                Tambah Ulasan Alumni
                              </button>                             --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Kritik / Saran</th>
                                            <th>Balasan</th>
                                            <th>created_at</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($datakritiksaran as $item)
                                        
                                        <tr>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->kritiksaran}}</td>
                                            <td>{{$item->balasan}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <a style="margin-top: 2%" href="#modalEditKritikSaran{{$item->id}}" data-toggle="modal" class="btn btn-primary "><i class="fa fa-edit"></i>Edit</a>
                                                <a style="margin-top: 2%" href="#modalHapusBlog{{$item->id}}" data-toggle="modal" class="btn btn-danger "><i class="fa fa-trash"></i>Hapus</a>
                                            </td>

                                        </tr>


                                        @endforeach
                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button style="color: white" class="btn btn-primary">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="ulasanAlumniModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Blog</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
    
                <form action="{{ route('tambahulasanalumni') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                    </div>
    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukan Email">
                    </div>
    
                    <div class="form-group">
                      <label for="ulasan">Ulasan :</label>
                      <textarea class="form-control" id="ulasan" name="ulasan" rows="3" placeholder="Tulis ulasan Anda"></textarea>
                    </div>
    
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <input type="file" class="form-control" name="foto" placeholder="Masukan Foto Anda">
                  </div>
          
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-coklat">Save changes</button>
                    </div>
                </form>
    
            </div>
          </div>
        </div>
    </div>


    @foreach($datakritiksaran as $d)
    <div class="modal fade bd-example-modal-lg" id="modalEditKritikSaran{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Balas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('kritiksaranUpdate', ['id' => $d->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="balasan">Balasan</label>
                        <input type="text" class="form-control" value="{{$d->balasan}}" name="balasan" placeholder="Masukan Balasan">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-coklat">Save changes</button>
                    </div>
                </form>

            </div>
          </div>
        </div>
    </div>
    @endforeach

{{-- 


    @foreach($datablog as $d)
    <div class="modal fade bd-example-modal-lg" id="modalEditBlog{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Blog</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('blogUpdate', ['id' => $d->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" value="{{$d->judul}}" name="judul" placeholder="Masukan Judul">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" value="{{$d->deskripsi}}" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" value="{{ asset('storage/images/blog/'.$item->foto) }}" class="form-control" name="foto" placeholder="Masukan Foto">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-coklat">Save changes</button>
                    </div>
                </form>

            </div>
          </div>
        </div>
    </div>
    @endforeach

    @foreach($datablog as $g)
    <div class="modal fade bd-example-modal-lg" id="modalHapusBlog{{$g->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Blog</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('blogDelete', ['id' => $d->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" value="{{$g->id}}" name="id" required>

                    <div class="form-group">
                        <h4>Apakah Anda Ingin Menghapus Blog ini?</h4>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-coklat">Save changes</button>
                    </div>
                </form>

            </div>
          </div>
        </div>
    </div>
    @endforeach
 --}}

    <!-- Bootstrap core JavaScript-->
    <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/assets/js/demo/datatables-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.js"></script>

  <script>
    @if(session('success'))
        Swal.fire({
            title: "{!! session('success.title') !!}",
            text: "{!! session('success.message') !!}",
            icon: 'success',
            confirmButtonText: 'OK'
        });
    @endif
</script>

</body>

</html>