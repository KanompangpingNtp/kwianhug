<head>
    <style>
        .bg-page5 {
            background-image: url('{{ asset('pages/home/section-5/bg-5.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 2rem 0rem;
        }

        .title-section5 {
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

        .bg-link-red-section5 {
            position: relative;
            background: linear-gradient(to bottom, #fb6849, #f38e2e);
            border-radius: 60px;
            border: 5px solid #ffff;
            z-index: 2;
            transition: all 0.3s ease-in-out;
        }

        .bg-link-blue-section5 {
            position: relative;
            background: linear-gradient(to bottom, #00cbd4, #0377fc);
            border-radius: 60px;
            border: 5px solid #ffff;
            z-index: 2;
            transition: all 0.3s ease-in-out;
        }

        .circle-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .bg-red-date {
            position: absolute;
            bottom: -30px;
            /* ให้เลยออกมาด้านล่าง */
            right: 10px;
            /* ให้เลยออกมาด้านขวา */
            background: linear-gradient(to bottom, #fb6849, #f38e2e);
            border-radius: 60px;
            border: 3px solid #ffff;
            white-space: nowrap;
            z-index: -1;
            transition: all 0.3s ease-in-out;
        }

        .bg-blue-date {
            position: absolute;
            bottom: -30px;
            /* ให้เลยออกมาด้านล่าง */
            right: 10px;
            /* ให้เลยออกมาด้านขวา */
            background: linear-gradient(to bottom, #00cbd4, #0377fc);
            border-radius: 60px;
            border: 3px solid #ffff;
            white-space: nowrap;
            z-index: -1;
            transition: all 0.3s ease-in-out;
        }

        .bg-link-red-section5:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        .bg-red-date:hover {
            transform: translateY(-5px);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
        }

        .bg-link-blue-section5:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        .bg-blue-date:hover {
            transform: translateY(-5px);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
        }

        .bg-black-opacity {
            background: linear-gradient(to bottom, #03030393, #03030393);
            border-radius: 40px;
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

        .submit-btn {
            transition: all 0.3s ease-in-out;
        }

        .submit-btn:hover {
            background: linear-gradient(to bottom, #f38e2e, #fb6849);
            /* เปลี่ยนสีเมื่อ hover */
            transform: scale(1.05);
            /* ขยายปุ่มเล็กน้อย */
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
            /* เพิ่มเงา */
            /* เพิ่มการเปลี่ยนแปลงที่นุ่มนวล */
        }

        .bloom-white {
            font-weight: bold;
            text-shadow:
                1px 1px 3px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและล่าง */
                -1px -1px 3px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านซ้ายและบน */
                1px -1px 3px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและบน */
                -1px 1px 3px rgba(255, 255, 255, 0.5);
        }

        .link-section5-effect {
            transition: all 0.3s ease;
        }

        .link-section5-effect:hover {
            transform: scale(1.05);

        }

        .link-section5-effect img {
            transition: all 0.3s ease;
        }

        .link-section5-effect:hover img {
            opacity: 0.8;
        }

        .link-section5-effect p {
            transition: all 0.3s ease;
        }

        .link-section5-effect:hover p {
            color: white;
        }

    </style>
</head>

<main class="d-flex bg-page5">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="title-section5 text-center">
            ข่าวประชาสัมพันธ์
        </div>
        <div class="row w-100">
            @foreach ($pressRelease->take(6) as $index => $item)
            @php
            $bgSectionClass = $index < 3 ? 'bg-link-red-section5' : 'bg-link-blue-section5';
            $bgDateClass = $index < 3 ? 'bg-red-date' : 'bg-blue-date';

            // ตรวจสอบว่ามีค่าหรือไม่
            $title = isset($item->title_name) ? $item->title_name : 'หัวข้อเรื่อง';

            // ตัดข้อความ title ให้ยาวไม่เกิน 80 ตัวอักษร
            $maxLength = 80;
            $trimmedTitle = mb_strlen($title, 'UTF-8') > $maxLength
                ? mb_substr($title, 0, $maxLength, 'UTF-8') . '...'
                : $title;

            // ตรวจสอบว่ามีรูปภาพหรือไม่
            $imagePath = $item->photos->isNotEmpty()
                ? asset('storage/' . $item->photos->first()->post_photo_file)
                : asset('pages/home/section-4/Logo.png');

            // ตัดข้อความเนื้อหา
            $text = isset($item->details) ? $item->details : '';
            $trimmedText = mb_strlen($text, 'UTF-8') > $maxLength
                ? mb_substr($text, 0, $maxLength, 'UTF-8') . '...'
                : $text;
            @endphp

                <a href="#" class="col-xl-4 col-lg-6 my-3 text-decoration-none">
                    <div class="{{ $bgSectionClass }} d-flex justify-content-start align-items-start">
                        <img src="{{ $imagePath }}" alt="logo" class="circle-img bg-white">
                        <div class="lh-1 fs-5 p-2">
                            <span class="fw-bold text-black" style="font-size: 15px;">{{ $trimmedTitle }}</span><br>
                            <span class="fs-6 text-white" style="font-size: 15px;">{{ $trimmedText }}</span>
                        </div>
                        <div class="{{ $bgDateClass }} text-white py-1 px-4 fs-6 position-absolute">
                            {{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}
                        </div>
                    </div>
                </a>
                @endforeach
        </div>
        <div class="d-flex justify-content-end align-items-center w-100 my-4">
            <img src="{{ asset('pages/home/section-5/fast-forward.png') }}" alt="fast-forward">
            <a href="{{route('PressReleaseShowData')}}" class="btn btn-light fs-4 fw-bold py-1 px-4 mx-4" style="border-radius: 25px;">ดูทั้งหมด</a>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="fs-3 fw-bold text-white">
                บริการประชาชน
            </div>
            <div class="bg-black-opacity d-flex flex-column flex-xl-row justify-content-center align-items-center p-0">
                <div class="row justify-content-center align-items-center my-3">
                    <div class="col-xl-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-5/1.png') }}" alt="icon" class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1" style="white-space: nowrap; overflow: visible; text-overflow: clip;">คู่มือประชาชน</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-5/2.png') }}" alt="icon" class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1" style="white-space: nowrap; overflow: visible; text-overflow: clip;">
                                เบี้ยยังชีพผู้สูงอายุ</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-5/3.png') }}" alt="icon" class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1" style="white-space: nowrap; overflow: visible; text-overflow: clip;">เบี้ยยังชีพคนพิการ
                            </p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-5/4.png') }}" alt="icon" class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1" style="white-space: nowrap; overflow: visible; text-overflow: clip;">
                                รับเรื่องร้องเรียน<br>การทุจริตประพฤติมิชอบ</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-5/5.png') }}" alt="icon" class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1" style="white-space: nowrap; overflow: visible; text-overflow: clip;">กระดานกระทู้</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-5/6.png') }}" alt="icon" class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1" style="white-space: nowrap; overflow: visible; text-overflow: clip;">คู่มือการปฏิบัติงาน
                            </p>
                        </a>
                    </div>
                </div>



                <div class="bg-white d-flex flex-column justify-content-center align-items-center p-3 my-3 my-xl-0" style="border-radius: 40px;">
                    <!-- หัวข้อ -->
                    <div class="d-flex justify-content-between align-items-center py-2 px-4 w-100" style="background: linear-gradient(to bottom, #fb6849, #f38e2e); border-radius: 40px;">
                        <div class="fs-4 fw-bold text-white lh-1">
                            แบบสอบถามความคิดเห็น<br>
                            <span class="fs-5">เทศบาลตำบลเกวียนหัก</span>
                        </div>
                        <img src="{{ asset('pages/home/section-5/voting-box.png') }}" alt="icon" class="ms-2" style="width: 50px; height: 50px;">
                    </div>

                    <!-- รายการ Radio Button -->
                    <form action="#" method="POST" class="w-100 mt-3 px-4">
                        @csrf
                        <div class="form-check my-2">
                            <input class="form-check-input" type="radio" id="option1" name="survey" value="option1">
                            <label class="form-check-label" for="option1">ตัวเลือกที่ 1</label>
                        </div>
                        <div class="form-check my-2">
                            <input class="form-check-input" type="radio" id="option2" name="survey" value="option2">
                            <label class="form-check-label" for="option2">ตัวเลือกที่ 2</label>
                        </div>
                        <div class="form-check my-2">
                            <input class="form-check-input" type="radio" id="option3" name="survey" value="option3">
                            <label class="form-check-label" for="option3">ตัวเลือกที่ 3</label>
                        </div>
                        <div class="form-check my-2">
                            <input class="form-check-input" type="radio" id="option4" name="survey" value="option4">
                            <label class="form-check-label" for="option4">ตัวเลือกที่ 4</label>
                        </div>

                        <!-- ปุ่ม Submit -->
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn submit-btn text-white px-4 py-2 fs-5" style="background: linear-gradient(to bottom, #fb6849, #f38e2e); border-radius: 30px; border: none;">
                                กดโหวต<img src="{{ asset('pages/home/section-3/icon-pointer.png') }}" alt="icon-pointer" style="width: 30px;">
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>
