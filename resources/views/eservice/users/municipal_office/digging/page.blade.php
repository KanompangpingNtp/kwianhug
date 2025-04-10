@extends('eservice.users.layout.layout')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">แบบฟอร์มการขออนุญาตขุดดินหรือถมดิน</h2>

    <form action="{{route('DiggingFormCreate')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <h4>ข้อมูลผู้ขออนุญาต</h4>

        <div class="row mb-3">
            <div class="col-12 col-md-2">
                <label for="salutation">คำนำหน้า :</label>
                <select class="form-select" id="salutation" name="salutation">
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="col-12 col-md-5">
                <label for="first_name">ชื่อ: <span class="text-danger">*</span></label>
                <input type="text" id="first_name" name="first_name" class="form-control" required>
            </div>
            <div class="col-12 col-md-5">
                <label for="last_name">นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="last_name" name="last_name" class="form-control" required>
            </div>
        </div>
        <style>
            #birth_day {
                border: none;
                /* ลบขอบ */
                background: transparent;
                /* ลบพื้นหลัง */
                box-shadow: none;
                /* ลบเงา */
            }
        </style>
        <div class="row mb-3">
            <div class="col-12 col-md-4 mb-3">
                <label for="house_number">ที่อยู่ตามสำเนาทะเบียนบ้าน: <span class="text-danger">*</span></label>
                <input type="text" id="house_number" name="house_number" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village">หมู่:</label>
                <input type="text" id="village" name="village" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley">ซอย:</label>
                <input type="text" id="alley" name="alley" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road">ถนน:</label>
                <input type="text" id="road" name="road" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict">ตำบล: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict" name="subdistrict" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district">อำเภอ: <span class="text-danger">*</span></label>
                <input type="text" id="district" name="district" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province" name="province" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code" name="postal_code" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="phone_number">โทรศัพท์: <span class="text-danger">*</span></label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" required>
            </div>
        </div>
        <hr>
        <h4>ข้อมูลสถานที่</h4>
        <div class="row mb-3">
            <div class="col-12 col-md-4 mb-3">
                <label for="fullname_address">เจ้าของที่ดิน: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_address" name="fullname_address" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="fullname_design">ผู้ออกแบบ: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_design" name="fullname_design" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="fullname_control">ผู้ควบคุมงาน: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_control" name="fullname_control" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="desire_detail">ความประสงค์จะทำการขุดดิน/ถมดิน ลึก/สูง (เมตร): <span class="text-danger">*</span></label>
                <input type="text" id="desire_detail" name="desire_detail" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="mouth_area">พื้นที่ปากบ่อ/ดินถม (เมตร): <span class="text-danger">*</span></label>
                <input type="text" id="mouth_area" name="mouth_area" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="area_detail">ที่อยู่ในโฉนดที่ดิน/น.ส.3/น.ส.3 ก/ส.ค.1 เลขที่ (เมตร): <span class="text-danger">*</span></label>
                <input type="text" id="area_detail" name="area_detail" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="document_permission">เอกสารสิทธิ์ในที่ดินที่มีชื่อ: <span class="text-danger">*</span></label>
                <input type="text" id="document_permission" name="document_permission" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_detail">ถนน:</label>
                <input type="text" id="road_detail" name="road_detail" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_detail">หมู่:</label>
                <input type="text" id="village_detail" name="village_detail" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_detail">ซอย:</label>
                <input type="text" id="alley_detail" name="alley_detail" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_detail">ตำบล: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_detail" name="subdistrict_detail" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_detail">อำเภอ: <span class="text-danger">*</span></label>
                <input type="text" id="district_detail" name="district_detail" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_detail">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_detail" name="province_detail" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_detail">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_detail" name="postal_code_detail" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="name_district_detail">ซึ่งอยู่ในเขต: <span class="text-danger">*</span></label>
                <input type="text" id="name_district_detail" name="name_district_detail" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="fix_day_detail">กำหนดเวลาแล้วเสร็จ (วัน): <span class="text-danger">*</span></label>
                <input type="text" id="fix_day_detail" name="fix_day_detail" class="form-control" required>
            </div>
        </div>
        <hr>

        <h4>ประเภทเอกสารที่แนบ</h4>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_1" value="option1" class="form-check-input">
            <label for="document_type_1" class="form-check-label">แผนผังบริเวณ แบบแปลน รายการประกอบแบบแปลนที่ถูกต้องตามกฎกระทรวงหรือ ข้อบัญญัติท้องถิ่นที่ออกตามกฏหมายว่าด้วยการขุดดินและถมดิน จำนวน 3 ชุด ชุดละ 1 แผ่น</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_2" value="option2" class="form-check-input">
            <label for="document_type_2" class="form-check-label">สำเนารายการคำนวณวิธีป้องกันการพังทลายของดิน จำนวน 1 ชุด ชุดละ 1 แผ่น</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_3" value="option3" class="form-check-input">
            <label for="document_type_3" class="form-check-label">สำเนาทะเบียนบ้านของผู้แจ้งในกรณีที่ผู้แจ้งเป็นบุคคลธรรมดา จำนวน 1 ฉบับ</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_4" value="option4" class="form-check-input">
            <label for="document_type_4" class="form-check-label">สำเนาทะเบียนบ้านของเจ้าของที่ดินในกรณีที่ผู้แจ้งไม่ได้เป็นเจ้าของที่ดิน จำนวน 1 ฉบับ</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_5" value="option5" class="form-check-input">
            <label for="document_type_5" class="form-check-label">สำเนาหนังสือรับรองการจดทะเบียนนิติบุคคลในกรณีที่ผู้แจ้งเป็นนิติบุคคล จำนวน 1 ฉบับ</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_6" value="option6" class="form-check-input">
            <label for="document_type_6" class="form-check-label">หนังสือมอบอำานาจในกรณีที่ผู้แจ้งการชุดดินถมดินให้บุคคลอื่นไปยื่นใบแจ้งการชุดดินถมดินต่อเจ้า พนักงานท้องถิ่น</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_7" value="option7" class="form-check-input">
            <label for="document_type_7" class="form-check-label">หนังสือแสดงความยินยอมของเจ้าของที่ดินในกรณีเจ้าของที่ดินให้บุคคลอื่นเป็นผู้แจ้งการขุดดิน/ถมดิน</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_8" value="option8" class="form-check-input">
            <label for="document_type_8" class="form-check-label">หนังสือรับรองของผู้ประกอบวิชาชีพวิศวกรรมควบคุมพร้อมสำาเนาใบอนุญาตจากผู้ประกอบวิชาชีพ วิศวกรรมควบคุม จำนวน 1 ชุด</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_9" value="option9" class="form-check-input">
            <label for="document_type_9" class="form-check-label">หนังสือรับรองของผู้ควบคุมงานพร้อมสำเนาใบอนุญาตผู้ประกอบวิชาชีพวิศวกรรมควบคุม จำานวน 1 ชุด สำเนาแสดงเอกสารสิทธิในที่ดินที่ จำนวน ฉบับ</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_10" value="option10" class="form-check-input">
            <label for="document_type_10" class="form-check-label">หนังสือมอบอำานาจในกรณีที่ผู้แจ้งการชุดดินถมดินให้บุคคลอื่นไปยื่นใบแจ้งการชุดดินถมดินต่อเจ้า พนักงานท้องถิ่น</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="document_option[]" value="option11" id="document_type_11">
            <label class="form-check-label" for="document_type_11">
                อื่นๆ
            </label>
        </div>
        <div class="col-md-7" id="document_option_detail_div" style="display: none;">
            <label for="document_option_detail" class="form-label">รายละเอียดอื่นๆ</label>
            <input type="text" class="form-control" id="document_option_detail" name="document_option_detail">
        </div>

        <hr>

        <div>
            <h4>แนบไฟล์ เอกสาร (สามารถกดแนบไฟล์พร้อมกันได้มากกว่า 1ไฟล์)</h4>
            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
            <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 2MB)</small>
            <!-- แสดงรายการไฟล์ที่แนบ -->
            <div id="file-list" class="mt-1">
                <div class="d-flex flex-wrap gap-3"></div>
            </div>
        </div>

        <br>

        <div class="text-center w-full border">
            <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                ส่งฟอร์มข้อมูล</button>
        </div>
    </form>
</div>

<script src="{{asset('js/multipart_files.js')}}"></script>
<script>
    document.getElementById('document_type_11').addEventListener('change', function() {
        var detailDiv = document.getElementById('document_option_detail_div');
        if (this.checked) {
            detailDiv.style.display = 'block';
        } else {
            detailDiv.style.display = 'none';
        }
    });
</script>

@endsection