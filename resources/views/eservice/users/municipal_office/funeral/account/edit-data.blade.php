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
                <select class="form-select" id="salutation_detail_1" name="salutation_detail_1" disabled>
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="col-12 col-md-10 mb-3">
                <label for="fullname_detail_1">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_detail_1" name="fullname_detail_1" class="form-control" value="{{ old('fullname_detail_1', $form['details']->fullname_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="phone_number_detail_1">โทรศัพท์: <span class="text-danger">*</span></label>
                <input type="text" id="phone_number_detail_1" name="phone_number_detail_1" class="form-control" value="{{ old('phone_number_detail_1', $form['details']->phone_number_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="mobile_number_detail_1">โทรศัพท์มือถือ: <span class="text-danger">*</span></label>
                <input type="text" id="mobile_number_detail_1" name="mobile_number_detail_1" class="form-control" value="{{ old('mobile_number_detail_1', $form['details']->mobile_number_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4">
                <label for="age_detail_1">อายุ: <span class="text-danger">*</span></label>
                <input type="text" id="age_detail_1" name="age_detail_1" class="form-control" value="{{ old('age_detail_1', $form['details']->age_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="idcard_detail_1">เลขบัตรประชาชน: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_detail_1" name="idcard_detail_1" class="form-control" value="{{ old('idcard_detail_1', $form['details']->idcard_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="idcard_out_detail_1">ออกให้โดย: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_out_detail_1" name="idcard_out_detail_1" class="form-control" value="{{ old('idcard_out_detail_1', $form['details']->idcard_out_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="idcard_date_detail_1">วันที่ออกบัตร: <span class="text-danger">*</span></label>
                <input type="date" id="idcard_date_detail_1" name="idcard_date_detail_1" class="form-control" value="{{ old('idcard_date_detail_1', $form['details']->idcard_date_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="idcard_end_detail_1">วันที่หมดอายุ: <span class="text-danger">*</span></label>
                <input type="date" id="idcard_end_detail_1" name="idcard_end_detail_1" class="form-control" value="{{ old('idcard_end_detail_1', $form['details']->idcard_end_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="occupation_detail_1">อาชีพ: <span class="text-danger">*</span></label>
                <input type="text" id="occupation_detail_1" name="occupation_detail_1" class="form-control" value="{{ old('occupation_detail_1', $form['details']->occupation_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <label for="related_detail_1">มีความเกี่ยวข้องกับผู้สูงอายุที่ตายในฐานะ: <span class="text-danger">*</span></label>
                <input type="text" id="related_detail_1" name="related_detail_1" class="form-control" value="{{ old('v', $form['details']->related_detail_1 ?? '') }}" disabled>
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
                <input type="text" id="address_detail_1" name="address_detail_1" class="form-control" value="{{ old('address_detail_1', $form['details']->address_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_detail_1">หมู่:</label>
                <input type="text" id="village_detail_1" name="village_detail_1" class="form-control" value="{{ old('village_detail_1', $form['details']->village_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_detail_1">ตรอก/ซอย:</label>
                <input type="text" id="alley_detail_1" name="alley_detail_1" class="form-control" value="{{ old('alley_detail_1', $form['details']->alley_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_detail_1">ถนน:</label>
                <input type="text" id="road_detail_1" name="road_detail_1" class="form-control" value="{{ old('road_detail_1', $form['details']->road_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_detail_1">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_detail_1" name="subdistrict_detail_1" class="form-control" value="{{ old('subdistrict_detail_1', $form['details']->subdistrict_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_detail_1">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_detail_1" name="district_detail_1" class="form-control" value="{{ old('district_detail_1', $form['details']->district_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_detail_1">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_detail_1" name="province_detail_1" class="form-control" value="{{ old('province_detail_1', $form['details']->province_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_detail_1">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_detail_1" name="postal_code_detail_1" class="form-control" value="{{ old('postal_code_detail_1', $form['details']->postal_code_detail_1 ?? '') }}" disabled>
            </div>
            <hr>
            <h5>ที่อยู่ปัจจุบัน</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_current_detail_1">เลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_current_detail_1" name="address_current_detail_1" class="form-control" value="{{ old('address_current_detail_1', $form['details']->address_current_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_current_detail_1">หมู่:</label>
                <input type="text" id="village_current_detail_1" name="village_current_detail_1" class="form-control" value="{{ old('village_current_detail_1', $form['details']->village_current_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_current_detail_1">ตรอก/ซอย:</label>
                <input type="text" id="alley_current_detail_1" name="alley_current_detail_1" class="form-control" value="{{ old('alley_current_detail_1', $form['details']->alley_current_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_current_detail_1">ถนน:</label>
                <input type="text" id="road_current_detail_1" name="road_current_detail_1" class="form-control" value="{{ old('road_current_detail_1', $form['details']->road_current_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_current_detail_1">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_current_detail_1" name="subdistrict_current_detail_1" class="form-control" value="{{ old('subdistrict_current_detail_1', $form['details']->subdistrict_current_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_current_detail_1">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_current_detail_1" name="district_current_detail_1" class="form-control" value="{{ old('district_current_detail_1', $form['details']->district_current_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_current_detail_1">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_current_detail_1" name="province_current_detail_1" class="form-control" value="{{ old('province_current_detail_1', $form['details']->province_current_detail_1 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_current_detail_1">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_current_detail_1" name="postal_code_current_detail_1" class="form-control" value="{{ old('postal_code_current_detail_1', $form['details']->postal_code_current_detail_1 ?? '') }}" disabled>
            </div>
        </div>
        <hr>
        <h4>ข้อมูลผู้สูงอายุ</h4>
        <div class="row mb-3">
            <div class="col-12 col-md-2 mb-3">
                <label for="salutation_detail_2">คำนำหน้า :</label>
                <select class="form-select" id="salutation_detail_2" name="salutation_detail_2" disabled>
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="col-12 col-md-8 mb-3">
                <label for="fullname_detail_2">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_detail_2" name="fullname_detail_2" class="form-control" value="{{ old('fullname_detail_2', $form['details']->fullname_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-2 mb-3">
                <label for="age_detail_2">อายุ: <span class="text-danger">*</span></label>
                <input type="text" id="age_detail_2" name="age_detail_2" class="form-control" value="{{ old('age_detail_2', $form['details']->age_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_detail_2">เลขบัตรประจำตัวประชาชน: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_detail_2" name="idcard_detail_2" class="form-control" value="{{ old('idcard_detail_2', $form['details']->idcard_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="dead_remake_detail_2">ถึงแก่กรรมด้วยสาเหตุ: <span class="text-danger">*</span></label>
                <input type="text" id="dead_remake_detail_2" name="dead_remake_detail_2" class="form-control" value="{{ old('dead_remake_detail_2', $form['details']->dead_remake_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="dead_date_detail_2">วันที่ถึงแก่กรรม: <span class="text-danger">*</span></label>
                <input type="date" id="dead_date_detail_2" name="dead_date_detail_2" class="form-control" value="{{ old('dead_date_detail_2', $form['details']->dead_date_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="certificate_detail_2">ใบมรณบัตรเลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="certificate_detail_2" name="certificate_detail_2" class="form-control" value="{{ old('certificate_detail_2', $form['details']->certificate_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="certificate_out_detail_2">ออกให้โดย: <span class="text-danger">*</span></label>
                <input type="text" id="certificate_out_detail_2" name="certificate_out_detail_2" class="form-control" value="{{ old('certificate_out_detail_2', $form['details']->certificate_out_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="certificate_date_detail_2">วันที่ออกใบมรณบัตร: <span class="text-danger">*</span></label>
                <input type="date" id="certificate_date_detail_2" name="certificate_date_detail_2" class="form-control" value="{{ old('certificate_date_detail_2', $form['details']->certificate_date_detail_2 ?? '') }}" disabled>
            </div>
            <h5>ที่อยู่ตามทะเบียนบ้าน</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_detail_2">เลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_detail_2" name="address_detail_2" class="form-control" value="{{ old('address_detail_2', $form['details']->address_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_detail_2">หมู่:</label>
                <input type="text" id="village_detail_2" name="village_detail_2" class="form-control" value="{{ old('village_detail_2', $form['details']->village_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_detail_2">ตรอก/ซอย:</label>
                <input type="text" id="alley_detail_2" name="alley_detail_2" class="form-control" value="{{ old('alley_detail_2', $form['details']->alley_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_detail_2">ถนน:</label>
                <input type="text" id="road_detail_2" name="road_detail_2" class="form-control" value="{{ old('road_detail_2', $form['details']->road_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_detail_2">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_detail_2" name="subdistrict_detail_2" class="form-control" value="{{ old('subdistrict_detail_2', $form['details']->subdistrict_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_detail_2">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_detail_2" name="district_detail_2" class="form-control" value="{{ old('district_detail_2', $form['details']->district_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_detail_2">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_detail_2" name="province_detail_2" class="form-control" value="{{ old('province_detail_2', $form['details']->province_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_detail_2">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_detail_2" name="postal_code_detail_2" class="form-control" value="{{ old('postal_code_detail_2', $form['details']->postal_code_detail_2 ?? '') }}" disabled>
            </div>
            <hr>
            <h5>ที่อยู่ปัจจุบัน</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_current_detail_2">เลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_current_detail_2" name="address_current_detail_2" class="form-control" value="{{ old('address_current_detail_2', $form['details']->address_current_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_current_detail_2">หมู่:</label>
                <input type="text" id="village_current_detail_2" name="village_current_detail_2" class="form-control" value="{{ old('village_current_detail_2', $form['details']->village_current_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_current_detail_2">ตรอก/ซอย:</label>
                <input type="text" id="alley_current_detail_2" name="alley_current_detail_2" class="form-control" value="{{ old('alley_current_detail_2', $form['details']->alley_current_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_current_detail_2">ถนน:</label>
                <input type="text" id="road_current_detail_2" name="road_current_detail_2" class="form-control" value="{{ old('road_current_detail_2', $form['details']->road_current_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_current_detail_2">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_current_detail_2" name="subdistrict_current_detail_2" class="form-control" value="{{ old('subdistrict_current_detail_2', $form['details']->subdistrict_current_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_current_detail_2">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_current_detail_2" name="district_current_detail_2" class="form-control" value="{{ old('district_current_detail_2', $form['details']->district_current_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_current_detail_2">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_current_detail_2" name="province_current_detail_2" class="form-control" value="{{ old('province_current_detail_2', $form['details']->province_current_detail_2 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_current_detail_2">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_current_detail_2" name="postal_code_current_detail_2" class="form-control" value="{{ old('postal_code_current_detail_2', $form['details']->postal_code_current_detail_2 ?? '') }}" disabled>
            </div>
        </div>
        <hr>
        <h4>ส่วนที่ 2 : ข้อมูลผู้ให้การรับรองผู้รับผิดชอบในการจัดการศพผู้สูงอายุตามประเพณี</h4>
        <div class="row mb-3">
            <div class="col-12 col-md-2 mb-3">
                <label for="salutation_detail_3">คำนำหน้า :</label>
                <select class="form-select" id="salutation_detail_3" name="salutation_detail_3" disabled>
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="fullname_detail_3">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_detail_3" name="fullname_detail_3" class="form-control" value="{{ old('fullname_detail_3', $form['details']->fullname_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="positon_detail_3">ตำแหน่ง: <span class="text-danger">*</span></label>
                <input type="text" id="positon_detail_3" name="positon_detail_3" class="form-control" value="{{ old('positon_detail_3', $form['details']->positon_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="org_detail_3">สังกัดหน่วยงาน: <span class="text-danger">*</span></label>
                <input type="text" id="org_detail_3" name="org_detail_3" class="form-control" value="{{ old('org_detail_3', $form['details']->org_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_detail_3">เลขบัตรประจำตัวประชาชน: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_detail_3" name="idcard_detail_3" class="form-control" value="{{ old('idcard_detail_3', $form['details']->idcard_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_out_detail_3">ออกให้โดย: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_out_detail_3" name="idcard_out_detail_3" class="form-control" value="{{ old('idcard_out_detail_3', $form['details']->idcard_out_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_date_detail_3">วันออกบัตร: <span class="text-danger">*</span></label>
                <input type="date" id="idcard_date_detail_3" name="idcard_date_detail_3" class="form-control" value="{{ old('idcard_date_detail_3', $form['details']->idcard_date_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_end_detail_3">วันหมดอายุ: <span class="text-danger">*</span></label>
                <input type="date" id="idcard_end_detail_3" name="idcard_end_detail_3" class="form-control" value="{{ old('idcard_end_detail_3', $form['details']->idcard_end_detail_3 ?? '') }}" disabled>
            </div>
            <h5>ที่อยู่ของผู้รับผิดชอบ</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_detail_3">เลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_detail_3" name="address_detail_3" class="form-control" value="{{ old('address_detail_3', $form['details']->address_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_detail_3">หมู่:</label>
                <input type="text" id="village_detail_3" name="village_detail_3" class="form-control" value="{{ old('village_detail_3', $form['details']->village_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_detail_3">ตรอก/ซอย:</label>
                <input type="text" id="alley_detail_3" name="alley_detail_3" class="form-control" value="{{ old('alley_detail_3', $form['details']->alley_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_detail_3">ถนน:</label>
                <input type="text" id="road_detail_3" name="road_detail_3" class="form-control" value="{{ old('road_detail_3', $form['details']->road_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_detail_3">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_detail_3" name="subdistrict_detail_3" class="form-control" value="{{ old('subdistrict_detail_3', $form['details']->subdistrict_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_detail_3">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_detail_3" name="district_detail_3" class="form-control" value="{{ old('district_detail_3', $form['details']->district_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_detail_3">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_detail_3" name="province_detail_3" class="form-control" value="{{ old('province_detail_3', $form['details']->province_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_detail_3">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_detail_3" name="postal_code_detail_3" class="form-control" value="{{ old('postal_code_detail_3', $form['details']->postal_code_detail_3 ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="phone_number_detail_3">โทรศัพท์: <span class="text-danger">*</span></label>
                <input type="text" id="phone_number_detail_3" name="phone_number_detail_3" class="form-control" value="{{ old('phone_number_detail_3', $form['details']->phone_number_detail_3 ?? '') }}" disabled>
            </div>
        </div>
    </form>
</div>

<script src="{{asset('js/multipart_files.js')}}"></script>

@endsection