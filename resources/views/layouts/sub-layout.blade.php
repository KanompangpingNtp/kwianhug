<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="คำอธิบายเว็บไซต์">
    <title>@yield('title', 'เทศบาลตำบลเกวียนหัก')</title>
    <link rel="icon" type="image/png" href="{{ asset('navbar/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


    <style>
        @font-face {
            font-family: 'PROMPT';
            src: url('{{ asset('fonts/PROMPT-LIGHT.TTF') }}') format('truetype');
            font-weight: normal;
        }

        @font-face {
            font-family: 'PROMPT';
            src: url('{{ asset('fonts/PROMPT-SEMIBOLD.TTF') }}') format('truetype');
            font-weight: bold;
        }


        body {
            font-family: 'PROMPT', sans-serif;
            font-size: 20px;
        }

        .bg-nav {
            background-image: url('{{ asset('navbar/bg-navbar.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 10vh;
            padding-top: 1rem;
            padding-bottom: 0.1rem;
        }

        .text-title-nav {
            color: #ffffff;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
        }



        .button-pink {
            background-color: rgb(255, 157, 211);
            font-size: 25px;
            font-weight: bold;
            padding: 2px 20px;
            border: 0px solid black;
            border-radius: 10px;
            color: #ffffff;
            cursor: pointer;
            text-decoration: none;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* เพิ่มทรานสิชั่น */
        }

        .button-pink:hover {
            transform: scale(1.05);
            /* ขยายขนาด */
            box-shadow: 0 0 5px 3px rgba(255, 255, 255, 0.5);
            /* เรืองแสงสีขาว */
        }

        .button-blue {
            background: linear-gradient(to bottom, #ffff, #ffff);
            font-size: 16px;
            font-weight: bold;
            padding: 2px 20px;
            border: 0px solid black;
            border-radius: 20px;
            color: #000000;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* เพิ่มทรานสิชั่น */
        }

        .button-blue:hover {
            transform: scale(1.05);
            /* ขยายขนาด */
            box-shadow: 0 0 5px 3px rgba(255, 255, 255, 0.5);
            /* เรืองแสงสีขาว */
        }

        .button-img img {
            cursor: pointer;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .button-img img:hover {
            transform: scale(1.1);
            /* ขยายขนาดเมื่อ hover */
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.7));
            /* เพิ่มเงาสีขาว */
        }

        .logo {
            height: 8rem;
            filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.7));
        }

        .bg-black-opacity {
            background: linear-gradient(to bottom, rgba(29, 29, 29, 0.6), rgba(29, 29, 29, 0.6));
            padding: 5px 8px;
            border-radius: 20px;
        }

        .navbar .dropdown-toggle::after {
            display: none !important;
        }

        .dropdown-menu {
            background-color: #ffa319;
            border: 1px solid #fb6a48;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            margin: 0;
            font-size: 23px;
            transition: all 0.3s ease;
        }


        .dropdown-menu a {
            color: #fafafa;
            transition: all 0.3s ease;
        }

        .dropdown-menu a:hover {
            color: rgb(0, 0, 0);
            background-color: #fb6a48;
        }

        .navbar-nav .nav-item .nav-link {
            transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        }

        .navbar-nav .nav-item .nav-link img {
            width: 40px;
            height: 40px;
        }

        .navbar-nav .nav-item .nav-link:hover {
            transform: scale(1.05);
            /* ขยายขึ้น 10% */
            filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.9));
            /* เรืองแสงสีฟ้า */
        }

        .navbar-text {
            font-size: 14px;
            color: #ffffff;
            transition: all 0.3s ease-in-out;
        }

        .nav-link:hover .navbar-text {
            color: #000000;
        }

        @media (min-width: 1200px) {
            .navbar-text {
                font-size: 16px;
            }
        }

        .maintitle-text {
            font-size: 14px;
        }

        .subtitle-text {
            font-size: 12px;
            /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
        }

        @media (min-width: 640px) {
            .maintitle-text {
                font-size: 18px;
            }

            .subtitle-text {
                font-size: 16px;
                /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
            }

            .button-blue {
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .maintitle-text {
                font-size: 18px;
            }

            .subtitle-text {
                font-size: 16px;
                /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
            }

            .button-blue {
                font-size: 18px;
            }
        }

        @media (min-width: 1024px) {
            .maintitle-text {
                font-size: 20px;
            }

            .subtitle-text {
                font-size: 18px;
                /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
            }

            .button-blue {
                font-size: 20px;
            }
        }

        @media (min-width: 1280px) {
            .maintitle-text {
                font-size: 26px;
            }

            .subtitle-text {
                font-size: 24px;
                /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
            }

            .button-blue {
                font-size: 22px;
            }
        }

        /* สำหรับ scrollbar ทุกประเภท */
        ::-webkit-scrollbar {
            width: 5px;
            /* กำหนดความกว้างของ scrollbar */
            height: 12px;
            /* กำหนดความสูงของ scrollbar สำหรับแนวนอน */

        }

        /* ส่วนที่ใช้ควบคุมสีของ scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: #e3742a;
            /* สีของ scrollbar */
            border-radius: 10px;
            /* ทำให้ขอบ scrollbar เป็นมุมมน */
            transition: all 0.5s;
        }

        /* ส่วนที่เป็นพื้นหลังของ scrollbar */
        ::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #ffb367;
        }

        /* ส่วนของ scrollbar แนวนอน */
        ::-webkit-scrollbar-horizontal {
            height: 10px;
        }

        /* สำหรับ scrollbar เมื่อ hover */
        ::-webkit-scrollbar-thumb:hover {
            background-color: #0083f7;
            /* เปลี่ยนสีเมื่อ hover */
        }

        .flag-link {
            display: inline-block;
            margin: 2px;
            transition: filter 0.3s ease-in-out;
        }

        .flag-link:hover img {
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.8));
        }

        .bg-menu {
            background: linear-gradient(to right, #d2f26e, #95dc38);
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .goog-te-banner-frame {
            display: none !important;
        }

        .goog-te-gadget {
            font-size: 0;
        }

        .goog-te-gadget span {
            display: none;
        }

        .goog-te-gadget-simple {
            background: none;
            border: none;
        }

    </style>
</head>

<body>

    <!-- Content Section -->
    <header class="bg-nav d-flex">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="container d-flex flex-column flex-xxl-row justify-content-center justify-content-md-between align-items-center">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="{{ asset('navbar/logo.png') }}" alt="logo" class="logo d-none d-md-block" style="margin-right:-35px; z-index: 3;">
                    <div class="text-title-nav lh-1 text-center text-md-start py-2 px-5">
                        <span class="me-1 maintitle-text">เทศบาลตำบลเกวียนหัก <br> อำเภอขลุง จังหวัดจันทบุรี</span><br>
                        <span class="subtitle-text">Kwian Hug Subdistrict Municipality</span>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <div class="d-flex flex-column justify-content-start align-items-center mt-2 mt-md-0">
                        <div class="d-flex justify-content-end align-items-end gap-2">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="d-flex justify-content-evenly align-items-center gap-2 button-img my-1">
                                    <div class="d-flex justify-content-start align-items-end button-img gap-1">
                                        <img src="{{ asset('navbar/text-minus.png') }}" alt="text-minus">
                                        <img src="{{ asset('navbar/text-normal.png') }}" alt="text-normal">
                                        <img src="{{ asset('navbar/text-plus.png') }}" alt="text-plus">
                                    </div>

                                </div>
                                <a class="button-blue" href="{{route('Home')}}">
                                    เข้าสู่ระบบ</a>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center gap-1 button-img">
                                <img src="{{ asset('navbar/disability.png') }}" alt="btn-disability" width="40" height="40">
                                <a class="button-blue" href="#"> สมัครสมาชิก</a>
                            </div>

                            <a class="button-blue" href="{{route('contact')}}"> ติดต่อเรา</a>
                        </div>

                        <div class="bg-black-opacity d-flex justify-content-center align-items-center mt-2">
                            <div class="text-white d-none d-sm-block">
                                เปลี่ยนภาษา
                            </div>
                            {{-- <div id="google_translate_element"></div>

                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en', // ภาษาเริ่มต้นของเว็บไซต์
                                        includedLanguages: 'en,th,id,ms,vi,lo,my,kh,ph,sg', // ภาษาในอาเซียน
                                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                        , autoDisplay: false // ปิดการแสดงผลอัตโนมัติ
                                    }, 'google_translate_element');
                                }

                            </script> --}}
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                            </script>


                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/thailand.png') }}" alt="Thailand" width="23"></a>
                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/Brunei.png') }}" alt="Brunei" width="23"></a>
                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/Myanmar.png') }}" alt="Myanmar" width="23"></a>
                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/Laos.png') }}" alt="Laos" width="23"></a>
                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/Indonesia.png') }}" alt="Indonesia" width="23"></a>
                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/Malaysia.png') }}" alt="Malaysia" width="23"></a>
                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/Philippines.png') }}" alt="Philippines" width="23"></a>
                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/Cambodia.png') }}" alt="Cambodia" width="23"></a>
                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/Singapore.png') }}" alt="Singapore" width="23"></a>
                            <a href="#" class="flag-link"><img src="{{ asset('navbar/country/Vietnam.png') }}" alt="Vietnam" width="23"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" w-100">
                <nav class="navbar navbar-expand-lg pb-2 pt-3">
                    <div class="container">
                        <!-- ปุ่ม Toggle สำหรับหน้าจอเล็ก -->
                        <button class="navbar-toggler ms-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- เมนูทั้งหมด -->
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav w-100 d-flex flex-wrap justify-content-evenly fw-bold">
                                <!-- 0. หน้าแรก -->
                                <li class="nav-item dropdown d-none d-xl-block">
                                    <a class="nav-link d-flex flex-column align-items-center" href="{{ route('Home') }}" id="basicInfoDropdown">
                                        <img src="{{ asset('navbar/icon-menu/icon1.png') }}" alt="house" class="navbar-icon">
                                        <div class="navbar-text">หน้าแรก</div>
                                    </a>
                                </li>
                                <!-- 1. ข้อมูลพื้นฐาน -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-flex flex-column align-items-center " href="#" id="basicInfoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('navbar/icon-menu/icon2.png') }}" alt="house" class="navbar-icon">
                                        <div class="navbar-text ">ข้อมูลพื้นฐาน</div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="basicInfoDropdown">
                                        <li><a class="dropdown-item" href="{{ route('HistoryPage') }}">ประวัติความเป็นมา</a></li>
                                        <li><a class="dropdown-item" href="{{ route('GeneralInformationPage') }}">ข้อมูลสภาพทั่วไป</a></li>
                                        <li><a class="dropdown-item" href="{{ route('CommunityPage') }}">ข้อมูลชุมชน</a></li>
                                        <li><a class="dropdown-item" href="{{ route('CommunityProductsPage') }}">ผลิตภัณฑ์ชุมชน</a></li>
                                        <li><a class="dropdown-item" href="{{ route('ImportantPlacesPage') }}">สถานที่สำคัญ</a></li>
                                        <li><a class="dropdown-item" href="{{ route('LandscapeGalleryPage') }}">แกลอรี่ภาพถ่ายภูมิทัศน์</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- 2. บุคลากร -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="personnelDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('navbar/icon-menu/icon3.png') }}" alt="teamwork" class="navbar-icon">
                                        <div class="navbar-text">บุคลากร</div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="personnelDropdown">
                                        <li><a class="dropdown-item" href="{{route('Personnel_Chart')}}">โครงสร้างองค์กร</a>
                                        </li>
                                        @foreach ($personnelAgencies as $agency)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('AgencyShow', ['id' => $agency->id]) }}">
                                                {{ $agency->personnel_agency_name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <!-- 3. ผลการดำเนินงาน -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="performanceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('navbar/icon-menu/icon4.png') }}" alt="online survey" class="navbar-icon">
                                        <div class="navbar-text">ผลการดำเนินงาน</div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="performanceDropdown">
                                        @foreach ($PerfResultsMenu as $detail)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('PerformanceResultsSectionPages', ['id' => $detail->id]) }}">
                                                {{ $detail->type_name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="authorityDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('navbar/icon-menu/icon5.png') }}" alt="อำนาจหน้าที่" class="navbar-icon">
                                        <div class="navbar-text">อำนาจหน้าที่</div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="authorityDropdown">
                                        @foreach ($AuthorityMenu as $detail)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('AuthorityShowDetailsPages', ['id' => $detail->id]) }}">
                                                {{ $detail->type_name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="developmentPlanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('navbar/icon-menu/icon6.png') }}" alt="แผนพัฒนาท้องถิ่น" class="navbar-icon">
                                        <div class="navbar-text">แผนพัฒนาท้องถิ่น</div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="developmentPlanDropdown">
                                        @foreach ($OperationalPlanMenu as $detail)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('OperationalPlanSectionPages', ['id' => $detail->id]) }}">
                                                {{ $detail->type_name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="lawDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('navbar/icon-menu/icon7.png') }}" alt="กฏหมายและกฏระเบียบ" class="navbar-icon">
                                        <div class="navbar-text">กฏหมายและกฏระเบียบ</div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="lawDropdown">
                                        @foreach ($LawsRegsMenu as $detail)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('LawsAndRegulationsSectionPages', ['id' => $detail->id]) }}">
                                                {{ $detail->type_name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="citizenMenuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('navbar/icon-menu/icon8.png') }}" alt="เมนูสำหรับประชาชน" class="navbar-icon">
                                        <div class="navbar-text">เมนูสำหรับประชาชน</div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="citizenMenuDropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('ReceiveComplaintsForm') }}">รับเรื่องราวร้องทุกข์
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('SatisfactionForm') }}">รับแจ้งร้องเรียนทุจริตประพฤติมิชอบ</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">แบบสอบถามความพึงพอใจ </a></li>
                                        @foreach ($PublicMenus as $detail)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('MenuForPublicSectionPages', ['id' => $detail->id]) }}">
                                                {{ $detail->type_name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>

    @include('layouts.components.sub-header.sub-header')


    @yield('content')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
