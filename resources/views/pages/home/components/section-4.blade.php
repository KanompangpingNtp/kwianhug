<head>
    <style>
        .bg-page4 {
            background-image: url('{{ asset('pages/home/section-4/bg-4.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 2rem 0rem;
        }

        .title-section4 {
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

        .bg-card-layout {
            background: linear-gradient(to bottom, #00c086, #0090fd);
            border-radius: 20px;
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

        .hover-card-section4 {
            transition: all 0.3s ease-in-out;
        }

        .hover-card-section4:hover {
            background-color: rgba(255, 165, 0, 0.1);
            /* เปลี่ยนสีพื้นหลังเป็นส้มอ่อน */
            transform: scale(1.03);
            /* ขยายเล็กน้อย */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            /* เพิ่มเงา */
        }

        .bg-btn-section4 {
            background: linear-gradient(to bottom, #fc654d, #eb8f2c);
            border-radius: 15px;
            color: white;
            font-size: 1.5rem;
            /* fs-3 */
            padding: 0.3rem 2rem;
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

        .bg-btn-section4:hover {
            background: linear-gradient(to bottom, #fc654d, #eb8f2c);
            /* เปลี่ยนสีเมื่อ hover */
            transform: scale(1.03);
            /* ขยายปุ่มเล็กน้อย */
        }

        .bg-e-libraly {
            background: linear-gradient(to bottom, #0590f8, #ef8e27);
            border-radius: 20px;
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

        .bg-orange-section4 {
            background: linear-gradient(to bottom, #f18c27, #fc644e);
            border-radius: 25px;
            box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease-in-out;
        }

        /* เพิ่มเอฟเฟกต์ Hover */
        .bg-orange-section4:hover {
            transform: scale(1.03);
            /* ขยายขนาดเล็กน้อย */
            filter: brightness(1.1);
            /* เพิ่มความสว่าง */
        }

        .bg-green-section4 {
            position: relative;
            background: linear-gradient(to bottom, #dffc8e, #3acd01);
            border-radius: 25px;
            box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease-in-out;
        }

        .bg-green-section4 img {
            position: absolute;
            /* ตั้งค่าให้ QR code อยู่เหนือ bg */
            top: 40%;
            right: -30%;
            /* ตั้งให้อยู่กลาง */
            transform: translateY(-50%);
            /* จัดให้อยู่กึ่งกลางในแนวดิ่ง */
            z-index: 10;
            /* ให้ QR code อยู่เหนือส่วนอื่น */
            max-width: 45%;
            /* ขยาย QR code เมื่อขนาดเกิน */
            transition: all 0.3s ease-in-out;
            
            /* เพิ่มการเปลี่ยนแปลงที่นุ่มนวล */
        }

    </style>
</head>

<main class="d-flex bg-page4">
    <div class="container ">
        <div class="row w-100">
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center">
                <div class="title-section4 text-center">
                    ข่าวกิจกรรม
                </div>
                <div class="bg-card-layout p-2 pt-3 row w-100 justify-content-center align-items-center">
                    @for ($i = 0; $i < 4; $i++)
                        <a href="#"
                            class="col-xl-6 d-flex flex-column flex-sm-row justify-content-center align-items-center align-items-sm-start gap-1 mb-2 p-2 text-decoration-none text-dark hover-card-section4"
                            style="border-radius: 10px;">
                            <div class="bg-white" style="border-radius: 10px;">
                                <img src="{{ asset('pages/home/section-4/Logo.png') }}" alt="logo" 
                                     style="border-radius: 10px; width: 150px; height: 110px; object-fit: contianer;">
                            </div>
                            
                            <div class="d-flex flex-column justify-content-start align-items-start">
                                <?php
                                // Mock ข้อมูล
                                $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                                                               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                                                               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                                                                               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
                                
                                // กำหนดจำนวนตัวอักษรสูงสุด
                                $maxLength = 92;
                                
                                // ตัดข้อความตามจำนวนตัวอักษรที่กำหนด
                                $trimmedText = mb_strlen($text, 'UTF-8') > $maxLength ? mb_substr($text, 0, $maxLength, 'UTF-8') . '...' : $text;
                                ?>

                                <div style="background: linear-gradient(to bottom, #f8f8f8af, #f8f8f8af); border-radius:10px; font-size:16px;"
                                    class="p-2 lh-sm">
                                    <?php echo $trimmedText; ?>
                                </div>


                                <div class="d-flex justify-content-start align-items-center mt-1 px-2 py-1"
                                    style="background: linear-gradient(to bottom, #f8f8f8af, #f8f8f8af); border-radius:10px; font-size:16px;">
                                    <img src="{{ asset('pages/home/section-4/alarm.png') }}" alt="clock">dd-mm-yyyy
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
                <a href="#" class="bg-btn-section4">ดูกิจกรรมทั้งหมด <img
                        src="{{ asset('pages/home/section-3/icon-pointer.png') }}" alt="icon-pointer"
                        style="width: 35px;"></a>
                <div class="d-flex flex-column flex-xl-row justify-content-between align-items-center mt-5 gap-5">
                    <div class="bg-e-libraly p-3 d-flex flex-column justify-content-start align-items-center">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <div class="fs-2 text-white fw-bold" style="line-height: 0.6;">
                                E - LIBRARY <br> <span class="text-black fs-5">เทศบาลตำบลเกวียนหัก</span>
                            </div>
                            <a href="#" class="btn btn-light fw-bold" style="border-radius: 10px;">
                                อ่านทั้งหมด
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-4/book.png') }}" alt="book" style="width: 20rem;">
                    </div>
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <a href="#"
                            class="bg-orange-section4 text-decoration-none d-flex justify-content-center align-items-center  py-2 px-5 text-white lh-1 text-center mb-5">
                            <div style="white-space: nowrap;">
                                <span class="fs-2">ONE</span><span class="fs-6"> STOP SERVICE</span><br><span class="text-dark fs-6 fw-bold">ระบบบริการครบวงจร <br> เทศบาลตำบลเกวียนหัก</span>
                            </div>
                            
                            <img src="{{ asset('pages/home/section-4/personal.png') }}" alt="icon">
                        </a>
                        <div class="bg-green-section4 d-flex justify-content-center align-items-center py-3 px-5">
                            <div class="text-start" style="line-height: 0.9;">
                                <span class="fs-3 fw-bold text-white"
                                    style="text-shadow:
                2px 2px 2px rgba(0, 0, 0, 0.8),
                -2px -2px 2px rgba(0, 0, 0, 0.8),
                2px -2px 2px rgba(0, 0, 0, 0.8),
                -2px 2px 2px rgba(0, 0, 0, 0.8);">เพิ่มเพื่อน
                                    Line</span><br><span class="text-dark fs-6 fw-bold">เทศบาลตำบลเกวียนหัก <br>
                                    @...................................................</span>
                            </div>
                            <img src="{{ asset('pages/home/section-4/qr-code.png') }}" alt="qr-code">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center mt-3">
                <!-- Facebook Page Plugin -->
                <div class="fb-page text-center mt-5" data-href="https://www.facebook.com/Kwianhakdistrict/" data-tabs="timeline" data-height="700" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="width: 100%;">
                    <blockquote cite="https://www.facebook.com/Kwianhakdistrict/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/Kwianhakdistrict/">Kwianhakdistrict</a>
                    </blockquote>
                </div>
            </div>
            
            <!-- JavaScript SDK ของ Facebook -->
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0"></script>
            
        </div>
    </div>
</main>
