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
                <!-- End of Header -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-black-800 font-weight-bold text-gray-800">Bilangan Prima,</h1>
                    <h1 class="h6 mb-2 text-gray-800" style="line-height: 1.2;">Pada halaman ini Anda dapat menentukan sifat sebuah bilangan dari 1 hingga N (N adalah banyak bilangan), apakah bilangan itu prima atau tidak.</h1>

                    <!-- Form Input -->
                    <div class='row mt-4 justify-content-center'>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="d-flex font-weight-bold align-items-center justify-content-center text-gray-800">
                                        MASUKKAN NILAI BILANGAN
                                    </div>
                                    <hr class="sidebar-divider">
                                    <form method="GET" action="{{ route('prima') }}">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" name="n" class="form-control bg-light border-0 small"
                                                placeholder="Masukkan nilai bilangan..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fas fa-sign-in-alt fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(isset($numberDetails) && count($numberDetails) > 0)
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hasil Pengecekan Bilangan Prima</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50%">Angka</th>
                                            <th class="text-center" style="width: 50%">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($numberDetails as $detail)
                                        <tr>
                                            <td>{{ $detail['number'] }}</td>
                                            <td>{{ $detail['type'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="d-flex justify-content-center mb-4">
                        <a class="btn btn-primary" href="{{ route('dashboard') }}">
                            Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
            @include('template.footer')
        </div>
    </div>
</body>

<script>
    // Hapus parameter query dari URL saat halaman di-refresh
    if (window.location.search) {
        window.history.replaceState({}, document.title, window.location.pathname);
    }
</script>

</html>
