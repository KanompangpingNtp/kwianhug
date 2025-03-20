@php
    // ม็อกข้อมูลจำลอง (ในระบบจริงควรดึงจากฐานข้อมูลผ่าน Controller)
    $mockData = [
        'egp' => [
            ['title' => 'E-GP 1', 'detail' => 'รายละเอียด E-GP 1', 'date' => '20/03/25'],
            ['title' => 'E-GP 2', 'detail' => 'รายละเอียด E-GP 2', 'date' => '19/03/25'],
            ['title' => 'E-GP 3', 'detail' => 'รายละเอียด E-GP 3', 'date' => '18/03/25'],
            ['title' => 'E-GP 4', 'detail' => 'รายละเอียด E-GP 3', 'date' => '18/03/25'],
            ['title' => 'E-GP 5', 'detail' => 'รายละเอียด E-GP 3', 'date' => '18/03/25'],
        ],
        'purchase' => [
            ['title' => 'จัดซื้อจัดจ้าง 1', 'detail' => 'รายละเอียด จัดซื้อจัดจ้าง 1', 'date' => '17/03/25'],
            ['title' => 'จัดซื้อจัดจ้าง 2', 'detail' => 'รายละเอียด จัดซื้อจัดจ้าง 2', 'date' => '16/03/25'],
            ['title' => 'จัดซื้อจัดจ้าง 3', 'detail' => 'รายละเอียด จัดซื้อจัดจ้าง 3', 'date' => '15/03/25'],
            ['title' => 'จัดซื้อจัดจ้าง 4', 'detail' => 'รายละเอียด จัดซื้อจัดจ้าง 3', 'date' => '15/03/25'],
            ['title' => 'จัดซื้อจัดจ้าง 5', 'detail' => 'รายละเอียด จัดซื้อจัดจ้าง 3', 'date' => '15/03/25'],
        ],
        'result' => [
            ['title' => 'ผลประกาศ 1', 'detail' => 'รายละเอียด ผลประกาศ 1', 'date' => '14/03/25'],
            ['title' => 'ผลประกาศ 2', 'detail' => 'รายละเอียด ผลประกาศ 2', 'date' => '13/03/25'],
            ['title' => 'ผลประกาศ 3', 'detail' => 'รายละเอียด ผลประกาศ 3', 'date' => '12/03/25'],
            ['title' => 'ผลประกาศ 4', 'detail' => 'รายละเอียด ผลประกาศ 3', 'date' => '12/03/25'],
            ['title' => 'ผลประกาศ 5', 'detail' => 'รายละเอียด ผลประกาศ 3', 'date' => '12/03/25'],
        ],
        'price' => [
            ['title' => 'ราคากลาง 1', 'detail' => 'รายละเอียด ราคากลาง 1', 'date' => '11/03/25'],
            ['title' => 'ราคากลาง 2', 'detail' => 'รายละเอียด ราคากลาง 2', 'date' => '10/03/25'],
            ['title' => 'ราคากลาง 3', 'detail' => 'รายละเอียด ราคากลาง 3', 'date' => '09/03/25'],
            ['title' => 'ราคากลาง 4', 'detail' => 'รายละเอียด ราคากลาง 3', 'date' => '09/03/25'],
            ['title' => 'ราคากลาง 5', 'detail' => 'รายละเอียด ราคากลาง 3', 'date' => '09/03/25'],
        ],
        'report' => [
            ['title' => 'รายงาน 1', 'detail' => 'รายละเอียด รายงาน 1', 'date' => '08/03/25'],
            ['title' => 'รายงาน 2', 'detail' => 'รายละเอียด รายงาน 2', 'date' => '07/03/25'],
            ['title' => 'รายงาน 3', 'detail' => 'รายละเอียด รายงาน 3', 'date' => '06/03/25'],
            ['title' => 'รายงาน 4', 'detail' => 'รายละเอียด รายงาน 3', 'date' => '06/03/25'],
            ['title' => 'รายงาน 5', 'detail' => 'รายละเอียด รายงาน 3', 'date' => '06/03/25'],
        ],
    ];
@endphp

