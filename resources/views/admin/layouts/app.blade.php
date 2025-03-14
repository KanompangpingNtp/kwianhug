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

</style>

<body class="nav-md">
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

    <!-- jQuery (จาก Gentelella) -->
    <script src="{{ asset('gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap JS (จาก Gentelella) -->
    <script src="{{ asset('gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom Theme Scripts (จาก Gentelella) -->
    <script src="{{ asset('gentelella/build/js/custom.min.js') }}"></script>
</body>
</html>
