<head>
    <style>
        .bg-page2 {
            background-image: url('{{ asset('pages/home/section-2/bg-2.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 2rem 0rem;
        }

        .title-section2 {
            font-size: 60px;
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


        .bg-btn-view-all-video {
            background: linear-gradient(to bottom, #fd664f, #eba152);
            border-radius: 20px;
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
            transition: background 0.3s, transform 0.3s;
            /* เพิ่ม transition สำหรับการเปลี่ยนแปลง */
        }

        .bg-btn-view-all-video:hover {
            background: linear-gradient(to bottom, #f45b3a, #d68938);
            /* สีพื้นหลังที่เปลี่ยนเมื่อ hover */
            transform: scale(1.05);
            /* ขยายขนาดปุ่มเล็กน้อย */
        }

        .bg-eservice {
            background: linear-gradient(to right, #58bbf9b6, #6cc1a8b0);
            border-radius: 20px;
            color: #000;
            text-decoration: none;

            box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและล่าง */
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านซ้ายและบน */
                2px -2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและบน */
                -2px 2px 4px rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
            /* เพิ่มการเปลี่ยนแปลงแบบนุ่มนวล */
        }

        .bg-eservice:hover {
            background: linear-gradient(to right, #2f9cbb, #4da88f);
            /* เปลี่ยนสีพื้นหลังเมื่อ hover */
            box-shadow:
                4px 4px 8px rgba(255, 255, 255, 0.7),
                /* ขยายเงา */
                -4px -4px 8px rgba(255, 255, 255, 0.7),
                4px -4px 8px rgba(255, 255, 255, 0.7),
                -4px 4px 8px rgba(255, 255, 255, 0.7);
            transform: scale(1.05);
            /* เพิ่มขนาดเล็กน้อยเมื่อ hover */
        }

        .bg-banner-section2 {
            position: relative;
            background: linear-gradient(to bottom, #00c5d8, #0073fe);
            border: 3px solid #f37a68;
            border-radius: 30px;
            text-decoration: none;
            font-size: 20px;
            transition: all 0.3s ease;
            /* เพิ่มการเปลี่ยนแปลงอย่างนุ่มนวล */
        }

        .bg-banner-section2:hover {
            background: linear-gradient(to bottom, #0073fe, #00c5d8);
            /* สลับสีพื้นหลัง */
            border-color: #ff7a5d;
            /* เปลี่ยนสีขอบเมื่อ hover */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            /* เพิ่มเงาเมื่อ hover */
            transform: scale(1.05);
            /* ขยายขนาดเล็กน้อยเมื่อ hover */
        }


        .img-banner {
            position: absolute;
            left: 34%;
            /* ปรับให้รูปภาพออกมาครึ่งหนึ่ง */
            top: 10%;
            transform: translateY(-50%);
            /* จัดตำแหน่งให้แนวตั้งกลาง */
            width: 80px;
            /* ปรับขนาดรูปภาพ */
            height: auto;
        }

        @media (max-width: 768px) {
            .img-banner {
                left: 50%;
                top: 15%;
                /* เปลี่ยนตำแหน่งแนวตั้ง */
                transform: translate(-50%, -50%);
                /* จัดตำแหน่งให้อยู่กลาง */
                width: 70px;
                /* ปรับขนาดให้เล็กลง */
            }
        }

        .bg-video-section2 {
            background: linear-gradient(to bottom, #fd664f, #eba152);
            border-radius: 20px;
            width: 100%;
            height: 370px;
        }


        .video-container {
            background: linear-gradient(to bottom, #fd664f, #eba152);
            border-radius: 20px;
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            /* อัตราส่วน 16:9 */
            height: 350px;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

    </style>
</head>

<main class="d-flex bg-page2">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="title-section2">
            วิดีทัศน์แนะนำ
        </div>
        <div class="row w-100 align-items-center justify-content-center">
            <div class="col-xl-3 col-lg-6 ">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('pages/home/section-1/3.png') }}" alt="personal">
                    <div class="text-center lh-sm mt-4">
                        <span class="fs-3 fw-bold">ตำแหน่ง</span><br>
                        <span class="fw-bold">ตำบลเกวียนหัก</span><br>
                        <span>ชื่อ-นามสกุล</span>
                        <a href="tel:9999999990" class="d-flex align-items-center text-white pe-2 mt-2" style="font-size:17px; background: linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0.4)); border-radius: 20px; text-decoration: none;">
                            <img src="{{ asset('pages/home/section-1/icon-phone.png') }}" alt="icon" style="margin-right: 5px; margin-left:-5px; margin-top:-15px;">
                            999-9999990
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mt-4 mt-lg-0">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="bg-video-section2 p-2 ">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/zBZhhrtTNH8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                        </div>

                    </div>

                    <a href="#" class="bg-btn-view-all-video py-2 px-5 mt-3">
                        <i class="fas fa-video text-dark"></i> VDO เพิ่มเติม
                    </a>
                    <a href="{{route('eservice_pages')}}" class="bg-eservice p-2 mt-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="fs-4 fw-bold p-2 " style="background: linear-gradient(to right, #fe574e,#fc883e, #a7c37e36); border-radius: 10px; white-space: nowrap; flex-grow: 1;">
                                เทศบาลตำบลเกวียนหัก
                            </div>
                            <div class="bg-dark fw-bold text-white fs-5 p-2" style="border-radius: 10px; white-space: nowrap;">
                                E-SERVICE
                            </div>
                        </div>
                        <div class="fs-5 lh-sm mt-1">
                            ใช้เทคโนโลยีมาปรับช่วยดูแลประชาชน
                            <div class="fs-6">
                                บริการยื่นคำร้องออนไลน์ได้ 24 ชั่วโมงเพื่อทุกท่านได้บริการที่สะดวก รวดเร็ว
                            </div>
                        </div>

                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 mt-5 mt-xl-0">
                <div class="row w-100">
                    <div class="col-xl-12 col-lg-4 col-md-6 col-12 mb-4">
                        <a href="https://www.admincourt.go.th/admincourt/site/09illustration.html" class="bg-banner-section2 p-2 d-flex flex-column justify-content-center align-items-center position-relative">
                            <img src="{{ asset('pages/home/section-2/1.png') }}" alt="icon-banner" class="img-banner">
                            <div class="lh-1 text-center text-black" style="text-shadow:
            3px 3px 5px rgba(255, 255, 255, 0.7),
            -3px -3px 5px rgba(255, 255, 255, 0.7),
            3px -3px 5px rgba(255, 255, 255, 0.7),
            -3px 3px 5px rgba(255, 255, 255, 0.7);
            margin-top:3rem;">
                                สาระดีๆ ศาลการปกครอง
                            </div>
                        </a>

                    </div>
                    <div class="col-xl-12 col-lg-4 col-md-6 col-12 mb-4">
                        <a href="https://www.gprocurement.go.th/new_index.html" class="bg-banner-section2 p-2 d-flex flex-column justify-content-center align-items-center position-relative">
                            <img src="{{ asset('pages/home/section-2/2.png') }}" alt="icon-banner" class="img-banner">
                            <div class="lh-1 text-center text-black" style="text-shadow:
            3px 3px 5px rgba(255, 255, 255, 0.7),
            -3px -3px 5px rgba(255, 255, 255, 0.7),
            3px -3px 5px rgba(255, 255, 255, 0.7),
            -3px 3px 5px rgba(255, 255, 255, 0.7);
            margin-top:3rem;">
                                ระบบการจัดซื้อจัดจ้าง<br>
                                ภาครัฐ (EGP)
                            </div>
                        </a>

                    </div>
                    <div class="col-xl-12 col-lg-4 col-md-6 col-12 mb-4">
                        <a href="https://www.nacc.go.th/" class="bg-banner-section2 p-2 d-flex flex-column justify-content-center align-items-center position-relative">
                            <img src="{{ asset('pages/home/section-2/3.png') }}" alt="icon-banner" class="img-banner">
                            <div class="lh-1 text-center text-black" style="text-shadow:
            3px 3px 5px rgba(255, 255, 255, 0.7),
            -3px -3px 5px rgba(255, 255, 255, 0.7),
            3px -3px 5px rgba(255, 255, 255, 0.7),
            -3px 3px 5px rgba(255, 255, 255, 0.7);
            margin-top:3rem; font-size:16px;">
                                สำนักงานนคณะกรรมการการป้องกัน<br>
                                และปราบปรามการทุจริตแห่งชาติ
                            </div>
                        </a>

                    </div>
                    <div class="col-xl-12 col-lg-4 col-md-6 col-12 mb-4">
                        <a href="https://www.dla.go.th/oss.htm" class="bg-banner-section2 p-2 d-flex flex-column justify-content-center align-items-center position-relative">
                            <img src="{{ asset('pages/home/section-2/4.png') }}" alt="icon-banner" class="img-banner">
                            <div class="lh-1 text-center text-black" style="text-shadow:
            3px 3px 5px rgba(255, 255, 255, 0.7),
            -3px -3px 5px rgba(255, 255, 255, 0.7),
            3px -3px 5px rgba(255, 255, 255, 0.7),
            -3px 3px 5px rgba(255, 255, 255, 0.7);
            margin-top:3rem; font-size:18px;">
                                ยื่นแบบฟอร์มคำร้องออนไลน์<br>
                                One Stop Service
                            </div>
                        </a>

                    </div>
                    <div class="col-xl-12 col-lg-4 col-md-6 col-12 mb-4">
                        <a href="https://infocenter.oic.go.th/" class="bg-banner-section2 p-2 d-flex flex-column justify-content-center align-items-center position-relative">
                            <img src="{{ asset('pages/home/section-2/5.png') }}" alt="icon-banner" class="img-banner">
                            <div class="lh-1 text-center text-black" style="text-shadow:
            3px 3px 5px rgba(255, 255, 255, 0.7),
            -3px -3px 5px rgba(255, 255, 255, 0.7),
            3px -3px 5px rgba(255, 255, 255, 0.7),
            -3px 3px 5px rgba(255, 255, 255, 0.7);
            margin-top:3rem;">
                                ศูนย์ข้อมูลข่าวสาร<br>
                                อิเล็กทรอนิกส์ราชการ
                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
</main>
