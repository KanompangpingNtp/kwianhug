<head>
    <style>
        .bg-page7 {
            background-image: url('{{ asset('pages/home/section-7/bg-7.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 3rem 0rem;
        }

        .title-section7 {
            font-size: 40px;
            font-weight: bold;
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .bg-orange-section7 {
            background: linear-gradient(to bottom, #ff9640, #ff7800);
            border-radius: 20px;
        }
    </style>
</head>

<main class="d-flex bg-page7">
    <div class="container d-flex flex-column justify-content-center align-items-center px-3">
        <div class="title-section7 text-center" style="line-height: 0.8;">
            แนะนำสถานที่ท่องเที่ยว<br><span class="fs-4">เทศบาลตำบลเกวียนหัก</span>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-4  gap-2">
            <div class="bg-orange-section7 p-2">
                <div class="bg-white" style="border-radius: 20px;">
                    <img src="{{ asset('pages/home/section-1/bg-1.png') }}" alt="tour" class="img-fluid"
                        style="border-radius: 20px;">
                </div>
            </div>
            <div class="bg-orange-section7 p-2">
                <div class="bg-white" style="border-radius: 20px;">
                    <img src="{{ asset('pages/home/section-2/bg-2.png') }}" alt="tour" class="img-fluid"
                        style="border-radius: 20px;">
                </div>
            </div>
            <div class="bg-orange-section7 p-2">
                <div class="bg-white" style="border-radius: 20px;">
                    <img src="{{ asset('pages/home/section-3/bg-3.png') }}" alt="tour" class="img-fluid"
                        style="border-radius: 20px;">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-2 mt-3">
            <button>Pre</button>
            <div class="bg-orange-section7 p-1">
                <div class="bg-white px-4" style="border-radius: 20px;">
                    Name
                </div>
            </div>
            <button>Next</button>
        </div>
    </div>
</main>
