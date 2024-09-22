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
                    <h1 class="h3 mb-4 text-black-800 font-weight-bold text-gray-800">Hasil Routing Parameter</h1>
                    @if($param2 === null)
                    <!-- Hasil untuk 1 Parameter -->
                    <div class="col-xl-12 col-md-6 mb-4">
                         <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="d-flex font-weight-bold align-items-center justify-content-center text-gray-800">
                                    Hasil Routing dengan 1 Parameter
                                </div>
                                <hr class="sidebar-divider">
                                <div class="text-gray-800">
                                    <p><span class="font-weight-bold">URL:</span> <span>{{ url("/result-param/$param1") }}</span></p>
                                    <p><span class="font-weight-bold">Parameter:</span> <span>{{ $param1 }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <!-- Hasil untuk 2 Parameter -->
                    <div class="col-xl-12 col-md-6 mb-4">
                         <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="d-flex font-weight-bold align-items-center justify-content-center text-gray-800">
                                    Hasil Routing dengan 2 Parameter
                                </div>
                                <hr class="sidebar-divider">
                                <div class="text-gray-800">
                                    <p><span class="font-weight-bold">URL:</span> <span>{{ url("/result-param/$param1/$param2") }}</span></p>
                                    <p><span class="font-weight-bold">Parameter ke-1:</span> <span>{{ $param1 }}</span></p>
                                    <p><span class="font-weight-bold">Parameter ke-2:</span> <span>{{ $param2 }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="d-flex justify-content-between mb-4">
                        <a class="btn btn-success" href="{{ route('param') }}">
                            Previous Page
                        </a>
                        <a class="btn btn-primary" href="{{ route('dashboard') }}">
                            Back to Dashboard
                        </a>
                    </div>
                </div>
                <!-- End Page Content -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
</body>
</html>
