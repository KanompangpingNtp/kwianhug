@extends('eservice.admin.layout.layout')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">แบบฟอร์มการขออนุญาตขุดดินหรือถมดิน</h2>

    <form action="{{route('DiggingFormCreate')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <h4>ข้อมูลผู้ขออนุญาต</h4>

        <div class="row mb-3">
            <div class="col-12 col-md-2">
                <label for="salutation">คำนำหน้า :</label>
                <select class="form-select" id="salutation" name="salutation" disabled>
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย" {{ old('salutation', $form->salutation) == 'นาย' ? 'selected' : '' }}>นาย</option>
                    <option value="นาง" {{ old('salutation', $form->salutation) == 'นาง' ? 'selected' : '' }}>นาง</option>
                    <option value="นางสาว" {{ old('salutation', $form->salutation) == 'นางสาว' ? 'selected' : '' }}>นางสาว</option>
                </select>
            </div>
            <div class="col-12 col-md-5">
                <label for="first_name">ชื่อ: </label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('full_name', $form->full_name ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-5">
                <label for="last_name">นามสกุล: </label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('full_name', $form->full_name ?? '') }}" disabled>
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
                <label for="house_number">ที่อยู่ตามสำเนาทะเบียนบ้าน: </label>
                <input type="text" id="house_number" name="house_number" class="form-control" value="{{ old('address', $form->address ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village">หมู่:</label>
                <input type="text" id="village" name="village" class="form-control" value="{{ old('village', $form->village ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley">ซอย:</label>
                <input type="text" id="alley" name="alley" class="form-control" value="{{ old('alley', $form->alley ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road">ถนน:</label>
                <input type="text" id="road" name="road" class="form-control" value="{{ old('road', $form->road ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict">ตำบล: </label>
                <input type="text" id="subdistrict" name="subdistrict" class="form-control" value="{{ old('subdistrict', $form->subdistrict ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district">อำเภอ: </label>
                <input type="text" id="district" name="district" class="form-control" value="{{ old('district', $form->district ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province">จังหวัด: </label>
                <input type="text" id="province" name="province" class="form-control" value="{{ old('province', $form->province ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code">รหัสไปรษณีย์: </label>
                <input type="text" id="postal_code" name="postal_code" class="form-control" value="{{ old('province', $form->province ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="phone_number">โทรศัพท์: </label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ old('telephone', $form->telephone ?? '') }}" disabled>
            </div>
        </div>
        <hr>
        <h4>ข้อมูลสถานที่</h4>
        <div class="row mb-3">
            <div class="col-12 col-md-4 mb-3">
                <label for="fullname_address">เจ้าของที่ดิน: </label>
                <input type="text" id="fullname_address" name="fullname_address" class="form-control" value="{{ old('fullname_address', $form['details']->fullname_address ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="fullname_design">ผู้ออกแบบ: </label>
                <input type="text" id="fullname_design" name="fullname_design" class="form-control" value="{{ old('fullname_design', $form['details']->fullname_design ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="fullname_control">ผู้ควบคุมงาน: </label>
                <input type="text" id="fullname_control" name="fullname_control" class="form-control" value="{{ old('fullname_control', $form['details']->fullname_control ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="desire_detail">ความประสงค์จะทำการขุดดิน/ถมดิน ลึก/สูง (เมตร): </label>
                <input type="text" id="desire_detail" name="desire_detail" class="form-control" value="{{ old('desire_detail', $form['details']->desire_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="mouth_area">พื้นที่ปากบ่อ/ดินถม (เมตร): </label>
                <input type="text" id="mouth_area" name="mouth_area" class="form-control" value="{{ old('mouth_area', $form['details']->mouth_area ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="area_detail">ที่อยู่ในโฉนดที่ดิน/น.ส.3/น.ส.3 ก/ส.ค.1 เลขที่ (เมตร): </label>
                <input type="text" id="area_detail" name="area_detail" class="form-control" value="{{ old('area_detail', $form['details']->area_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="document_permission">เอกสารสิทธิ์ในที่ดินที่มีชื่อ: </label>
                <input type="text" id="document_permission" name="document_permission" class="form-control" value="{{ old('document_permission', $form['details']->document_permission ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_detail">ถนน:</label>
                <input type="text" id="road_detail" name="road_detail" class="form-control" value="{{ old('road_detail', $form['details']->road_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_detail">หมู่:</label>
                <input type="text" id="village_detail" name="village_detail" class="form-control" value="{{ old('village_detail', $form['details']->village_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_detail">ซอย:</label>
                <input type="text" id="alley_detail" name="alley_detail" class="form-control" value="{{ old('alley_detail', $form['details']->alley_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_detail">ตำบล: </label>
                <input type="text" id="subdistrict_detail" name="subdistrict_detail" class="form-control" value="{{ old('subdistrict_detail', $form['details']->subdistrict_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_detail">อำเภอ: </label>
                <input type="text" id="district_detail" name="district_detail" class="form-control" value="{{ old('district_detail', $form['details']->district_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_detail">จังหวัด: </label>
                <input type="text" id="province_detail" name="province_detail" class="form-control" value="{{ old('province_detail', $form['details']->province_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_detail">รหัสไปรษณีย์: </label>
                <input type="text" id="postal_code_detail" name="postal_code_detail" class="form-control" value="{{ old('postal_code_detail', $form['details']->postal_code_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="name_district_detail">ซึ่งอยู่ในเขต: </label>
                <input type="text" id="name_district_detail" name="name_district_detail" class="form-control" value="{{ old('name_district_detail', $form['details']->name_district_detail ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="fix_day_detail">กำหนดเวลาแล้วเสร็จ (วัน): </label>
                <input type="text" id="fix_day_detail" name="fix_day_detail" class="form-control" value="{{ old('fix_day_detail', $form['details']->fix_day_detail ?? '') }}" disabled>
            </div>
        </div>
        <hr>

        <h4>ประเภทเอกสารที่แนบ</h4>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_1" value="option1" class="form-check-input" @if(in_array("option1", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_1" class="form-check-label">แผนผังบริเวณ แบบแปลน รายการประกอบแบบแปลนที่ถูกต้องตามกฎกระทรวงหรือ ข้อบัญญัติท้องถิ่นที่ออกตามกฏหมายว่าด้วยการขุดดินและถมดิน จำนวน 3 ชุด ชุดละ 1 แผ่น</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_2" value="option2" class="form-check-input" @if(in_array("option2", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_2" class="form-check-label">สำเนารายการคำนวณวิธีป้องกันการพังทลายของดิน จำนวน 1 ชุด ชุดละ 1 แผ่น</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_3" value="option3" class="form-check-input" @if(in_array("option3", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_3" class="form-check-label">สำเนาทะเบียนบ้านของผู้แจ้งในกรณีที่ผู้แจ้งเป็นบุคคลธรรมดา จำนวน 1 ฉบับ</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_4" value="option4" class="form-check-input" @if(in_array("option4", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_4" class="form-check-label">สำเนาทะเบียนบ้านของเจ้าของที่ดินในกรณีที่ผู้แจ้งไม่ได้เป็นเจ้าของที่ดิน จำนวน 1 ฉบับ</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_5" value="option5" class="form-check-input" @if(in_array("option5", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_5" class="form-check-label">สำเนาหนังสือรับรองการจดทะเบียนนิติบุคคลในกรณีที่ผู้แจ้งเป็นนิติบุคคล จำนวน 1 ฉบับ</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_6" value="option6" class="form-check-input" @if(in_array("option6", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_6" class="form-check-label">หนังสือมอบอำานาจในกรณีที่ผู้แจ้งการชุดดินถมดินให้บุคคลอื่นไปยื่นใบแจ้งการชุดดินถมดินต่อเจ้า พนักงานท้องถิ่น</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_7" value="option7" class="form-check-input" @if(in_array("option7", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_7" class="form-check-label">หนังสือแสดงความยินยอมของเจ้าของที่ดินในกรณีเจ้าของที่ดินให้บุคคลอื่นเป็นผู้แจ้งการขุดดิน/ถมดิน</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_8" value="option8" class="form-check-input" @if(in_array("option8", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_8" class="form-check-label">หนังสือรับรองของผู้ประกอบวิชาชีพวิศวกรรมควบคุมพร้อมสำาเนาใบอนุญาตจากผู้ประกอบวิชาชีพ วิศวกรรมควบคุม จำนวน 1 ชุด</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_9" value="option9" class="form-check-input"@if(in_array("option9", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_9" class="form-check-label">หนังสือรับรองของผู้ควบคุมงานพร้อมสำเนาใบอนุญาตผู้ประกอบวิชาชีพวิศวกรรมควบคุม จำานวน 1 ชุด สำเนาแสดงเอกสารสิทธิในที่ดินที่ จำนวน ฉบับ</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="document_type[]" id="document_type_10" value="option10" class="form-check-input" @if(in_array("option10", $form['details']->document_option)) checked @endif disabled>
            <label for="document_type_10" class="form-check-label">หนังสือมอบอำานาจในกรณีที่ผู้แจ้งการชุดดินถมดินให้บุคคลอื่นไปยื่นใบแจ้งการชุดดินถมดินต่อเจ้า พนักงานท้องถิ่น</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="document_option[]" value="option11" id="document_type_11" @if(in_array("option11", $form['details']->document_option)) checked @endif disabled>
            <label class="form-check-label" for="document_type_11">
                อื่นๆ
            </label>
        </div>
        <div class="col-md-7" id="document_option_detail_div">
            <label for="document_option_detail" class="form-label">รายละเอียดอื่นๆ</label>
            <input type="text" class="form-control" id="document_option_detail" name="document_option_detail" value="{{ old('document_option_detail', $form['details']->document_option_detail) }}" disabled>
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