<style>
    .bg-page6 {
        background-image: url('{{ asset('pages/home/section-6/bg-6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 3rem 0px;

    }

    .title-section5 {
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

    .bg-btn-egp {
        background: linear-gradient(to bottom, #ffffff, #ffffff);
        border-radius: 20px;
        color: #000;
        font-size: 16px;
        text-decoration: none;
        padding: 10px 20px;
        cursor: pointer;
        display: inline-block;
        transition: all 0.3s ease-in-out;
    }

    .bg-btn-egp:hover {
        background: linear-gradient(to bottom, #ff9640, #ff7800);
        color: white;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    .bg-btn-egp.active {
        background: linear-gradient(to bottom, #ff9640, #ff7800);
        color: rgb(255, 255, 255);
    }

    .bg-blue-section6 {
        background: linear-gradient(to bottom, #2667cb, #00bef9, #2667cb);
        border-radius: 20px;
    }

    .bg-orange-section6 {
        background: linear-gradient(to bottom, #ff9640, #fc674b);
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .date-orange-section6 {
        background: linear-gradient(to bottom, #ff9640, #ff7800);
        border-radius: 20px;
    }

    .link-section6 {
        display: flex;
        width: 100%;
        gap: 10px;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }

    /* เอฟเฟกต์เมื่อโฮเวอร์ */
    .link-section6:hover {
        transform: translateY(-3px);
        /* ขยับขึ้นเล็กน้อย */
        filter: brightness(1.1);
        /* ทำให้สีสว่างขึ้น */
    }

    /* เอฟเฟกต์สำหรับกล่องเนื้อหาเมื่อโฮเวอร์ */
    .link-section6:hover .bg-white {
        background-color: #f5f5f5;
        /* เปลี่ยนพื้นหลังให้เทาขึ้น */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        /* เพิ่มเงา */
    }

    .link-section6 img {
    transition: transform 0.3s ease-in-out;
}

/* หมุนภาพเมื่อโฮเวอร์ */
.link-section6:hover img {
    transform: rotate(10deg); /* ปรับองศาตามที่ต้องการ */
}

.bg-black-opacity-section6{
    background: linear-gradient(to bottom, #1313136e, #1313136e);
        border-radius: 20px;
        box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
}

/* คลาสปกติ */
.calendar-link img {
    transition: transform 0.3s ease, opacity 0.3s ease; /* ทำให้การเปลี่ยนแปลงของภาพนุ่มนวล */
}

/* เมื่อเมาส์ชี้ไปที่ลิงค์ */
.calendar-link:hover img {
    transform: scale(1.1); /* ขยายขนาดภาพเล็กน้อย */
    opacity: 0.9; /* ลดความทึบของภาพเล็กน้อย */
}

</style>
<main class="d-flex bg-page6">
    <div class="container">
        <div class="row w-100">
            <div class="col-xl-7 d-flex flex-column align-items-center justify-content-center">
                <div class="title-section5 text-center">
                    ประกาศความเคลื่อนไหว
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-2 mt-3">
                    <div class="bg-btn-egp p-2 py-3 text-center lh-sm text-nowrap active" onclick="changeContent('egp', this)">
                        ประกาศ E-GP
                    </div>
                    <div class="bg-btn-egp p-2 text-center lh-sm" onclick="changeContent('purchase', this)">
                        ประกาศจัดซื้อจัดจ้าง
                    </div>
                    <div class="bg-btn-egp p-2 text-center lh-sm" onclick="changeContent('result', this)">
                        ผลประกาศจัดซื้อจัดจ้าง
                    </div>
                    <div class="bg-btn-egp p-2 text-center lh-sm" onclick="changeContent('price', this)">
                        ประกาศราคากลาง
                    </div>
                    <div class="bg-btn-egp p-2 text-center lh-sm" onclick="changeContent('report', this)">
                        รายงานผลจัดซื้อจัดจ้าง
                    </div>
                </div>
                <div class="bg-blue-section6 p-2 mt-4 w-100">
                    <div class="bg-orange-section6 px-2 pt-3 pb-5 d-flex flex-column justify-content-start align-items-center gap-1" id="contentSection">
                        @foreach ($mockData['egp'] as $item)
                        <a href="#" class="link-section6 text-black">
                            <img src="{{ asset('pages/home/section-6/icon_ประกาศ.png') }}" alt="icon_ประกาศ" style="width: 100px;">
                            <div class="bg-white lh-sm p-2 w-100" style="border-radius:20px;">
                                <span class="fw-bold">{{ $item['title'] }}</span> <br>
                                <span class="fs-6">{{ $item['detail'] }}</span> <br>
                                <span class="date-orange-section6 px-2 fs-6">
                                    {{ $item['date'] }}
                                </span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <a href="#" class="text-center fw-bold fs-5 btn btn-light w-100" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px">
                        ดูทั้งหมด
                    </a>
                </div>
            </div>
            <div class="col-xl-5 d-flex flex-column align-items-center justify-content-end mt-4 mt-xl-0">
                <div class="row w-100 bg-black-opacity-section6 p-2 align-items-center justify-content-center">
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/1.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">การให้บริการ</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/2.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">การจัดซื้อจัดจ้าง<br>หรือจัดหาพัสดุ</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/3.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">การจัดการเรื่อง<br>ร้องเรียนทุจริต</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/4.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">ส่งเสริมความโปร่งใส<br>และแผนป้องกัน <br> การทุจริต</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/5.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">แผนการใช้จ่ายงบ<br>ประมาณประจำปี</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/6.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">รายงานกิจ<br>การสภา</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/7.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">ดาวน์โหลด<br>แบบฟอร์ม</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="#" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/8.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">การบริหารและพัฒนา<br>ทรัพยากรบุคคล</p>
                        </a>
                    </div>
                </div>
                <a href="#" class="calendar-link mt-3">
                    <img src="{{asset('pages/home/section-6/ปฏืทิน.png')}}" alt="calendar" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
    <script>
        const mockData = @json($mockData); // แปลงข้อมูลจาก PHP เป็น JSON
        let activeButton = null;
    
        function changeContent(type, element) {
            let contentSection = document.getElementById("contentSection");
            contentSection.innerHTML = ""; // เคลียร์ข้อมูลเก่า
    
            mockData[type].forEach(item => {
                contentSection.innerHTML += `
                    <a href="#" class="link-section6 text-black">
                        <img src="{{ asset('pages/home/section-6/icon_ประกาศ.png') }}" alt="icon_ประกาศ" style="width: 100px;">
                        <div class="bg-white lh-sm p-2 w-100" style="border-radius:20px;">
                            <span class="fw-bold">${item.title}</span> <br>
                            <span class="fs-6">${item.detail}</span> <br>
                            <span class="date-orange-section6 px-2 fs-6">
                                ${item.date}
                            </span>
                        </div>
                    </a>
                `;
            });
    
            // เปลี่ยนสีให้หัวข้อที่คลิก
            if (activeButton) {
                activeButton.classList.remove('active'); // ลบคลาส active ออกจากปุ่มก่อนหน้า
            }
            element.classList.add('active'); // เพิ่มคลาส active ให้ปุ่มที่เลือก
            activeButton = element; // เก็บค่า activeButton ไว้
        }
    </script>
</main>
