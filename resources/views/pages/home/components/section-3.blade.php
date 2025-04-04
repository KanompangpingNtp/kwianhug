<head>
    <style>
        .bg-page3 {
            background-image: url('{{ asset('pages/home/section-3/bg-3.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 2rem 0rem;
        }

        .title-section3 {
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

        .bg-video-section2 {
            background: linear-gradient(to bottom, #fd664f, #eba152);
            border-radius: 20px;
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

        .custom-carousel-btn {
            background-color: rgba(255, 165, 0, 0.7);
            /* สีส้มโปร่งใส */
            border-radius: 50%;
            /* ทำให้เป็นปุ่มกลม */
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;

            /* ทำให้ปุ่มอยู่ตรงกลางแนวตั้ง */
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .custom-carousel-btn:hover {
            background-color: rgba(255, 140, 0, 1);
            /* สีส้มเข้มขึ้นเมื่อ hover */
        }

        .bg-btn-section3 {
            background: linear-gradient(to bottom, #fc654d, #eb8f2c);
            border-radius: 25px;
            color: white;
            font-size: 1.75rem;
            /* fs-3 */
            padding: 0.5rem;
            /* p-2 */
            margin-top: 1rem;
            /* mt-3 */
            font-weight: bold;
            /* fw-bold */
            width: 100%;
            /* w-100 */
            text-align: center;
            /* text-center */
            text-decoration: none;
            /* text-decoration-none */
            display: inline-block;
            transition: all 0.3s ease;
            /* เพิ่ม transition เพื่อให้การเปลี่ยนแปลงดูนุ่มนวล */
        }

        .bg-btn-section3:hover {
            background: linear-gradient(to bottom, #fc654d, #eb8f2c);
            /* เปลี่ยนสีเมื่อ hover */
            transform: scale(1.03);
            /* ขยายปุ่มเล็กน้อย */
        }

        .bg-orange {
            background: linear-gradient(to bottom, #fa654e, #f28e2b);
            border-radius: 20px;
            position: relative;
        }

        .text-detail-banner {

            font-size: 18px;
            font-weight: bold;
            color: #f07a1b;
            text-shadow:
                1px 1px 2px rgba(255, 255, 255, 0.7),
                /* ขยายเงา */
                -1px -1px 2px rgba(255, 255, 255, 0.7),
                1px -1px 2px rgba(255, 255, 255, 0.7),
                -1px 1px 2px rgba(255, 255, 255, 0.7);
        }

        .title-orange {
            position: absolute;
            color: #ffffff;
            width: 25rem;
            top: -15px;
            /* ปรับให้อยู่เหนือ bg-orange */
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(to bottom, #fa654e, #f28e2b);
            /* ใส่พื้นหลังให้ตัวหนังสือชัดขึ้น */
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
        }

        @media (max-width: 991px) {
            .title-orange {

                width: 20rem;

            }
        }

        .hover-effect img {
            transition: all 0.3s ease-in-out;
        }

        .hover-effect:hover img {
            transform: scale(1.1);
        }

    </style>
</head>

<main class="d-flex bg-page3">
    <div class="container d-flex flex-column justify-content-center align-items-start">

        <div class="row w-100">
            <div class="col-xl-8">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="title-section3 text-center">
                        ป้ายประกาศ
                    </div>
                    <div class="bg-dark p-2" style="border-radius: 20px;">
                        <div id="carouselAnnouncement" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" style="border-radius: 15px;">
                                @php
                                $firstItem = true;
                                @endphp

                                @forelse ($noticeBoard as $item)
                                <div class="carousel-item {{ $firstItem ? 'active' : '' }}">
                                    <img src="{{ $item->photos->isNotEmpty() ? asset('storage/' . $item->photos->first()->post_photo_file) : asset('pages/home/section-1/bg-1.png') }}" class="d-block w-100" alt="{{ $item->title_name ?? 'Slide' }}">
                                </div>
                                @php $firstItem = false; @endphp
                                @empty
                                <div class="carousel-item active">
                                    <img src="{{ asset('pages/home/section-1/bg-1.png') }}" class="d-block w-100" alt="Default Slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('pages/home/section-2/bg-2.png') }}" class="d-block w-100" alt="Default Slide 2">
                                </div>
                                @endforelse
                            </div>

                            <!-- ปุ่ม Previous -->
                            <button class="carousel-control-prev custom-carousel-btn" type="button" data-bs-target="#carouselAnnouncement" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>

                            <!-- ปุ่ม Next -->
                            <button class="carousel-control-next custom-carousel-btn" type="button" data-bs-target="#carouselAnnouncement" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>

                    <a href="{{route('NoticeBoardShowData')}}" class="bg-btn-section3">ดูทั้งหมด <img src="{{ asset('pages/home/section-3/icon-pointer.png') }}" alt="icon-pointer" style="width: 35px;"></a>
                </div>
            </div>
            <div class="col-xl-4 d-flex justify-content-center align-items-center mt-3">
                <img src="{{ asset('pages/home/section-3/banner.png') }}" alt="banner" style="width: 350px;">
            </div>
            <div class="col-xl-8 mt-4">
                <div class="bg-orange p-2" style="border-radius:20px;">
                    <div class="title-orange text-center">
                        บริการประชาชน
                    </div>
                    <div class="bg-white p-3" style="border-radius:20px;">
                        <div class="row w-100 justify-content-center align-items-center">
                            <a href="https://kwianhug.sosmartsolution.com/Authority/show/detail/2" class="hover-effect text-decoration-none col-xl-4 col-lg-6 d-flex flex-column justify-content-center align-items-center position-relative">
                                <img src="{{ asset('pages/home/section-3/บ1.png') }}" alt="icon">
                                <p class="hover-text text-center mt-2 position-absolute text-detail-banner lh-1" style="bottom: -11%;">สำนักปลัด</p>
                            </a>
                            <a href="https://kwianhug.sosmartsolution.com/Authority/show/detail/5" class="hover-effect text-decoration-none col-xl-4 col-lg-6 d-flex flex-column justify-content-center align-items-center position-relative">
                                <img src="{{ asset('pages/home/section-3/บ2.png') }}" alt="icon">
                                <p class="hover-text text-center mt-2 position-absolute text-detail-banner lh-1" style="bottom: -10%;">กองการศึกษา</p>
                            </a>
                            <a href="https://kwianhug.sosmartsolution.com/Authority/show/detail/3" class="hover-effect text-decoration-none col-xl-4 col-lg-6 d-flex flex-column justify-content-center align-items-center position-relative">
                                <img src="{{ asset('pages/home/section-3/บ3.png') }}" alt="icon">
                                <p class="hover-text text-center mt-2 position-absolute text-detail-banner lh-1" style="bottom: -11%;">กองคลัง</p>
                            </a>
                            <a href="https://kwianhug.sosmartsolution.com/Authority/show/detail/6" class="hover-effect text-decoration-none col-xl-4 col-lg-6 d-flex flex-column justify-content-center align-items-center position-relative">
                                <img src="{{ asset('pages/home/section-3/บ4.png') }}" alt="icon">
                                <p class="hover-text text-center mt-2 position-absolute text-detail-banner lh-1" style="bottom: -20%;">หน่วยตรวจสอบ<br>ภายใน</p>
                            </a>
                            <a href="{{route('BannserPages')}}" class="hover-effect text-decoration-none col-xl-4 col-lg-6 d-flex flex-column justify-content-center align-items-center position-relative">
                                <img src="{{ asset('pages/home/section-3/บ5.png') }}" alt="icon">
                                <p class="hover-text text-center mt-2 position-absolute text-detail-banner lh-1" style="bottom: -20%;">ลิงค์ตรวจสอบ<br>ภายนอก</p>
                            </a>
                            <a href="https://kwianhug.sosmartsolution.com/Authority/show/detail/4" class="hover-effect text-decoration-none col-xl-4 col-lg-6 d-flex flex-column justify-content-center align-items-center position-relative">
                                <img src="{{ asset('pages/home/section-3/บ6.png') }}" alt="icon">
                                <p class="hover-text text-center mt-2 position-absolute text-detail-banner lh-1" style="bottom: -11%;">กองช่าง</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex justify-content-center align-items-center mt-4">
                <div class="bg-black px-2 py-3 pb-1" style="border-radius: 20px; position: relative;">
                    <div class="title-orange text-center">
                        รางวัลแห่งความภาคภูมิใจ <img src="{{asset('pages/home/section-3/trophy.png')}}" alt="trophy" style="width: 40px;">
                    </div>
                    <div class="bg-white p-1 mt-4" style="border-radius: 20px; position: relative;">
                        <div id="carouselTrophy" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" style="border-radius: 15px;">
                                @php
                                $firstItem = true;
                                @endphp

                                @forelse ($awardsPride as $item)
                                <div class="carousel-item {{ $firstItem ? 'active' : '' }}">
                                    <img src="{{ $item->photos->isNotEmpty() ? asset('storage/' . $item->photos->first()->post_photo_file) : asset('pages/home/section-2/bg-2.png') }}" class="d-block w-100" alt="{{ $item->title_name ?? 'Award Slide' }}">
                                </div>
                                @php $firstItem = false; @endphp
                                @empty
                                <!-- แสดงค่าเริ่มต้นเมื่อไม่มีข้อมูล -->
                                <div class="carousel-item active">
                                    <img src="{{ asset('pages/home/section-2/bg-2.png') }}" class="d-block w-100" alt="Default Slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('pages/home/section-3/bg-3.png') }}" class="d-block w-100" alt="Default Slide 3">
                                </div>
                                @endforelse
                            </div>

                            <!-- ปุ่ม Previous -->
                            <button class="carousel-control-prev custom-carousel-btn" type="button" data-bs-target="#carouselTrophy" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>

                            <!-- ปุ่ม Next -->
                            <button class="carousel-control-next custom-carousel-btn" type="button" data-bs-target="#carouselTrophy" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
