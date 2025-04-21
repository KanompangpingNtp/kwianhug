@extends('layouts.sub-layout')
@section('content')
<style>
    .bg {
        background-image: url('{{ asset('pages/home/section-5/bg-5.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    .custom-gradient-shadow {
        border-radius: 30px;
        box-shadow:
            0 4px 15px rgba(0, 123, 255, 0.3),
            0 0 50px -10px rgba(0, 198, 255, 0.8),
            0 0 50px -10px rgba(102, 204, 255, 0.8);
        background-color: #ffffff;
    }

    </style>
    <div class="bg py-5">
        <div class="container py-5 custom-gradient-shadow">
            <div class=" d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('navbar/logo.png') }}" alt="icon" class="mb-3" style="width: 150px; height: 150px;">
                <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1">
                        <span class="fw-bold fs-2">เทศบาลตำบลเกวียนหัก</span> <br>
                        <span class="fw-bold fs-4">Kwian Hug Subdistrict Municipality</span> <br>
                        <span class="text-muted fs-4">
                            111 หมู่ 4 ตำบลเกวียนหัก<br>
                            อำเภอขลุง จังหวัดจันทบุรี <br>
                            รหัสไปรษณีย์ 22110
                        </span>
                </div>
                <br>
                <div class="d-flex flex-column justify-content-center align-items-center lh-1 my-3">
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <div><strong>เบอร์ติดต่อ :</strong> 039493194</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <div><strong>Email :</strong> kwianhug1@gmail.com , saraban@kwianhug.go.th , admin@kwianhug.go.th
                        </div>
                    </div>
                </div>
                <br>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3895.7569573830992!2d102.19392127380137!3d12.465899925766147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31047c5e997f84fd%3A0xd5b78825ec66c2ac!2z4LmA4LiX4Lio4Lia4Liy4Lil4LiV4Liz4Lia4Lil4LmA4LiB4Lin4Li14Lii4LiZ4Lir4Lix4LiB!5e0!3m2!1sen!2sth!4v1744173103491!5m2!1sen!2sth"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
