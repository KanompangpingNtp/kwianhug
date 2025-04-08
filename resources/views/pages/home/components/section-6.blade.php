@php
    // $egp = [
    //     ['id' => 1, 'title_name' => 'ประกาศ E-GP', 'date' => '2024-03-24'],
    //     ['id' => 2, 'title_name' => 'ประกาศ E-GP', 'date' => '2024-03-23'],
    //     ['id' => 3, 'title_name' => 'ประกาศ E-GP', 'date' => '2024-03-22'],
    //     ['id' => 4, 'title_name' => 'ประกาศ E-GP', 'date' => '2024-03-21'],
    //     ['id' => 5, 'title_name' => 'ประกาศ E-GP', 'date' => '2024-03-20'],
    // ];

    // $procurement = [
    //     ['id' => 1, 'title_name' => 'ประกาศจัดซื้อจัดจ้าง 1', 'date' => '2024-03-22'],
    //     ['id' => 2, 'title_name' => 'ประกาศจัดซื้อจัดจ้าง 2', 'date' => '2024-03-21'],
    // ];

    // $procurementResults = [
    //     ['id' => 1, 'title_name' => 'ผลประกาศจัดซื้อจัดจ้าง 1', 'date' => '2024-03-20'],
    //     ['id' => 2, 'title_name' => 'ผลประกาศจัดซื้อจัดจ้าง 2', 'date' => '2024-03-19'],
    // ];

    // $average = [
    //     ['id' => 1, 'title_name' => 'ประกาศราคากลาง 1', 'date' => '2024-03-18'],
    //     ['id' => 2, 'title_name' => 'ประกาศราคากลาง 2', 'date' => '2024-03-17'],
    // ];

    // $resultsprocurement = [
    //     ['id' => 1, 'title_name' => 'รายงานผลจัดซื้อจัดจ้าง 1', 'date' => '2024-03-16'],
    //     ['id' => 2, 'title_name' => 'รายงานผลจัดซื้อจัดจ้าง 2', 'date' => '2024-03-15'],
    // ];
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
        color: #000;
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
        transform: rotate(10deg);
        /* ปรับองศาตามที่ต้องการ */
    }

    .bg-black-opacity-section6 {
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
        transition: transform 0.3s ease, opacity 0.3s ease;
        /* ทำให้การเปลี่ยนแปลงของภาพนุ่มนวล */
    }

    /* เมื่อเมาส์ชี้ไปที่ลิงค์ */
    .calendar-link:hover img {
        transform: scale(1.1);
        /* ขยายขนาดภาพเล็กน้อย */
        opacity: 0.9;
        /* ลดความทึบของภาพเล็กน้อย */
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
                    <div id="btnEgpAnnouncement" class="bg-btn-egp p-2 py-3 text-center lh-sm text-nowrap active"
                        onclick="changeContent('egp', {{ json_encode($egp) }})"
                        data-link="{{ route('EGPDetail', ['id' => ':id']) }}">
                        ประกาศ E-GP
                    </div>
                    <div id="btnProcurementAnnouncement" class="bg-btn-egp p-2 text-center lh-sm"
                        onclick="changeContent('ประกาศจัดซื้อจัดจ้าง', {{ json_encode($procurement) }})"
                        data-link="{{ route('ProcurementDetail', ['id' => ':id']) }}">
                        ประกาศจัดซื้อจัดจ้าง
                    </div>
                    <div id="btnProcurementResults" class="bg-btn-egp p-2 text-center lh-sm"
                        onclick="changeContent('ผลประกาศจัดซื้อจัดจ้าง', {{ json_encode($procurementResults) }})"
                        data-link="{{ route('ProcurementResultsDetail', ['id' => ':id']) }}">
                        ผลประกาศจัดซื้อจัดจ้าง
                    </div>
                    <div id="btnAveragePrice" class="bg-btn-egp p-2 text-center lh-sm"
                        onclick="changeContent('ประกาศราคากลาง', {{ json_encode($averageprice) }})"
                        data-link="{{ route('AveragePriceDetail', ['id' => ':id']) }}">
                        ประกาศราคากลาง
                    </div>
                    <div id="btnProcurementReport" class="bg-btn-egp p-2 text-center lh-sm"
                        onclick="changeContent('รายงานผลจัดซื้อจัดจ้าง', {{ json_encode($procurementreport) }})"
                        data-link="{{ route('ProcurementReportDetail', ['id' => ':id']) }}">
                        รายงานผลจัดซื้อจัดจ้าง
                    </div>
                </div>

                <div class="bg-blue-section6 p-2 mt-4 w-100">
                    <div class="bg-orange-section6 px-2 pt-3 pb-5 d-flex flex-column justify-content-start align-items-center gap-1"
                        id="contentArea">

                    </div>
                    <a href="{{route('TreasuryAnnouncementData')}}" class="text-center fw-bold fs-5 btn btn-light w-100"
                        style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px">
                        ดูทั้งหมด
                    </a>
                </div>
            </div>
            <div class="col-xl-5 d-flex flex-column align-items-center justify-content-end mt-4 mt-xl-0">
                <div class="row w-100 bg-black-opacity-section6 p-2 align-items-center justify-content-center">
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="https://kwianhug.sosmartsolution.com/PerformanceResults/show/section/4" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/1.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">
                                การให้บริการ</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="https://kwianhug.sosmartsolution.com/PerformanceResults/show/section/3" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/2.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">
                                การจัดซื้อจัดจ้าง<br>หรือจัดหาพัสดุ</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="https://kwianhug.sosmartsolution.com/PerformanceResults/show/section/topic/38" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/3.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">
                                การจัดการเรื่อง<br>ร้องเรียนทุจริต</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="https://kwianhug.go.th/PerformanceResults/show/section/11" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/4.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">
                                ส่งเสริมความโปร่งใส<br>และแผนป้องกัน <br> การทุจริต</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="https://kwianhug.go.th/OperationalPlan/show/section/13" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/5.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">
                                แผนการใช้จ่ายงบ<br>ประมาณประจำปี</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="https://kwianhug.sosmartsolution.com/PerformanceResults/show/section/12" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/6.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">
                                รายงานกิจ<br>การสภา</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="https://kwianhug.go.th/MenuForPublic/show/section/7" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/7.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">
                                ดาวน์โหลด<br>แบบฟอร์ม</p>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 my-3">
                        <a href="https://kwianhug.go.th/PerformanceResults/show/section/4" class="text-decoration-none d-block position-relative link-section5-effect">
                            <img src="{{ asset('pages/home/section-6/8.png') }}" alt="icon"
                                class="d-block mx-auto">
                            <p class="position-absolute start-50 translate-middle text-center text-dark bloom-white mb-0 py-2 lh-1"
                                style="white-space: nowrap; overflow: visible; text-overflow: clip; font-size:16px;">
                                การบริหารและพัฒนา<br>ทรัพยากรบุคคล</p>
                        </a>
                    </div>
                </div>
                <a href="https://calendar.google.com/calendar/u/0/r" class="calendar-link mt-3">
                    <img src="{{ asset('pages/home/section-6/ปฏืทิน.png') }}" alt="calendar" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // กำหนดข้อมูลเริ่มต้นของปุ่ม
            let initialData = {
                'egp': @json($egp),
                'จัดซื้อจัดจ้าง': @json($procurement),
                'ผลประกาศจัดซื้อจัดจ้างประจำปี': @json($procurementResults),
                'ประกาศราคากลาง': @json($averageprice),
                'รายงานผลจัดซื้อจัดจ้าง': @json($procurementreport)
            };

            // ตั้งค่าลิงก์เริ่มต้นให้ปุ่มทั้งหมด
            for (let [key, value] of Object.entries(initialData)) {
                if (value.length > 0) {
                    let firstId = value[0]?.id || 1;
                    let button = document.querySelector(`[onclick*="changeContent('${key}'"]`);
                    if (button) {
                        let link = button.getAttribute('data-link').replace(':id', firstId);
                        button.setAttribute('data-link', link);
                    }
                }
            }

            // โหลดหมวดหมู่แรกสุดที่มีข้อมูล
            for (let [topic, data] of Object.entries(initialData)) {
                if (data.length > 0) {
                    changeContent(topic, data);
                    break;
                }
            }
        });

        function changeContent(topic, data) {
            allItems = data;

            if (data.length > 0) {
                let firstId = data[0].id;
                let activeButton = document.querySelector(`[onclick*="changeContent('${topic}'"]`);

                if (activeButton) {
                    let linkTemplate = activeButton.getAttribute('data-link');
                    baseLink = linkTemplate.replace(':id', firstId);
                }
            } else {
                baseLink = "#";
            }

            displayItems();
            setActiveButton(topic);
        }


        function setActiveButton(topic) {
            const buttons = ['btnEgpAnnouncement', 'btnProcurementAnnouncement', 'btnProcurementResults', 'btnAveragePrice',
                'btnProcurementReport'
            ];
            const topics = ['egp', 'จัดซื้อจัดจ้าง', 'ผลประกาศจัดซื้อจัดจ้างประจำปี',
                'ประกาศราคากลาง', 'รายงานผลจัดซื้อจัดจ้าง'
            ];

            buttons.forEach(buttonId => document.getElementById(buttonId).classList.remove('active'));

            const activeButtonIndex = topics.indexOf(topic);
            if (activeButtonIndex !== -1) {
                document.getElementById(buttons[activeButtonIndex]).classList.add('active');
            }
        }

        let currentPage = 1;
        const itemsPerPage = 6;
        let allItems = [];
        let baseLink = "#";

        function displayItems() {
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = currentPage * itemsPerPage;
            const itemsToDisplay = allItems.slice(startIndex, endIndex);

            let contentArea = document.getElementById('contentArea');
            contentArea.innerHTML = '';

            itemsToDisplay.forEach((item) => {
                let newContent = document.createElement('a');

                // ใช้ baseLink ที่ตั้งไว้จาก changeContent() แล้วแทนค่า :id ด้วย item.id
                let itemLink = baseLink.replace(/\d+$/, item.id);

                newContent.href = itemLink;
                newContent.className = "link-section6";
                newContent.style.textDecoration = "none";

                newContent.innerHTML = `
            <img src="{{ asset('pages/home/section-6/icon_ประกาศ.png') }}" alt="icon_ประกาศ" style="width: 100px;">
                        <div class="bg-white lh-sm p-2 w-100" style="border-radius:20px;">
                            <span class="fw-bold">${truncateText(item.title_name, 180)}</span> <br>
                            <span class="date-orange-section6 px-2 fs-6">
                                ${item.date}
                            </span>
                        </div>`;

                contentArea.appendChild(newContent);
            });
        }

        function truncateText(text, maxLength) {
            return text.length > maxLength ? text.substring(0, maxLength) + '...' : text;
        }
    </script>
</main>
