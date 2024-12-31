<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>{{ $title ?? 'Page Title' }} || Presensi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#ffffff">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font Family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor css -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    @livewireStyles
    @slot('css')
</head>

<body>

    <!-- START Wrapper -->
    <div class="app-wrapper">

        <!-- Topbar Start -->
        @include('components.layouts.header')
        <!-- Topbar End -->

        <!-- App Menu Start -->
        @include('components.layouts.navbar')
        <!-- App Menu End -->

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container-fluid" style="margin-top: -15px">

                <!-- ========== Page Title Start ========== -->
                @include('components.layouts.title')
                <!-- ========== Page Title End ========== -->

                <!-- ========== Page Content Start ========== -->
                {{ $slot }}
                <!-- ========== Page Content End ========== -->
            </div>
            <!-- End Container Fluid -->

            <!-- Footer Start -->
            <footer class="footer card mb-0 rounded-0 justify-content-center align-items-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> &copy; Taplox.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->


    </div>
    <!-- END Wrapper -->


    <!-- Vendor Javascript -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App Javascript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    <script>
        document.addEventListener('livewire:init', function () {
            Livewire.on('closeModal', () => {
                $('.modal').modal('hide');
            });
        });
    </script>
    @slot('js')
</body>

</html>