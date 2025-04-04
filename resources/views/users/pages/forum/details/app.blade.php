@extends('layouts.sub-layout')
@section('title', 'รายละเอียดกระทู้')
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
            transition: transform 0.2s, box-shadow 0.2s;
            text-decoration: none;
            color: inherit;
            display: block;
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

        /* เพิ่มเส้นขอบให้ความคิดเห็น */
        .comment {
            border: 1px solid #015fac; /* สีเขียวสำหรับขอบ */
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            transition: box-shadow 0.2s ease;
        }

        .comment:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* เพิ่มการจัดการกับข้อความภายในความคิดเห็น */
        .comment p {
            margin-top: 10px;
        }

        .comment .text-muted {
            font-size: 0.9rem;
        }
    </style>

<div class="bg py-5">
    <div class="container p-5  custom-gradient-shadow">
        <p class="fs-2 fw-bold text-center mb-4">หัวข้อกระทู้: เสียงดังจากร้านเหล้า</p>

        <!-- ส่วนเนื้อหากระทู้ -->
        <div class="forum-content">
            <p class="text-muted">โพสต์โดย: <strong> พี่จ๋า</strong> | วันที่โพสต์: 11/03/2568</p>
            <div class="mb-4">
                <h5 class="fw-bold">รายละเอียด</h5>
                <p>กระทู้นี้เกี่ยวกับปัญหาของเสียงดังจากร้านเหล้าที่ทำให้ชาวบ้านในพื้นที่รอบๆ รบกวนการนอนหลับในช่วงกลางคืน โดยเฉพาะในช่วงเวลาหลัง 22:00 น. ปัญหานี้กลายเป็นประเด็นที่มีการพูดถึงในชุมชนอย่างกว้างขวาง ผู้โพสต์ได้แสดงความคิดเห็นเกี่ยวกับการควบคุมเสียงจากร้านเหล้าและเสนอแนวทางในการแก้ไขปัญหานี้ โดยมีการพูดถึงแนวคิดในการจัดระเบียบพื้นที่และการให้ความสำคัญกับสิทธิ์ของชาวบ้านในการมีพื้นที่ส่วนตัวที่สงบเงียบ.</p>
                
                <p>หลายคนในพื้นที่ได้แสดงความคิดเห็นว่าเสียงจากร้านเหล้ากำลังสร้างความเดือดร้อนและผลกระทบต่อการนอนหลับของชาวบ้าน นอกจากนี้ยังมีการแนะนำให้เพิ่มมาตรการควบคุมเสียงในเวลาค่ำคืน เช่น การใช้เทคโนโลยีควบคุมเสียง หรือการตั้งเวลาให้ร้านหยุดเสียงดังในช่วงเวลาที่เหมาะสม.</p>
            
                <p>ในส่วนของความคิดเห็นจากชาวบ้านที่ได้รับผลกระทบ ยังมีการเสนอให้มีการสร้างพื้นที่ส่วนตัวที่สงบเงียบสำหรับผู้ที่ต้องการการพักผ่อน และมีข้อเสนอให้มีการจัดสรรพื้นที่บรรเทาความเดือดร้อนจากเสียงรบกวนในเขตที่อยู่อาศัย.</p>
            </div>
            

            <!-- ส่วนความคิดเห็น -->
            <div class="comments-section mt-5">
                <h5 class="fw-bold">ความคิดเห็น ตัวอย่าง</h5>
                
                <!-- ตัวอย่างความคิดเห็น -->
                <div class="comment mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="text-muted">โพสต์โดย: <strong>น้าสมบัติ</strong></span>
                        <span class="text-muted small">วันที่: 10 ก.พ. 2025</span>
                    </div>
                    <p>เสียงดังจากร้านเหล้าอาจจะทำให้ชาวบ้านรบกวนการนอนหลับครับ ควรมีการปรับปรุง</p>
                </div>
                <!-- ตัวอย่างความคิดเห็นเพิ่มเติม -->
                <div class="comment mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="text-muted">โพสต์โดย: <strong>ลุงดำ</strong></span>
                        <span class="text-muted small">วันที่: 11 ก.พ. 2025</span>
                    </div>
                    <p>เห็นด้วยครับ ชาวบ้านควรมีพื้นที่ส่วนตัวมากกว่านี้ ควรมีการบังคับให้ร้านคุมเสียง</p>
                </div>

                <!-- ปุ่มสำหรับเพิ่มความคิดเห็น -->
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#commentModal">เพิ่มความคิดเห็น</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal สำหรับเพิ่มความคิดเห็น -->
<div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentModalLabel">เพิ่มความคิดเห็น</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <textarea class="form-control" id="commentText" rows="3" placeholder="พิมพ์ความคิดเห็นของคุณที่นี่..." required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary">โพสต์ความคิดเห็น</button>
            </div>
        </div>
    </div>
</div>

@endsection
