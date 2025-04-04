@extends('layouts.sub-layout')
@section('title', 'กระดานกระทู้')
@section('content')
    <style>
        .bg {
            background-image: url('{{ asset('pages/home/section-5/bg-5.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .custom-gradient-shadow {
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3),
                0 0 50px -10px rgba(3, 175, 255, 0.8),
                0 0 50px -10px rgba(0, 132, 255, 0.8);
            background-color: #ffffff;
        }

        .forum-card {
            border: 1px solid #015fac;
            /* กำหนดเส้นขอบที่ถูกต้อง */
            transition: transform 0.2s, box-shadow 0.2s;
            text-decoration: none;
            /* ลบขีดเส้นใต้ */
            color: inherit;
            /* ให้สีตัวอักษรไม่เปลี่ยน */
            display: block;
            /* ทำให้คลิกได้เต็มพื้นที่ */
        }


        .forum-card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .forum-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .hidden-img {
            display: none;
        }
    </style>

    <div class="bg py-5">
        <div class="container p-5 custom-gradient-shadow">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3">
                <p class="fs-2 fw-bold text-center mb-0">กระดานกระทู้</p> <!-- แก้ไข mb-0 เพื่อไม่ให้มี margin ด้านล่าง -->
                <a href="#" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#createForumModal">สร้างกระทู้</a>
            </div>


            @php
                // ม็อกข้อมูลกระทู้ร้องเรียน
                $complaints = [
                    (object) [
                        'id' => 1,
                        'title' => 'น้ำประปาไม่ไหลมาหลายวัน',
                        'description' => 'พื้นที่หมู่ 5 ไม่มีน้ำประปาใช้มานาน 3 วันแล้ว ช่วยตรวจสอบด้วยครับ',
                        'author' => 'สมชาย บ้านนา',
                        'image' => 'images/section-5/logo.png',
                        'comments_count' => 8,
                        'created_at' => '2025-03-05 14:30:00', // วันที่ตั้งกระทู้
                    ],
                    (object) [
                        'id' => 2,
                        'title' => 'ไฟถนนดับมานาน',
                        'description' => 'ไฟถนนแถวซอย 4 ดับหมดเลย ทำให้กลางคืนมืดมาก ไม่ปลอดภัย',
                        'author' => 'แม่สมปอง',
                        'image' => null,
                        'comments_count' => 15,
                        'created_at' => '2025-03-04 09:00:00', // วันที่ตั้งกระทู้
                    ],
                    (object) [
                        'id' => 3,
                        'title' => 'ถนนพังเป็นหลุมเยอะมาก',
                        'description' => 'ถนนเส้นหลักของหมู่บ้านมีหลุมบ่อเยอะ รถวิ่งลำบากมาก',
                        'author' => 'ลุงดำ',
                        'image' => 'images/section-5/logo.png',
                        'comments_count' => 20,
                        'created_at' => '2025-03-03 16:45:00', // วันที่ตั้งกระทู้
                    ],
                    (object) [
                        'id' => 4,
                        'title' => 'เสียงดังจากสถานบันเทิง',
                        'description' => 'ร้านเหล้าเปิดเสียงดังมากจนดึก ชาวบ้านนอนไม่ได้เลย',
                        'author' => 'น้าสมบัติ',
                        'image' => null,
                        'comments_count' => 5,
                        'created_at' => '2025-03-02 18:30:00', // วันที่ตั้งกระทู้
                    ],
                ];
            @endphp


            @foreach ($complaints as $forum)
                <a href="{{route('forum_details_pages')}}" class="forum-card rounded mb-2">
                    <div class="card p-3 shadow-sm">
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <!-- แสดงรูปถ้ามี -->
                            @if ($forum->image)
                                <img src="{{ asset($forum->image) }}" alt="Forum Image" class="forum-img rounded me-3">
                            @endif

                            <!-- ข้อมูลกระทู้ -->
                            <div class="flex-grow-1">
                                <h5 class="mb-1">{{ $forum->title }}</h5>
                                <p class="text-muted mb-1">{{ $forum->description }}</p>

                                <!-- แสดงวันที่ตั้งกระทู้ -->
                                <div class="text-muted small">
                                    <span>โพสต์โดย: <strong>{{ $forum->author }}</strong></span>
                                </div>
                                <div class="d-flex flex-column flex-lg-row justify-content-between text-muted small">
                                    <span>วันที่ตั้งกระทู้:
                                        {{ \Carbon\Carbon::parse($forum->created_at)->format('d/m/Y H:i') }}</span>
                                    <span><i class="bi bi-chat-dots"></i> {{ $forum->comments_count }} ความคิดเห็น</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Modal -->
        <div class="modal fade" id="createForumModal" tabindex="-1" aria-labelledby="createForumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createForumModalLabel">สร้างกระทู้ใหม่</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- ฟอร์มสร้างกระทู้ หรือ เนื้อหาอื่นๆ -->
                        <form>
                            <div class="mb-3">
                                <label for="forumTitle" class="form-label">หัวข้อกระทู้</label>
                                <input type="text" class="form-control" id="forumTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="forumDescription" class="form-label">รายละเอียด</label>
                                <textarea class="form-control" id="forumDescription" rows="3" required></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-success">สร้างกระทู้</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
