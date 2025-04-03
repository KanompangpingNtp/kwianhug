<head>
    <style>
        .bg-page1 {
            background-image: url('{{ asset('pages/home/section-1/bg-1.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 2rem 0rem;
        }

        .title-section1 {
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

        .consultant-info {
            background: linear-gradient(to left, #c2e6bc, #ffffff);
            border-top-left-radius: 40px;
            border-bottom-left-radius: 40px;
            flex-shrink: 0;
            margin-right: -40px;
            margin-bottom: 50px;
            padding: 1rem 1.25rem;
        }

        /* ทำให้สามารถเลื่อนได้ในแนวนอน */
        .horizontal-scroll-container {
            overflow-x: auto;
            white-space: nowrap;
            width: 100%;
            padding-bottom: 20px;
        }

        /* กำหนดให้ element ในแนวนอน */
        .horizontal-scroll-content {
            display: flex;
            gap: 10px;
        }

        .scroll-item {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: end;
            flex-shrink: 0;
        }

        .bg-btn-section1 {
            background: linear-gradient(to right, #008ef1, #00cfd4);
            border-radius: 20px;
            color: #ffffff;
            font-size: 24px;
            cursor: pointer;
            text-decoration: none;
            position: relative;
            text-shadow:
                2px 2px 3px rgba(0, 0, 0, 0.8),
                /* เงาขอบด้านขวาและล่าง */
                -2px -2px 3px rgba(0, 0, 0, 0.8),
                /* เงาขอบด้านซ้ายและบน */
                2px -2px 3px rgba(0, 0, 0, 0.8),
                /* เงาขอบด้านขวาและบน */
                -2px 2px 3px rgba(0, 0, 0, 0.8);
            /* เงาขอบด้านซ้ายและล่าง */

            border-bottom: 8px solid #f3832f;
            /* เส้นสีส้ม */
            transition: background 0.3s, transform 0.3s;
            /* เพิ่ม transition เพื่อให้การเปลี่ยนแปลงดูนุ่มนวล */
        }

        .bg-btn-section1:hover {
            background: linear-gradient(to right, #00cfd4, #008ef1);
            /* สลับสีพื้นหลังเมื่อ hover */
            transform: scale(1.05);
            /* ขยายขนาดปุ่มเล็กน้อย */
        }

        .bg-btn-section1 img {
            position: absolute;
            left: -30px;
            /* ออกมาครึ่งหนึ่ง */
            width: 100px;
            /* ปรับขนาดรูป */
            height: auto;
            transition: transform 0.3s ease;
            /* เพิ่ม transition ให้รูปภาพ */
        }

        .bg-btn-section1:hover img {
            transform: translateX(-10px);
            /* เลื่อนรูปไปทางซ้ายเมื่อ hover */
        }
    </style>
</head>

<main class="d-flex bg-page1">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="title-section1">
            คณะผู้บริหาร
        </div>

        <!-- Container สำหรับเลื่อนแนวนอน -->
        <div class="horizontal-scroll-container">
            <div class="horizontal-scroll-content">
                <!-- Slide 1 -->
                <div class="scroll-item">
                    <div class="d-flex flex-row align-items-end">
                        <div class="consultant-info lh-sm">
                            <span class="fs-3 fw-bold">ที่ปรึกษา</span><br>
                            <span class="fw-bold">ตำบลเกวียนหัก</span><br>
                            <span>ชื่อ-นามสกุล</span>
                            <a href="tel:9999999990" class="d-flex align-items-center text-white pe-2 mt-2"
                                style="font-size:17px; background: linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0.2)); border-radius: 20px; text-decoration: none;">
                                <img src="{{ asset('pages/home/section-1/icon-phone.png') }}" alt="icon"
                                    style="margin-right: 5px; margin-left:-5px; margin-top:-15px;">
                                999-9999990
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-1/5.png') }}" alt="personal1" class="personal-img">
                    </div>

                </div>
                <!-- Slide 2 -->
                <div class="scroll-item">
                    <div class="d-flex flex-row align-items-end">
                        <div class="consultant-info lh-sm">
                            <span class="fs-3 fw-bold">เลขา</span><br>
                            <span class="fw-bold">ตำบลเกวียนหัก</span><br>
                            <span>ชื่อ-นามสกุล</span>
                            <a href="tel:9999999990" class="d-flex align-items-center text-white pe-2 mt-2"
                                style="font-size:17px; background: linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0.2)); border-radius: 20px; text-decoration: none;">
                                <img src="{{ asset('pages/home/section-1/icon-phone.png') }}" alt="icon"
                                    style="margin-right: 5px; margin-left:-5px; margin-top:-15px;">
                                999-9999990
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-1/2.png') }}" alt="personal2" class="personal-img">
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="scroll-item">
                    <div class="d-flex flex-row align-items-end">
                        <div class="consultant-info lh-sm" style="margin-right: -70px;">
                            <span class="fs-3 fw-bold">นายกเทศมนตรี</span><br>
                            <span class="fw-bold">ตำบลเกวียนหัก</span><br>
                            <span>นายพราหมณ์ มุกดาสนิท</span>
                            <a href="tel:9999999990" class="d-flex align-items-center text-white pe-2 mt-2"
                                style="font-size:17px; background: linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0.2)); border-radius: 20px; text-decoration: none;">
                                <img src="{{ asset('pages/home/section-1/icon-phone.png') }}" alt="icon"
                                    style="margin-right: 5px; margin-left:-5px; margin-top:-15px;">
                                999-9999990
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-1/4.png') }}" alt="personal3" class="personal-img">
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="scroll-item">
                    <div class="d-flex flex-row align-items-end">
                        <div class="consultant-info lh-sm">
                            <span class="fs-3 fw-bold">รองนายก</span><br>
                            <span class="fw-bold">ตำบลเกวียนหัก</span><br>
                            <span>ชื่อ-นามสกุล</span>
                            <a href="tel:9999999990" class="d-flex align-items-center text-white pe-2 mt-2"
                                style="font-size:17px; background: linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0.2)); border-radius: 20px; text-decoration: none;">
                                <img src="{{ asset('pages/home/section-1/icon-phone.png') }}" alt="icon"
                                    style="margin-right: 5px; margin-left:-5px; margin-top:-15px;">
                                999-9999990
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-1/1.png') }}" alt="personal4" class="personal-img">
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="scroll-item">
                    <div class="d-flex flex-row align-items-end">
                        <div class="consultant-info lh-sm">
                            <span class="fs-3 fw-bold">รองนายก</span><br>
                            <span class="fw-bold">ตำบลเกวียนหัก</span><br>
                            <span>ชื่อ-นามสกุล</span>
                            <a href="tel:9999999990" class="d-flex align-items-center text-white pe-2 mt-2"
                                style="font-size:17px; background: linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0.2)); border-radius: 20px; text-decoration: none;">
                                <img src="{{ asset('pages/home/section-1/icon-phone.png') }}" alt="icon"
                                    style="margin-right: 5px; margin-left:-5px; margin-top:-15px;">
                                999-9999990
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-1/3.png') }}" alt="personal5" class="personal-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 mt-5 justify-content-center align-items-center">
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="{{route('MessageFromPMPage')}}" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1">
                    <img src="{{ asset('pages/home/section-1/logo1.png') }}" alt="icon">
                    สารจากนายก
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="{{route('ExecutiveIntentionsPage')}}" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:18px;">
                    <img src="{{ asset('pages/home/section-1/logo2_coppy.png') }}" alt="icon">
                    <span style="padding-left: 4rem;">เจตจำนงสุจริต <br> ของผู้บริหาร</span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="#" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:19px;">
                    <img src="{{ asset('pages/home/section-1/logo3.png') }}" alt="icon">
                    <span style="padding-left: 4rem;">รับแจ้งเรื่องราวร้องทุกข์</span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="{{route('itaPage')}}" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:18px;">
                    <img src="{{ asset('pages/home/section-1/logo4.png') }}" alt="icon">
                    <span style="padding-left: 4rem;">การประเมินคุณธรรม<br>และความโปร่งใส </span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="{{route('PerformanceEvaluationPage')}}" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:16px;">
                    <img src="{{ asset('pages/home/section-1/logo5.png') }}" alt="icon">
                    <span style="padding-left: 4rem;"> การประเมิน <br>ประสิทธิภาพ <br> ภายใน(LPA)</span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="#" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:18px;">
                    <img src="{{ asset('pages/home/section-1/logo6.png') }}" alt="icon">
                    <span style="padding-left: 4rem;">รับเรื่องร้องเรียน <br> ทุจริตประพฤติมิชอบ</span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="{{route('LearningOrganizationPage')}}" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:18px;">
                    <img src="{{ asset('pages/home/section-1/logo7.png') }}" alt="icon">
                    <span style="padding-left: 4rem;"> องค์กรแห่ง <br> การเรียนรู้ (KM)</span>
                </a>
            </div>
        </div>
    </div>
</main>
