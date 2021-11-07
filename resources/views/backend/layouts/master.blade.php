<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    @yield('css_plugins')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/dist/css/custom.css') }}">
    @yield('css_per_page')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('backend.layouts.includes.navbar')
        @include('backend.layouts.includes.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('backend.layouts.includes.control_sidebar')
        @include('backend.layouts.includes.footer')
    </div>
    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    @yield('script_center')
    <!-- SweetAlert2 -->
    <script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
    @yield('script')
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000
            });
            @if (session('message'))
                // <div class="m-1 p-2 font-medium text-sm text-green-600 bg-success text-center" style="width:300px">
                    // {{ session('message') }}
                    // </div>
                var type = "{{ Session::get('alert-type') }}"
                switch(type){
                case 'info':
                Toast.fire({
                icon: 'info',
                title: '{{ Session::get('message') }}'
                })
                break;
                case 'success':
                Toast.fire({
                icon: 'success',
                title: '{{ Session::get('message') }}'
                })
                break;
                case 'warning':
                Toast.fire({
                icon: 'warning',
                title: '{{ Session::get('message') }}'
                })
                break;
                case 'error':
                Toast.fire({
                icon: 'error',
                title: '{{ Session::get('message') }}'
                })
                break;
                case 'question':
                Toast.fire({
                icon: 'question',
                title: '{{ Session::get('message') }}'
                })
                break;
                }
            @endif
        });
    </script>
</body>

</html>
