<head>
    <style>
        .bg-page-map {
            position: relative;
            width: 100%;
            height: 100vh; /* ครอบคลุมความสูงของหน้าจอ */
            overflow-x: auto; /* ทำให้สามารถเลื่อนในแนวนอนได้ */
            overflow-y: hidden; /* ป้องกันการเลื่อนในแนวตั้ง */
        }

        /* ทำให้วิดีโอเต็มขอบและสามารถเลื่อนไปได้ */
        .bg-page-map video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw; /* กำหนดความกว้างของวิดีโอให้เต็มหน้าจอในแนวนอน */
            height: 100%; /* กำหนดความสูงของวิดีโอ */
            object-fit: cover; /* ให้วิดีโอครอบคลุมพื้นที่ทั้งหมด */
            z-index: -1; /* วิดีโออยู่ข้างหลังเนื้อหา */
        }

        .title-map {
            margin-top: 11rem;
            font-size: 6rem;
            font-weight: bold;
            z-index: 1; /* ทำให้ข้อความอยู่ข้างหน้าวิดีโอ */
            position: relative;
        }

        .box-map {
            width: 100%;
            height: 70vh;
            overflow: visible;
            position: relative;
            z-index: 1; /* ทำให้กล่องอยู่ข้างหน้าวิดีโอ */
        }

        .location-container-1, .location-container-2, .location-container-3, .location-container-4, 
        .location-container-5, .location-container-6 {
            position: absolute;
            text-align: center;
            transform: translate(-50%, -50%);
            z-index: 1; /* ทำให้คอนเทนต์อยู่ข้างหน้าวิดีโอ */
        }

        .location-label {
            display: block;
            margin-top: 8px;
            font-size: 16px;
            color: #000000;
            border-radius: 10px;
            padding: 5px 10px;
            font-weight: bold;
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.9),
                -2px -2px 4px rgba(255, 255, 255, 0.9),
                2px -2px 4px rgba(255, 255, 255, 0.9),
                -2px 2px 4px rgba(255, 255, 255, 0.9);
            background-color: #ffffff83;
        }

        .pin-image {
            position: absolute;
            width: 30px;
            height: 38px;
            bottom: 20%;
            right: -12%;
        }

        .pin-image-4 {
            position: absolute;
            width: 30px;
            height: 38px;
            bottom: -35%;
            right: 40%;
        }

        .pin-image-6 {
            position: absolute;
            width: 30px;
            height: 38px;
            bottom: -35%;
            left: 0%;
        }
    </style>
</head>

<main class="d-flex bg-page-map">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="box-map border">
                <!-- วิดีโอพื้นหลัง -->
                <video autoplay muted loop>
                    <source src="{{ asset('pages/home/map/เเมพหลัง.webm') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <!-- เนื้อหาหรือที่อยู่ -->
                <div class="location-container-1">
                    <img src="{{ asset('pages/home/map/โรงพยาบาลส่งเสริมสุขภาพ.png') }}" alt="โรงพยาบาลส่งเสริมสุขภาพ"
                        class="main-image">
                    <div class="location-label lh-1">โรงพยาบาลส่งเสริมสุขภาพ<br>ตำบลบ้านคานรู</div>
                    <img src="{{ asset('pages/home/map/หมุด.png') }}" alt="หมุด" class="pin-image">
                </div>
                <div class="location-container-2">
                    <img src="{{ asset('pages/home/map/ศูนย์การเรียนรู้ปูแป้น.png') }}" alt="ศูนย์การเรียนรู้ปูแป้น"
                        class="main-image">
                    <div class="location-label lh-1">ศูนย์การเรียนรู้ปูแป้น</div>
                    <img src="{{ asset('pages/home/map/หมุด.png') }}" alt="หมุด" class="pin-image">
                </div>
                <div class="location-container-3">
                    <img src="{{ asset('pages/home/map/วัดคานรูดสุวรรณบูรพาราม.png') }}" alt="วัดคานรูดสุวรรณบูรพาราม"
                        class="main-image">
                    <div class="location-label lh-1">วัดคานรูดสุวรรณบูรพาราม</div>
                    <img src="{{ asset('pages/home/map/หมุด.png') }}" alt="หมุด" class="pin-image">
                </div>
                <div class="location-container-4">
                    <img src="{{ asset('pages/home/map/ศาลเจ้าปึงเท่ากงคานรูด.png') }}" alt="ศาลเจ้าปึงเท่ากงคานรูด"
                        class="main-image">
                    <div class="location-label lh-1">ศาลเจ้าปึงเท่ากงคานรูด</div>
                    <img src="{{ asset('pages/home/map/หมุด.png') }}" alt="หมุด" class="pin-image-4">
                </div>
                <div class="location-container-5">
                    <img src="{{ asset('pages/home/map/สำนักงานเทศบาลตำบลเกวียนหัก.png') }}"
                        alt="สำนักงานเทศบาลตำบลเกวียนหัก" class="main-image">
                    <div class="location-label lh-1">สำนักงานเทศบาลตำบลเกวียนหัก</div>
                    <img src="{{ asset('pages/home/map/หมุด.png') }}" alt="หมุด" class="pin-image-4">
                </div>
                <div class="location-container-6">
                    <img src="{{ asset('pages/home/map/วัดเกวียนหัก.png') }}" alt="วัดเกวียนหัก" class="main-image">
                    <div class="location-label lh-1">วัดเกวียนหัก</div>
                    <img src="{{ asset('pages/home/map/หมุด.png') }}" alt="หมุด" class="pin-image-6">
                </div>
                <div class="location-container-6">
                    <img src="{{ asset('pages/home/map/ศาลจ้าวขุนประสิทธิ์.png') }}" alt="ศาลจ้าวขุนประสิทธิ์"
                        class="main-image">
                    <div class="location-label lh-1">ศาลจ้าวขุนประสิทธิ์</div>
                    <img src="{{ asset('pages/home/map/หมุด.png') }}" alt="หมุด" class="pin-image-6">
                </div>
            </div>
        </div>
</main>
