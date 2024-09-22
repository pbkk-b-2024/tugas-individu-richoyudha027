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
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-black-800 font-weight-bold text-gray-800">Routing Parameter,</h1>
                    <h1 class="h6 mb-2 text-gray-800" style="line-height: 1.2;">Pada halaman ini digunakan untuk melakukan testing routing parameter dengan 1 parameter dan 2 parameter.</h1>
                    
                    <div class='row mt-4 justify-content-center'>
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="d-flex font-weight-bold align-items-center justify-content-center text-gray-800">
                                        MASUKKAN PARAMETER
                                    </div>
                                    <hr class="sidebar-divider">
                                    <!-- Form untuk mengirimkan 2 parameter -->
                                    <form method="GET" id="form2" action="">
                                        <div class="container-fluid">
                                            <input type="text" id="param1-2" name="param1" class="form-control bg-light border-0 small mb-3" placeholder="Masukkan parameter pertama..."
                                                aria-label="Search" aria-describedby="basic-addon2" required>
                                            <input type="text" id="param2-2" name="param2" class="form-control bg-light border-0 small mb-3" placeholder="Masukkan parameter kedua..."
                                                aria-label="Search" aria-describedby="basic-addon2" required>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-danger d-flex align-items-center" type="button" onclick="submitForm2()">
                                                    <span class="font-weight-bold text-dark-800 mr-2">ENTER</span>
                                                    <i class="fas fa-sign-in-alt fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <a class="btn btn-primary" href="{{ route('dashboard') }}">
                            Back to Dashboard
                        </a>
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

    <!-- JavaScript untuk mengatur URL dinamis -->
    <script>
        function submitForm1() {
            const param1 = document.getElementById('param1').value;
            const url = `{{ url('/result-param') }}/${encodeURIComponent(param1)}`;
            window.location.href = url;
        }

        function submitForm2() {
            const param1 = document.getElementById('param1-2').value;
            const param2 = document.getElementById('param2-2').value;
            const url = `{{ url('/result-param') }}/${encodeURIComponent(param1)}/${encodeURIComponent(param2)}`;
            window.location.href = url;
        }
    </script>
</body>
</html>
