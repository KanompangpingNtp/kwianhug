<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Dashboard </title>

    <!-- Bootstrap (จาก Gentelella) -->
    <link href="{{ asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome (จาก Gentelella) -->
    <link href="{{ asset('gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style (จาก Gentelella) -->
    <link href="{{ asset('gentelella/build/css/custom.min.css') }}" rel="stylesheet">

    {{-- font-awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>
    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        max-width: 100% !important;
        width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    body {
        font-family: 'Bai Jamjuree', sans-serif;
    }

</style>

<body class="nav-md">

    @if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: '{{ $message }}'
        , })

    </script>
    @endif

    <div class="container body">
        <div class="main_container">
            @include('admin.layouts.sidebar')
            @include('admin.layouts.topnav')

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- /page content -->

            @include('admin.layouts.footer')
        </div>
    </div>

    <script src="{{ asset('gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Bootstrap JS (จาก Gentelella) -->
    <script src="{{ asset('gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom Theme Scripts (จาก Gentelella) -->
    <script src="{{ asset('gentelella/build/js/custom.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
