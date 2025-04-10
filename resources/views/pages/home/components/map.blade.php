<head>
    <style>
        .bg-page-map {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        .video-map {
            position: relative;
            /* สำคัญ: ให้ .location-container-1 อ้างอิง */
            width: 100%;
            height: 100%;
        }

        .location-container-1 {
            position: absolute;
            bottom: 5%;
            left: 32%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
        }
        .location-container-2 {
            position: absolute;
            bottom: 0%;
            left: 15%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
        }
        .location-container-3 {
            position: absolute;
            bottom: 18%;
            left: 14%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
        }
        .location-container-4 {
            position: absolute;
            bottom: 25%;
            left: 30%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
        }
        .location-container-5 {
            position: absolute;
            bottom: 15%;
            left: 45%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
        }
        .location-container-6 {
            position: absolute;
            bottom: 10%;
            left: 57%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
        }
        .location-container-7 {
            position: absolute;
            bottom: 7%;
            left: 69%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
        }
        .location-container-8 {
            position: absolute;
            bottom: -4%;
            left: 84%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
        }

        .location-label {
            display: block;
            margin-top: 8px;
            font-size: 16px;
            color: #000;
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
    </style>
</head>

<main class="d-flex bg-page-map">
    <div class="video-map">
        <video autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
            <source src="{{ asset('pages/home/map/เเมพหลัง.webm') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- ตำแหน่งอยู่ภายใน video-map ที่มี position: relative -->
        <div class="location-container-1">
            <img src="{{ asset('pages/home/map/โรงพยาบาลส่งเสริมสุขภาพ.png') }}" alt="โรงพยาบาลส่งเสริมสุขภาพ"
                class="main-image">
            <div class="location-label lh-1">โรงพยาบาลส่งเสริมสุขภาพ<br>ตำบลบ้านคานรูด</div>
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
        <div class="location-container-7">
            <img src="{{ asset('pages/home/map/ศาลจ้าวขุนประสิทธิ์.png') }}" alt="ศาลจ้าวขุนประสิทธิ์"
                class="main-image">
            <div class="location-label lh-1">ศาลจ้าวขุนประสิทธิ์</div>
            <img src="{{ asset('pages/home/map/หมุด.png') }}" alt="หมุด" class="pin-image-6">
        </div>
        <div class="location-container-8">
            <img src="{{ asset('pages/home/map/สะพานท่าเทียบเรือ.png') }}" alt="สะพานท่าเทียบเรือ"
                class="main-image">
            <div class="location-label lh-1">สะพานท่าเทียบเรือ</div>
            <img src="{{ asset('pages/home/map/หมุด.png') }}" alt="หมุด" class="pin-image-6">
        </div>
    </div>
</main>
