<head>
    <style>
        .bg-page8 {
            background-image: url('{{ asset('pages/home/section-8/bg-8.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 3rem 0rem;
        }

        .title-section8 {
            font-size: 40px;
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

        .bg-orange-section8 {
            background: linear-gradient(to bottom, #fb6849, #f38e2e);
            border-radius: 30px;
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

        .bg-orange-link-section8 {
            background: linear-gradient(to bottom, #fb6849, #f38e2e);
            border-radius: 10px;
        }
        .bg-blue-section8 {
            background: linear-gradient(to bottom, #137dfd, #00cfd3);
            border-radius: 30px;
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

        .bg-blue-link-section8 {
            background: linear-gradient(to bottom, #137dfd, #00cfd3);
            border-radius: 10px;
        }

        .section8-link-orange {
            display: flex;
            align-items: center;
            gap: 10px;
            /* ระยะห่างระหว่างไอคอนกับข้อความ */
            font-size: 1.1rem;
            /* ขนาดตัวอักษร */
            font-weight: bold;
            /* ความหนาของตัวอักษร */
            color: #333;
            /* สีข้อความ */
            transition: color 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .section8-link-orange img {
            width: 16px;
            /* ปรับขนาดไอคอนลูกศร */
            height: auto;
            transition: transform 0.2s ease-in-out;
        }

        .section8-link-orange:hover {
            color: #ff6600;
            /* เปลี่ยนสีข้อความเมื่อ hover */
            transform: translateX(5px);
            /* ขยับข้อความไปทางขวาเล็กน้อย */
        }

        .section8-link-blue {
            display: flex;
            align-items: center;
            gap: 10px;
            /* ระยะห่างระหว่างไอคอนกับข้อความ */
            font-size: 1.1rem;
            /* ขนาดตัวอักษร */
            font-weight: bold;
            /* ความหนาของตัวอักษร */
            color: #333;
            /* สีข้อความ */
            transition: color 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .section8-link-blue:hover img {
            transform: translateX(5px);
            /* ขยับไอคอนไปทางขวา */
        }
        .section8-link-blue img {
            width: 16px;
            /* ปรับขนาดไอคอนลูกศร */
            height: auto;
            transition: transform 0.2s ease-in-out;
        }

        .section8-link-blue:hover {
            color: #137dfd;
            transform: translateX(5px);
        }

        .section8-link-blue:hover img {
            transform: translateX(5px);
        }

        @keyframes shakeLeftRight {
    0% { transform: translateX(0); }
    25% { transform: translateX(-10px); }
    50% { transform: translateX(10px); }
    75% { transform: translateX(-10px); }
    100% { transform: translateX(0); }
}

.shake-animation {
    animation: shakeLeftRight 3s ease-in-out infinite;
}

    </style>
</head>

<main class="d-flex bg-page8">
    <div class="container d-flex flex-column justify-content-center align-items-center px-3">
        <div class="title-section8 text-center" style=" line-height: 0.8;">
            หนังสือราชการ <br><span class="fs-4">เทศบาลตำบลเกวียนหัก</span>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center mt-5 gap-5">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="bg-orange-section8 py-2 px-4 text-center text-white lh-sm">
                    หนังสือราชการจากกรม <br>ส่งเสริมการปกครองท้องถิ่น
                </div>
                <div class="bg-orange-link-section8 p-1 mt-4">
                    <div class="bg-white ps-3 pe-5 py-4 d-flex flex-column justify-content-center align-items-start gap-3"
                        style="border-radius: 10px;">
                        <a href="https://www.dla.go.th/servlet/DocumentServlet?documentType=2&isSbpac=N" class="text-decoration-none section8-link-orange">
                            <img src="{{ asset('pages/home/section-8/arrow-orange.png') }}" alt="arrow">
                            หนังสือราชการของสถ.
                        </a>
                        <a href="https://www.dla.go.th/servlet/LawServlet?regType=1" class="text-decoration-none section8-link-orange">
                            <img src="{{ asset('pages/home/section-8/arrow-orange.png') }}" alt="arrow">
                            กฏหมาย ระเบียบ และมติ ก.กลาง
                        </a>
                        <a href="https://www.dla.go.th/servlet/DocumentServlet?documentType=4" class="text-decoration-none section8-link-orange">
                            <img src="{{ asset('pages/home/section-8/arrow-orange.png') }}" alt="arrow">
                            บทความที่น่าสนใจ
                        </a>
                        <a href="https://www.dla.go.th/visit/it_royal.jsp" class="text-decoration-none section8-link-orange">
                            <img src="{{ asset('pages/home/section-8/arrow-orange.png') }}" alt="arrow">
                            พรบ.และประกาศเกี่ยวกับ
                        </a>
                        <a href="#" class="text-decoration-none section8-link-orange">
                            <img src="{{ asset('pages/home/section-8/arrow-orange.png') }}" alt="arrow">
                            เทคโนโลยีสารสนเทศ
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="bg-blue-section8 py-2 px-4 text-center text-white lh-sm">
                    หนังสือราชการจากกรม <br>ส่งเสริมการปกครองท้องถิ่น
                </div>
                <div class="bg-blue-link-section8 p-1 mt-4">
                    <div class="bg-white ps-3 pe-5 py-4 d-flex flex-column justify-content-center align-items-start gap-3"
                        style="border-radius: 10px;">
                        <a href="#" class="text-decoration-none section8-link-blue">
                            <img src="{{ asset('pages/home/section-8/arrow-blue.png') }}" alt="arrow">
                            หนังสือราชการของสถ.
                        </a>
                        <a href="#" class="text-decoration-none section8-link-blue">
                            <img src="{{ asset('pages/home/section-8/arrow-blue.png') }}" alt="arrow">
                            กฏหมาย ระเบียบ และมติ ก.กลาง
                        </a>
                        <a href="#" class="text-decoration-none section8-link-blue">
                            <img src="{{ asset('pages/home/section-8/arrow-blue.png') }}" alt="arrow">
                            บทความที่น่าสนใจ
                        </a>
                        <a href="#" class="text-decoration-none section8-link-blue">
                            <img src="{{ asset('pages/home/section-8/arrow-blue.png') }}" alt="arrow">
                            พรบ.และประกาศเกี่ยวกับ
                        </a>
                        <a href="#" class="text-decoration-none section8-link-blue">
                            <img src="{{ asset('pages/home/section-8/arrow-blue.png') }}" alt="arrow">
                            เทคโนโลยีสารสนเทศ
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('pages/home/section-8/kwein.png') }}" alt="kwein" class="mt-3 img-fluid shake-animation">

    </div>
</main>
