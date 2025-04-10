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
            top: 50%;
            left: 60%;
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
    </div>
</main>
