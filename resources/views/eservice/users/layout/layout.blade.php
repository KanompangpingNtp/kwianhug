<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="" />
    <title>@yield('title') | Dashboard </title>
    <link rel="icon" type="image/png" href="{{ asset('navbar/logo.png') }}">
    <link href="{{asset('dashboard/css/styles.css')}}" rel="stylesheet" />

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- font-awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

</head>

<body>

    <style>
        body {
            font-size: 13px;
            font-family: 'Bai Jamjuree', sans-serif;
        }
    </style>

    @if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{ $message }}',
        })
    </script>
    @endif

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#"> <i class="fa-solid fa-database me-3"></i>E Service</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!" title="Toggle sidebar">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    {{-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li> --}}
                    @auth
                    <!-- ถ้า login แล้ว ให้แสดงปุ่มออกจากระบบ -->
                    <li style="font-size: 14px;">
                        <form action="{{ route('logoutUserAccount') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                ออกจากระบบ <i class="fa-solid fa-right-from-bracket ms-5"></i>
                            </button>
                        </form>
                    </li>
                    @endauth

                    @guest
                    <!-- ถ้ายังไม่ได้ login ให้แสดงปุ่มเข้าสู่ระบบ -->
                    <li style="font-size: 14px;">
                        <a href="{{route('showLoginForm')}}" class="dropdown-item">
                            เข้าสู่ระบบ <i class="fa-solid fa-right-to-bracket ms-5"></i>
                        </a>
                    </li>
                    @endguest

                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    @auth
                    <div class="nav mb-5">
                        <div class="sb-sidenav-menu-heading" style="font-size: 10px;">สำนักปลัดเทศบาล</div>
                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#secretariat_office1" aria-expanded="false" aria-controls="secretariat_office1">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-clipboard"></i>
                            </div>
                            คำร้องทั่วไป
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="secretariat_office1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('GeneralRequestsFormPage')}}">ฟอร์ม</a>
                                <a class="nav-link" href="{{route('GeneralRequestsShowDetails')}}">ประวัติการส่งฟอร์ม</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#secretariat_office2" aria-expanded="false" aria-controls="secretariat_office2">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-clipboard"></i>
                            </div>
                            แบบคำขอลงทะเบียนรับเงินเบี้ยความพิการ
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="secretariat_office2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('DisabilityFormPage')}}">ฟอร์ม</a>
                                <a class="nav-link" href="{{route('TableDisabilityUsersPages')}}">ประวัติการส่งฟอร์ม</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#secretariat_office4" aria-expanded="false" aria-controls="secretariat_office4">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-clipboard"></i>
                            </div>
                            แบบยืนยันสิทธิการขอรับเงินเบี้ยยังชีพผู้สูงอายุ
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="secretariat_office4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('ElderlyAllowanceFormPage')}}">ฟอร์ม</a>
                                <a class="nav-link" href="{{route('ElderlyAllowanceShowDetails')}}">ประวัติการส่งฟอร์ม</a>
                            </nav>
                        </div>
                        
                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#funeral" aria-expanded="false" aria-controls="funeral">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-clipboard"></i>
                            </div>
                            แบบคำร้องขอเงินค่าจัดการศพผู้สูงอายุ
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="funeral" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('FuneralFormPage')}}">ฟอร์ม</a>
                                <a class="nav-link" href="{{route('FuneralShowDetails')}}">ประวัติการส่งฟอร์ม</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#secretariat_office5" aria-expanded="false" aria-controls="secretariat_office5">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-clipboard"></i>
                            </div>
                            คำขออนุญาตกิจการอันตรายต่อสุขภาพ
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="secretariat_office5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('HealthHazardApplicationFormPage')}}">ฟอร์ม</a>
                                <a class="nav-link" href="{{route('HealthHazardApplicationShowDetails')}}">ประวัติการส่งฟอร์ม</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#secretariat_office6" aria-expanded="false" aria-controls="secretariat_office6">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-clipboard"></i>
                            </div>
                            คำร้องขอแจ้งจำหน่ายหรือสะสมอาหาร
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="secretariat_office6" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('FoodStorageLicenseFormPage')}}">ฟอร์ม</a>
                                <a class="nav-link" href="{{route('FoodStorageLicenseShowDetails')}}">ประวัติการส่งฟอร์ม</a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading" style="font-size: 10px;">กองคลัง</div>

                        <div class="sb-sidenav-menu-heading" style="font-size: 10px;">กองช่าง</div>
                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#digging" aria-expanded="false" aria-controls="digging">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-clipboard"></i>
                            </div>
                            แบบฟอร์มการขออนุญาตขุดดินหรือถมดิน
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="digging" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('DiggingFormPage')}}">ฟอร์ม</a>
                                <a class="nav-link" href="{{route('DiggingShowDetails')}}">ประวัติการส่งฟอร์ม</a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading" style="font-size: 10px;">กองการศึกษา</div>
                    </div>
                    @endauth
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-4 mb-4">
                    @yield('content')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; บริษัท So Smart Solution สงวนสิทธิ์ 2025</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('dashboard/js/scripts.js')}}"></script>
</body>

</html>