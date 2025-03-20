@php
    $tourImages = [
        [
            'name' => 'สถานที่ท่องเที่ยวที่ 1',
            'images' => [
                'pages/home/section-1/bg-1.png',
                'pages/home/section-2/bg-2.png',
                'pages/home/section-3/bg-3.png',
            ],
        ],
        [
            'name' => 'สถานที่ท่องเที่ยวที่ 2',
            'images' => [
                'pages/home/section-4/bg-4.png',
                'pages/home/section-5/bg-5.png',
                'pages/home/section-6/bg-6.png',
            ],
        ],
    ];
@endphp

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
            background: linear-gradient(to top, #ff9640, #ff7800);
            padding: 5px;
            border-radius: 20px;
            overflow: hidden;
            width: 350px;
            height: 300px;
        }

        .slide-container-section7 {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;

        }

        .bg-orange-section7 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        .name-box {
            background-color: #ff9640;
            color: white;
            padding: 8px 20px;
            border-radius: 10px;
            margin-top: 10px;
            text-align: center;
        }

        .navigation-buttons-section7 {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
            align-items: center;
        }

        .navigation-buttons-section7 img {
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .navigation-buttons-section7 img:hover {
            transform: scale(1.1);
            filter: drop-shadow(3px 3px 10px rgba(255, 169, 89, 0.9));
        }

        .bg-btn-section7 {
            background: linear-gradient(to bottom, #fc654d, #eb8f2c);
            border-radius: 25px;
            color: white;
            font-size: 1.5rem;
            /* fs-3 */
            padding: 0.3rem 5rem;
            /* p-2 */
            margin-top: 1rem;
            /* mt-3 */
            font-weight: bold;
            /* fw-bold */
            text-align: center;
            /* text-center */
            text-decoration: none;
            /* text-decoration-none */
            display: inline-block;
            transition: all 0.3s ease;
            /* เพิ่ม transition เพื่อให้การเปลี่ยนแปลงดูนุ่มนวล */
        }

        .bg-btn-section7:hover {
            background: linear-gradient(to bottom, #fc654d, #eb8f2c);
            /* เปลี่ยนสีเมื่อ hover */
            transform: scale(1.03);
            /* ขยายปุ่มเล็กน้อย */
        }

        @media (max-width: 1200px) {
            .bg-orange-section7 {
                width: 300px;
                height: 250px;
            }
        }

        /* ปรับขนาดเพิ่มเติมสำหรับหน้าจอขนาดเล็กกว่า */
        @media (max-width: 992px) {
            .bg-orange-section7 {
                width: 220px;
                height: 200px;
            }
        }

        @media (max-width: 768px) {
            .bg-orange-section7 {
                width: 300px;
                height: 180px;
            }


            .navigation-buttons-section7 {
                gap: 5px;
            }

            .navigation-buttons-section7 img {
                padding: 10px 0px;
            }
        }
    </style>
</head>

<main class="bg-page7 d-flex ">
    <div class="container d-flex flex-column justify-content-center align-items-center px-3">
        <div class="title-section7 text-center" style="line-height: 0.8;">
            แนะนำสถานที่ท่องเที่ยว<br><span class="fs-4">เทศบาลตำบลเกวียนหัก</span>
        </div>

        <!-- Slide images and name -->
        <div class="slide-container-section7 d-flex flex-column flex-md-row mt-5" id="slideContainer">
            <!-- Initial 3 images will be loaded here -->
        </div>

        <!-- Navigation buttons -->
        <div class="navigation-buttons-section7 mt-4">
            {{-- <button id="prevBtn">Prev</button> --}}
            <img src="{{ asset('pages/home/section-7/pre.png') }}" alt="pre" id="prevBtn">
            <div class="p-1" style=" background: linear-gradient(to top, #ff9640, #ff7800); border-radius:15px;">
                <div id="nameTour" class="bg-white text-nowrap py-1 px-4 fw-bold" style="border-radius: 10px;">
                    name
                </div>
            </div>
            <img src="{{ asset('pages/home/section-7/next.png') }}" alt="pre" id="nextBtn">
            {{-- <button id="nextBtn">Next</button> --}}
        </div>
        <a href="#" class="bg-btn-section7">ดูทั้งหมด </a>
    </div>
</main>

<script>
    let currentIndex = 0;
    const tourImages = @json($tourImages);
    const imagesPerSlide = 3; // Number of images to show at a time

    function updateTour() {
        const slideContainer = document.getElementById('slideContainer');
        const nameTour = document.getElementById('nameTour');

        slideContainer.innerHTML = ''; // Clear previous images

        // Get the current set of images to display
        const tourSet = tourImages.slice(currentIndex, currentIndex + 1);

        // Add the images to the slide container
        tourSet.forEach(tour => {
            tour.images.forEach((image, idx) => {
                const slideItem = document.createElement('div');
                slideItem.classList.add('bg-orange-section7');

                const img = document.createElement('img');
                img.src = `{{ asset('${image}') }}`;
                slideItem.appendChild(img);

                const nameBox = document.createElement('div');
                nameBox.classList.add('name-box');
                nameBox.textContent = tour.name;
                slideItem.appendChild(nameBox);

                slideContainer.appendChild(slideItem);
            });

            // Update the name in the #nameTour div
            nameTour.textContent = tour.name;
        });
    }

    document.getElementById('nextBtn').addEventListener('click', function() {
        if (currentIndex + 1 < tourImages.length) {
            currentIndex++;
            updateTour();
        }
    });

    document.getElementById('prevBtn').addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateTour();
        }
    });

    // Initial load
    updateTour();
</script>
