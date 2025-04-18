@extends('eservice.users.layout.layout')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">แบบคำร้องขอเงินค่าจัดการศพผู้สูงอายุ</h2>

    <form action="{{route('FuneralFormCreate')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <h4>ส่วนที่ 1 : สำหรับผู้ยื่นขอรับเงินสงเคราะห์ค่าจัดการศพผู้สูงอายุตามประเพณี</h4>
        <div class="row mb-3">
            <div class="col-12 col-md-2 mb-3">
                <label for="salutation_detail_1">คำนำหน้า :</label>
                <select class="form-select" id="salutation_detail_1" name="salutation_detail_1">
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="col-12 col-md-10 mb-3">
                <label for="fullname_detail_1">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_detail_1" name="fullname_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="phone_number_detail_1">โทรศัพท์: <span class="text-danger">*</span></label>
                <input type="text" id="phone_number_detail_1" name="phone_number_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="mobile_number_detail_1">โทรศัพท์มือถือ: <span class="text-danger">*</span></label>
                <input type="text" id="mobile_number_detail_1" name="mobile_number_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4">
                <label for="age_detail_1">อายุ: <span class="text-danger">*</span></label>
                <input type="text" id="age_detail_1" name="age_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="idcard_detail_1">เลขบัตรประชาชน: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_detail_1" name="idcard_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="idcard_out_detail_1">ออกให้โดย: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_out_detail_1" name="idcard_out_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="idcard_date_detail_1">วันที่ออกบัตร: <span class="text-danger">*</span></label>
                <input type="date" id="idcard_date_detail_1" name="idcard_date_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="idcard_end_detail_1">วันที่หมดอายุ: <span class="text-danger">*</span></label>
                <input type="date" id="idcard_end_detail_1" name="idcard_end_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="occupation_detail_1">อาชีพ: <span class="text-danger">*</span></label>
                <input type="text" id="occupation_detail_1" name="occupation_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="related_detail_1">มีความเกี่ยวข้องกับผู้สูงอายุที่ตายในฐานะ: <span class="text-danger">*</span></label>
                <input type="text" id="related_detail_1" name="related_detail_1" class="form-control" required>
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
        <hr>
        <div class="row mb-3">
            <h5>ที่อยู่ตามทะเบียนบ้าน</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_detail_1">เลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_detail_1" name="address_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_detail_1">หมู่:</label>
                <input type="text" id="village_detail_1" name="village_detail_1" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_detail_1">ตรอก/ซอย:</label>
                <input type="text" id="alley_detail_1" name="alley_detail_1" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_detail_1">ถนน:</label>
                <input type="text" id="road_detail_1" name="road_detail_1" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_detail_1">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_detail_1" name="subdistrict_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_detail_1">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_detail_1" name="district_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_detail_1">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_detail_1" name="province_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_detail_1">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_detail_1" name="postal_code_detail_1" class="form-control" required>
            </div>
            <hr>
            <h5>ที่อยู่ปัจจุบัน</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_current_detail_1">เลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_current_detail_1" name="address_current_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_current_detail_1">หมู่:</label>
                <input type="text" id="village_current_detail_1" name="village_current_detail_1" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_current_detail_1">ตรอก/ซอย:</label>
                <input type="text" id="alley_current_detail_1" name="alley_current_detail_1" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_current_detail_1">ถนน:</label>
                <input type="text" id="road_current_detail_1" name="road_current_detail_1" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_current_detail_1">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_current_detail_1" name="subdistrict_current_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_current_detail_1">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_current_detail_1" name="district_current_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_current_detail_1">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_current_detail_1" name="province_current_detail_1" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_current_detail_1">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_current_detail_1" name="postal_code_current_detail_1" class="form-control" required>
            </div>
        </div>
        <hr>
        <h4>ข้อมูลผู้สูงอายุ</h4>
        <div class="row mb-3">
            <div class="col-12 col-md-2 mb-3">
                <label for="salutation_detail_2">คำนำหน้า :</label>
                <select class="form-select" id="salutation_detail_2" name="salutation_detail_2">
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="col-12 col-md-8 mb-3">
                <label for="fullname_detail_2">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_detail_2" name="fullname_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-2 mb-3">
                <label for="age_detail_2">อายุ: <span class="text-danger">*</span></label>
                <input type="text" id="age_detail_2" name="age_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_detail_2">เลขบัตรประจำตัวประชาชน: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_detail_2" name="idcard_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="dead_remake_detail_2">ถึงแก่กรรมด้วยสาเหตุ: <span class="text-danger">*</span></label>
                <input type="text" id="dead_remake_detail_2" name="dead_remake_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="dead_date_detail_2">วันที่ถึงแก่กรรม: <span class="text-danger">*</span></label>
                <input type="date" id="dead_date_detail_2" name="dead_date_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="certificate_detail_2">ใบมรณบัตรเลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="certificate_detail_2" name="certificate_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="certificate_out_detail_2">ออกให้โดย: <span class="text-danger">*</span></label>
                <input type="text" id="certificate_out_detail_2" name="certificate_out_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="certificate_date_detail_2">วันที่ออกใบมรณบัตร: <span class="text-danger">*</span></label>
                <input type="date" id="certificate_date_detail_2" name="certificate_date_detail_2" class="form-control" required>
            </div>
            <h5>ที่อยู่ตามทะเบียนบ้าน</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_detail_2">เลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_detail_2" name="address_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_detail_2">หมู่:</label>
                <input type="text" id="village_detail_2" name="village_detail_2" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_detail_2">ตรอก/ซอย:</label>
                <input type="text" id="alley_detail_2" name="alley_detail_2" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_detail_2">ถนน:</label>
                <input type="text" id="road_detail_2" name="road_detail_2" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_detail_2">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_detail_2" name="subdistrict_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_detail_2">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_detail_2" name="district_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_detail_2">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_detail_2" name="province_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_detail_2">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_detail_2" name="postal_code_detail_2" class="form-control" required>
            </div>
            <hr>
            <h5>ที่อยู่ปัจจุบัน</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_current_detail_2">เลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_current_detail_2" name="address_current_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_current_detail_2">หมู่:</label>
                <input type="text" id="village_current_detail_2" name="village_current_detail_2" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_current_detail_2">ตรอก/ซอย:</label>
                <input type="text" id="alley_current_detail_2" name="alley_current_detail_2" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_current_detail_2">ถนน:</label>
                <input type="text" id="road_current_detail_2" name="road_current_detail_2" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_current_detail_2">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_current_detail_2" name="subdistrict_current_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_current_detail_2">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_current_detail_2" name="district_current_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_current_detail_2">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_current_detail_2" name="province_current_detail_2" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_current_detail_2">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_current_detail_2" name="postal_code_current_detail_2" class="form-control" required>
            </div>
        </div>
        <hr>
        <h4>ส่วนที่ 2 : ข้อมูลผู้ให้การรับรองผู้รับผิดชอบในการจัดการศพผู้สูงอายุตามประเพณี</h4>
        <div class="row mb-3">
            <div class="col-12 col-md-2 mb-3">
                <label for="salutation_detail_3">คำนำหน้า :</label>
                <select class="form-select" id="salutation_detail_3" name="salutation_detail_3">
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="fullname_detail_3">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_detail_3" name="fullname_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="positon_detail_3">ตำแหน่ง: <span class="text-danger">*</span></label>
                <input type="text" id="positon_detail_3" name="positon_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="org_detail_3">สังกัดหน่วยงาน: <span class="text-danger">*</span></label>
                <input type="text" id="org_detail_3" name="org_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_detail_3">เลขบัตรประจำตัวประชาชน: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_detail_3" name="idcard_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_out_detail_3">ออกให้โดย: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_out_detail_3" name="idcard_out_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_date_detail_3">วันออกบัตร: <span class="text-danger">*</span></label>
                <input type="date" id="idcard_date_detail_3" name="idcard_date_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_end_detail_3">วันหมดอายุ: <span class="text-danger">*</span></label>
                <input type="date" id="idcard_end_detail_3" name="idcard_end_detail_3" class="form-control" required>
            </div>
            <h5>ที่อยู่ของผู้รับผิดชอบ</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_detail_3">เลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_detail_3" name="address_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_detail_3">หมู่:</label>
                <input type="text" id="village_detail_3" name="village_detail_3" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_detail_3">ตรอก/ซอย:</label>
                <input type="text" id="alley_detail_3" name="alley_detail_3" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_detail_3">ถนน:</label>
                <input type="text" id="road_detail_3" name="road_detail_3" class="form-control">
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_detail_3">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_detail_3" name="subdistrict_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_detail_3">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_detail_3" name="district_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_detail_3">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_detail_3" name="province_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_detail_3">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_detail_3" name="postal_code_detail_3" class="form-control" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="phone_number_detail_3">โทรศัพท์: <span class="text-danger">*</span></label>
                <input type="text" id="phone_number_detail_3" name="phone_number_detail_3" class="form-control" required>
            </div>
        </div>

        <div style="font-weight: bold;">
            คำชี้แจง
        </div>
        <div class="box_text" style="text-align: left;">
            <p>1. ผู้ยื่นคำขอรับเงินสงเคราะห์ค่าจัดการศพผู้สูงอายุ หมายถึง ผู้รับผิดชอบในการจัดการศพผู้สูงอายุที่ถึงแก่กรรม เช่น บิดา มารดา สามี ภรรยา บุตร ญาติพี่น้องของผู้สูงอายุที่ถึงแก่กรรม ในกรณีที่ผู้สูงอายุไม่มีญาติ บุคคลที่รับผิดชอบใการจัดการศพผู้สูงอายุเป็นผู้ยื่นคำขอ รับเงินค่าจัดการศพ เช่น ผู้ให้การดูแล ผู้นำชุมชน กำนัน ผู้ใหญ่บ้าน เป็นต้น รวมทั้งมูลนิธิ สมาคม วัด มัสยิด โบสถ์</p>

            <p>2. ผู้ให้คำรับรองผู้รับผิดชอบในการจัดการศพผู้สูงอายุตามประเพณี หมายถึง ผู้อำนวยการเขต หรือนายอำเภอ หรือกำนัน หรือผู้ใหญ่บ้าน หรือนายกเทศมนตรี หรือนายกองค์การบริหารส่วนตำบล หรือนายกเมืองพัทยา หรือประธานชุมชน หรือผู้อำนวยศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ ผู้ปกครองสถานสงเคราะห์ ผู้ปกครองสถานดูแล ผู้อำนวยการสถานคุ้มครอง หรือผู้ปกครองสถานใด ๆ ของรัฐหรือองค์กรปกครองส่วนท้องถิ่น</p>

            <p>3. คุณสมบัติผู้สูงอายุ</p>
            <div style="margin-left: 30px;">
                <p>(1) มีอายุเกินหกสิบปีบริบูรณ์ขึ้นไป</p>
                <p>(2) มีสัญชาติไทย</p>
                <p>(3) ผู้สูงอายุที่ได้รับสิทธิตามโครงการลงทะเบียนเพื่อสวัสดิการแห่งรัฐ หรือโครงการสวัสดิการในลักษณะเดียวกันที่เรียกชื่อเป็นอย่างอื่น หรือเป็นผู้สูงอายุที่ผู้อำนวยการเขตหรือนายอำเภอ หรือกำนัน หรือผู้ใหญ่บ้าน หรือนายกเทศมนตรี หรือนายกองค์การบริหารส่วนตำบล หรือนายกเมืองพัทยา หรือประธานชุมชน รับรองว่ามีคุณสมบัติตามโครงการดังกล่าว</p>
            </div>

            <p>4. หลักฐานการยื่นคำขอ</p>
            <div style="margin-left: 30px;">
                <p>(1) ใบมรณบัตรของผู้สูงอายุ</p>
                <p>(2) บัตรประจำตัวประชาชนของผู้สูงอายุที่ตาย หรือบัตรประจำตัวประชาชนของผู้สูงอายุที่ตาย พร้อมหนังสือรับรอง ตามข้อ 5 (3) แล้วแต่กรณี หากไม่มีบัตรประจำตัวประชาชนให้ใช้เอกสารราชการที่มีเลขประจำตัวประชาชนและวัน เดือน ปีเกิดของผู้สูงอายุที่ตายแทนได้</p>
                <p>(3) บัตรประจำตัวประชาชน หรือบัตรอื่นที่ออกโดยหน่วยงานของรัฐที่มีรูปถ่ายและเลขประจำตัวประชาชนของผู้ยื่นคำขอ กรณีการจัดการศพตามประเพณีโดยมูลนิธิ สมาคม วัด มัสยิด โบสถ์ ให้แนบหนังสือแสดงการจดทะเบียน หรืออนุญาตให้สร้าง จัดตั้ง หรือดำเนินงานมูลนิธิ สมาคม วัด มัสยิด โบสถ์ด้วย</p>
                <p>(4) สมุดบัญชีหรือเลขที่บัญชีธนาคารของผู้ยื่นคำขอ เว้นแต่ประสงค์จะขอรับเงินสดให้ดำเนินการตามระเบียบของทางราชการ</p>
                <p>(5) แบบคำขอรับเงินสงเคราะห์และรับรองผู้รับผิดชอบในการจัดการศพผู้สูงอายุตามประเพณี (แบบ ศผส. 01)</p>
            </div>

            <p>5. การยื่นคำขอ ยื่นภายใน 6 เดือนนับตั้งแต่วันออกใบมรณบัตร โดยยื่นคำขอในท้องที่ที่ผู้สูงอายุมีชื่ออยู่ในทะเบียนบ้านหรือภูมิลำเนาที่ถึงแก่ความตาย ในขณะถึงแก่ความตาย ดังต่อไปนี้</p>
            <div style="margin-left: 30px;">
                <p>(1) ในกรุงเทพมหานคร ให้ยื่นคำขอที่สำนักงานเขต สังกัดกรุงเทพมหานคร</p>
                <p>(2) ในจังหวัดอื่น ให้ยื่นคำขอต่อสำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์จังหวัด หรือที่ว่าการอำเภอ หรือสำนักงานเทศบาล หรือที่ทำการองค์การบริหารส่วนตำบล หรือศาลาว่าการเมืองพัทยา</p>
            </div>

            <p>6. ผู้ยื่นคำขอและผู้รับรองต้องไม่เป็นบุคคลเดียวกัน</p>
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
        <hr>

        <div class="text-center w-full border">
            <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                ส่งฟอร์มข้อมูล</button>
        </div>
    </form>
</div>

<script src="{{asset('js/multipart_files.js')}}"></script>

@endsection