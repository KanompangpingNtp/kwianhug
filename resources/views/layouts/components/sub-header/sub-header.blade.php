<style>
    .bg-header {
        background-image: url('{{ asset('navbar/netural.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 90vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }

    .bg-runtext {
        background-image: url('{{ asset('navbar/bg-runtext.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 10vh;
        padding: 1rem;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }

    


    .hero-section {
        width: 100%;
        height: 100vh;
        /* Full screen height */
        overflow: hidden;
        position: relative;
    }


    .video-container {
        position: relative;
        width: 100%;
        min-height: 105vh;
        overflow: visible;
    }

    .video-container video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* ปุ่มค้นหา */
    .search-btn {
        border-radius: 10px 0 0 10px;
        background: linear-gradient(to bottom, #fb634e, #f28c25);
        border: 2px solid #f28c25;
        /* เส้นขอบ */
        transition: all 0.3s ease-in-out;
    }

    /* เมื่อ hover ที่ปุ่ม */
    .search-btn:hover {
        background: linear-gradient(to bottom, #f28c25, #fb634e);
        /* สลับไล่สี */
        border-color: #fb634e;
        /* เปลี่ยนสีขอบ */
    }

    /* ช่องค้นหา */
    .search-input {
        width: 180px;
        border-radius: 0 10px 10px 0;
        border: 2px solid #f28c25;
        /* เส้นขอบ */
        transition: border-color 0.3s ease-in-out;
    }

    /* เมื่อ focus ที่ช่องค้นหา */
    .search-input:focus {
        border-color: #fb634e;
        /* เปลี่ยนสีขอบเมื่อพิมพ์ */
        outline: none;
        box-shadow: 0px 0px 5px rgba(251, 99, 78, 0.5);
        /* เงา */
    }
    .search-btn-container{
        width: 20%;
    }
    @media (max-width: 1199px) { /* สำหรับหน้าจอที่เล็กกว่า xl */
    .search-input {
        width: 100% !important; /* ให้ช่องค้นหาขยายเต็มที่ */
    }
    .search-btn-container{
        width: 100%;
    }
}

</style>
<main class="d-flex flex-column align-items-center justify-content-start" style="margin-top:-2rem;">



    <div class="bg-runtext w-100 d-flex align-items-center">
        <div class="container d-flex flex-column-reverse flex-xl-row align-items-center pt-3">
            <div class="d-flex align-items-center search-btn-container" style="height: 38px; border-radius:20px;">
                <button class="btn text-white search-btn" style="border-top-left-radius:20px; border-bottom-left-radius:20px;">
                    <i class="fa fa-search"></i>
                </button>
                <input type="text" class="form-control search-input flex-grow-1 flex-xl-auto" style="border-top-right-radius:20px; border-bottom-right-radius:20px;" placeholder="ค้นหา...">
            </div>
            
            <div class="d-flex w-100 mb-2 mb-xl-0">
                <div class="px-3 py-1 text-wrap text-white ms-4 me-2 d-none d-md-block text-center" style="background: linear-gradient(to bottom, #f28c25, #fb634e); border-radius:20px; width: 8rem;">
                    วิสัยทัศน์
                </div>
                <div class="bg-text w-100">
                    <div
                        style="white-space: nowrap; overflow: hidden; position: relative; width: 100%; height: 38px; background: linear-gradient(to right, #ffffff, #ffffff); border-radius: 20px; border: 3px solid #f28c25; padding: 4px;">
                        <span
                            style="display: inline-block; position: absolute; white-space: nowrap; animation: marquee 15s linear infinite; color: black; font-size: 20px; font-weight: bold; ">
                            วิสัยทัศน์ : เป็นศูนย์รวมกลไกในการพัฒนาตำบลที่ยั่งยืน
                            ในการจัดบริการสาธารณะเพื่อให้ประชาชนมีคุณภาพชีวิตที่ดี
                        </span>
                    </div>
                </div>
            </div>
            

        </div>
    </div>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>


</main>
