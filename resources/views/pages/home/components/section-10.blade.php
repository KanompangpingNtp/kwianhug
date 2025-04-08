<head>
    <style>
        .bg-page10 {
            background-image: url('{{ asset('pages/home/section-10/bg-10.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 80vh;
            padding: 3rem 0rem 0rem 0rem;
        }

        .title-section10 {
            font-size: 25px;
            font-weight: bold;
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและล่าง */
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านซ้ายและบน */
                2px -2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและบน */
                -2px 2px 4px rgba(255, 255, 255, 0.5);
            /* เงาขอบด้านซ้ายและล่าง */
        }

        .border-right-gradient {
            border-right: 4px solid;
            border-image: linear-gradient(to top, #fb6849, #f38e2e) 1;
        }



        .bg-blue-section10 {
            background: linear-gradient(to bottom, #009dde, #00b4a4);
            border-top-right-radius: 100px;
            border-bottom-right-radius: 100px;
            z-index: 1;
            margin-top: -10px;
        }

        .bg-orange-section10 {
            background: linear-gradient(to bottom, #f77b39, #f77b39);
        }

        .bg-orange-section10 a {
            text-decoration: none;
            color: #000;
            transition: color 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .bg-orange-section10 a:hover {
            color: #ffffff;
            /* เปลี่ยนเป็นสีส้ม */
            transform: translateX(2px);
            /* ขยับไปทางขวาเล็กน้อย */
        }

        .semi-title-main {
            background-color: white;
            border-radius: 20px;
            font-weight: bold;
        }

        .bg-white-section10{
            background-color: #ffffff;
        }

        /* เมื่อขนาดหน้าจอเล็กกว่า lg (992px) ให้ซ่อนเส้นขอบขวา */
        @media (max-width: 991px) {
            .border-right-gradient {
                border-right: none;
                border-image: none;
            }

            .bg-blue-section10{
                border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;
                box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและล่าง */
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านซ้ายและบน */
                2px -2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและบน */
                -2px 2px 4px rgba(255, 255, 255, 0.5);
            /* เงาขอบด้านซ้ายและล่าง */
            }

            .bg-white-section10{
            background-color: #ffffff7c;
        }
        }

    </style>
</head>

<main class="d-flex bg-page10">
    <div class="d-flex flex-column justify-content-end align-items-center w-100">
        <div class="bg-white-section10 py-3 py-xl-0 pt-xl-2 w-100">
            <div class="container ">
                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
                    <div class="text-center lh-1">
                        <span class="fw-bold fs-3">จำนวนผู้เข้าชมเว็บไซต์</span> <br>
                        number of website visitors
                    </div>
                    <div class="text-center text-nowrap  px-5 border-right-gradient">
                        <span class="fs-2">1</span><br>
                        <span class="fw-bold">ขณะนี้</span>
                    </div>
                    <div class="text-center text-nowrap  px-5 border-right-gradient">
                        <span class="fs-2">1</span><br>
                        <span class="fw-bold">วันนี้</span>
                    </div>
                    <div class="text-center text-nowrap  px-5 border-right-gradient">
                        <span class="fs-2">1</span><br>
                        <span class="fw-bold">เดือนนี้</span>
                    </div>
                    <div class="text-center text-nowrap  px-5 border-right-gradient">
                        <span class="fs-2">1</span><br>
                        <span class="fw-bold">ปีนี้</span>
                    </div>
                    <div class="text-center text-nowrap px-5 ">
                        <span class="fs-2">1</span><br>
                        <span class="fw-bold">ทั้งหมด</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 bg-orange-section10">
            <div class="col-xl-5 bg-blue-section10 p-2">
                <div
                    class="container d-flex flex-column flex-lg-row justify-content-center justify-content-xl-end align-items-center gap-3">
                    <img src="{{ asset('navbar/logo-wink.gif') }}" alt="logo" style="width: 130px;">
                    <div class="lh-sm fs-6 fw-bold">
                        <span class="title-section10">เทศบาลตำบลเกวียนหัก</span><br>
                        Kwian Hug Subdistrict Municipality <br>
                        ที่อยู่ : 111 หมู่ 4 ตำบลเกวียนหัก อำเภอขลุง <br>
                        จังหวัดจันทบุรี 22110
                    </div>
                </div>

            </div>
            <div class="col-xl-7 bg-orange-section10 p-2 py-4">
                <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="semi-title-main px-2">
                            ช่องทางติดต่อ
                        </div>
                        <div class="lh-sm fs-6 mt-2">
                            เมล์ : kwianhug1@gmail.com <br>
                            เบอร์ติดต่อ : 039493194
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center ">
                        <div class="semi-title-main px-2 mb-2">
                            ตัวช่วยเพิ่มเติม
                        </div>
                        <div class="d-flex justify-content-center align-items-center gap-2 fs-6 ">
                            <a href="#">ตรวจสอบอีเมล์</a>
                            <a href="#">เว็บเพื่อนบ้าน</a>

                        </div>
                        <div class="d-flex justify-content-center align-items-center gap-2 fs-6">
                            <a href="#">เว็บมาสเตอร์</a>
                            <a href="{{route('showLoginForm')}}">สำหรับแอดมิน</a>

                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="semi-title-main px-2 mb-2">
                            ข้อมูลเว็บไซต์
                        </div>
                        <div class="d-flex justify-content-center align-items-center gap-2 fs-6">
                            <a href="#">หน้าแรก</a>
                            <a href="#">กระดานกระทู้</a>

                        </div>
                        <div class="d-flex justify-content-center align-items-center gap-2 fs-6">
                            <a href="#">ติดต่อ</a>
                            <a href="#">แผนผังเว็บไซต์</a>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="text-center fw-bold mt-2" style="font-size: 13px;">Copyright © บริษัท So Smart Solution สงวนสิทธิ์ 2025</div>
            </div>
        </div>
    </div>
</main>
