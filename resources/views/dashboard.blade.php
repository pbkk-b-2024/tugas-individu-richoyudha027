<!DOCTYPE html>
<html lang="en">



<head>
    <title>PBKK APPS</title>
    @include('template.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Header -->
                 @include('template.header')
                <!-- Header -->

                <!-- Begin Page Content -->
                <div class="container-fluid" >
                    <h1 class="h6 mb-2 text-gray-800">Selamat Datang,</h1>
                    <h1 class="h3 mb-2 text-black-800 font-weight-bold text-gray-800" style="line-height: 1.2;">Richo Yudha Kurniawan</h1>
                    <div class='row mt-4'>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="d-flex font-weight-bold align-items-center justify-content-center  text-gray-800">
                                        PERTEMUAN KE-1
                                    </div>
                                    <hr class="sidebar-divider">
                                   
                                    <a class="nav-link" href="{{route('ganjil-genap')}}"
                                        aria-expanded="true" aria-controls="collapseTwo">
                                        <i class="fas fa-fw fa-book"></i>
                                        <span> Bilangan Ganjil Genap</span>
                                    </a>
                                    
                                    <a class="nav-link" href="{{route('prima')}}"
                                        aria-expanded="true" aria-controls="collapseUtilities">
                                        <i class="fas fa-fw fa-book"></i>
                                        <span>Bilangan Prima</span>
                                    </a>
                        
                                    <a class="nav-link" href="{{route('fibonacci')}}"
                                        aria-expanded="true" aria-controls="collapseUtilities">
                                        <i class="fas fa-fw fa-book"></i>
                                        <span>Bilangan Fibonacci</span>
                                    </a>
                                
                                    <a class="nav-link" href="{{route('param')}}"
                                        aria-expanded="true" aria-controls="collapseUtilities">
                                        <i class="fas fa-fw fa-book"></i>
                                        <span>Routing Parameter</span>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

</body>

</html>