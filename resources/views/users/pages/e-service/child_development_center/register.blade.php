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

    /* ปรับแต่งการ์ด */
    .custom-card {
        border: none;
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        cursor: pointer;
    }

    /* Hover Effect: ทำให้เด่นขึ้น */
    .custom-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Hover Effect: ซูมรูปภาพเบาๆ */
    .custom-card:hover .image-container img {
        transform: scale(1.1);
    }

    /* ปรับแต่งเนื้อหาในการ์ด */
    .card-body {
        background: #fff;
        padding: 15px;
        border-top: 2px solid #46c700;
    }

    .card-title {
        font-size: 30px;
        font-weight: bold;
        color: #333;
        margin-bottom: 0;
        transition: color 0.3s ease;
    }

    /* Hover Effect: เปลี่ยนสีข้อความ */
    .custom-card:hover .card-title {
        color: #77b329;
    }

</style>
<div class="bg py-5">
    <div class="container py-5 custom-gradient-shadow">
        <div class=" d-flex flex-column justify-content-center p-5">
            <div class="fs-1 fw-bold mb-4 text-center">E-Service <br>
                <h2 class="fw-bold">ทะเบียนประวัตินักเรียน ศูนย์พัฒนาเด็กเล็กเทศบาลตำบลเกวียนหัก</h2>
            </div>

            {{-- <h3 class="text-center">ทะเบียนประวัติเด็กปฐมวัย <br></h3>
            <h3 class="text-center">ศูนย์พัฒนาเด็กเล็กองค์การบริหารสวนตำบลคลองบ้านโพธิ์ <br></h3>
            <h3 class="text-center">องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ อำเภอบ้านโพธิ์ จังหวัดฉะเชิงเทรา</h3>
            <h4 class="text-center"><span class="text-danger">** </span><strong>หากไม่มีการกรอกข้อมูล กรุณาใส่เครื่องหมาย - แทน</strong></h4><br> --}}

            <div class="row">
                {{-- newinput --}}
                <div class="col-md-2">
                    <label for="child_salutation">คำนำหน้า</label>
                    <select class="form-select" id="child_salutation" name="child_salutation">
                        <option value="" selected disabled>เลือกคำนำหน้า</option>
                        <option value="เด็กชาย">เด็กชาย</option>
                        <option value="เด็กหญิง">เด็กหญิง</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="child_name">ชื่อ-นามสกุล เด็ก<span class="text-danger">*</span></label>
                    <input type="text" name="child_name" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="child_nickname">ชื่อเล่น <span class="text-danger">*</span></label>
                    <input type="text" name="child_nickname" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="registration_citizen_id">เลขประจำตัวประชาชน <span class="text-danger">*</span></label>
                    <input type="text" name="registration_citizen_id" class="form-control" required>
                </div>

                {{-- <div class="col-md-4 mb-3">
                    <label for="registration_birthday">วัน เดือน ปี เกิด <span class="text-danger">*</span></label>
                    <input type="date" name="registration_birthday" class="form-control" required>
                </div> --}}
                <div class="row mb-3">
                    <div class="col-12 col-md-4">
                        <label for="reg_day">วันเกิดที่ (กรอกวันที่เกิด) <span class="text-danger">*</span></label>
                        <input type="number" id="reg_day" name="reg_day" class="form-control" min="1" max="31" required>
                        <small id="reg_dayError" class="form-text text-danger" style="display: none;">กรุณากรอกวันเป็นตัวเลขระหว่าง 1 - 31</small>
                    </div>

                    <script>
                        document.getElementById("reg_day").addEventListener("input", function() {
                            const regDayInput = document.getElementById("reg_day");
                            const regDayError = document.getElementById("reg_dayError");

                            const regDayValue = parseInt(regDayInput.value, 10);

                            if (regDayValue < 1 || regDayValue > 31 || isNaN(regDayValue)) {
                                regDayInput.value = "";
                                regDayError.style.display = "block";
                                regDayInput.classList.add("is-invalid");
                            } else {
                                regDayError.style.display = "none";
                                regDayInput.classList.remove("is-invalid");
                            }
                        });

                    </script>

                    <div class="col-12 col-md-4">
                        <label for="reg_month">เดือน (เลือกเดือนเกิด) <span class="text-danger">*</span></label>
                        <select id="reg_month" name="reg_month" class="form-control" required>
                            <option value="1">มกราคม</option>
                            <option value="2">กุมภาพันธ์</option>
                            <option value="3">มีนาคม</option>
                            <option value="4">เมษายน</option>
                            <option value="5">พฤษภาคม</option>
                            <option value="6">มิถุนายน</option>
                            <option value="7">กรกฎาคม</option>
                            <option value="8">สิงหาคม</option>
                            <option value="9">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤศจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="reg_year">ปี (กรอกปีที่เกิดเป็น พ.ศ.) <span class="text-danger">*</span></label>
                        <input type="number" id="reg_year" name="reg_year" class="form-control" min="1900" required>
                        <small id="reg_yearError" class="form-text text-danger" style="display: none;">กรุณากรอกปี 4 หลัก</small>
                    </div>

                    <script>
                        document.getElementById("reg_year").addEventListener("input", function() {
                            const regYearInput = document.getElementById("reg_year");
                            const regYearError = document.getElementById("reg_yearError");

                            if (regYearInput.value.length > 4) {
                                regYearInput.value = regYearInput.value.slice(0, 4);
                            }

                            const regYearValue = regYearInput.value;

                            if (regYearValue.length !== 4 || isNaN(regYearValue)) {
                                regYearError.style.display = "block";
                                regYearInput.classList.add("is-invalid");
                            } else {
                                regYearError.style.display = "none";
                                regYearInput.classList.remove("is-invalid");
                            }
                        });

                    </script>
                </div>

                <div class="row mb-1">
                    <div class="col-12 d-flex align-items-center">
                        <label for="reg_birth_day" class="mb-0 me-2" style="width: 12rem;">วันเกิดตามปฎิทินสากลคือ</label>
                        <input type="text" id="reg_birth_day" name="registration_birthday" class="form-control" readonly>
                    </div>
                </div>

                <style>
                    #reg_birth_day {
                        border: none;
                        background: transparent;
                        box-shadow: none;
                    }

                </style>

                <script>
                    function convertRegToAD(year) {
                        return year - 543;
                    }

                    document.querySelectorAll("#reg_day, #reg_month, #reg_year").forEach(input => {
                        input.addEventListener("input", function() {
                            const regDay = document.getElementById("reg_day").value;
                            const regMonth = document.getElementById("reg_month").value;
                            const regYear = document.getElementById("reg_year").value;

                            if (regDay && regMonth && regYear) {
                                const regYearAD = convertRegToAD(parseInt(regYear));
                                const formattedRegDate = `${String(regDay).padStart(2, '0')}/${String(regMonth).padStart(2, '0')}/${regYearAD}`;

                                document.getElementById("reg_birth_day").value = formattedRegDate;
                            }
                        });
                    });

                </script>

                <div class="col-md-4 mb-3">
                    <label for="birth_province">จังหวัดที่เกิด <span class="text-danger">*</span></label>
                    <input type="text" name="birth_province" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="registration_ethnicity">เชื้อชาติ <span class="text-danger">*</span></label>
                    <input type="text" name="registration_ethnicity" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="registration_nationality">สัญชาติ <span class="text-danger">*</span></label>
                    <input type="text" name="registration_nationality" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="religion">ศาสนา <span class="text-danger">*</span></label>
                    <input type="text" name="religion" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="house_number">ที่อยู่ปัจจุบันเลขที่ <span class="text-danger">*</span></label>
                    <input type="text" name="house_number" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="village">หมู่ที่ <span class="text-danger">*</span></label>
                    <input type="text" name="village" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="alley">ซอย <span class="text-danger">*</span></label>
                    <input type="text" name="alley" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="alley_road">ถนน <span class="text-danger">*</span></label>
                    <input type="text" name="alley_road" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="subdistrict">ตำบล <span class="text-danger">*</span></label>
                    <input type="text" name="subdistrict" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="district">อำเภอ <span class="text-danger">*</span></label>
                    <input type="text" name="district" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="province">จังหวัด <span class="text-danger">*</span></label>
                    <input type="text" name="province" class="form-control" required>
                </div>
            </div>

            <div>
                <div class="mb-3">
                    <label for="health_option">สุขภาพโดยรวมของเด็ก</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="health_option" id="health_option_1" value="option_1" required>
                            <label class="form-check-label" for="health_option_1">
                                สมบูรณ์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="health_option" id="health_option_2" value="option_2" required>
                            <label class="form-check-label" for="health_option_2">
                                ไม่สมบูรณ์
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="health_option_detail" class="form-control" placeholder="สุขภาพโดยรวมของเด็ก ไม่สมบูรณ์อย่างไร โปรดระบุ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="registration_blood_group">กลุ่มเลือด</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_1" value="option_1" required>
                        <label class="form-check-label" for="registration_blood_group_1">
                            เอ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_2" value="option_2" required>
                        <label class="form-check-label" for="registration_blood_group_2">
                            บี
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_3" value="option_3" required>
                        <label class="form-check-label" for="registration_blood_group_3">
                            เอบี
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_4" value="option_4" required>
                        <label class="form-check-label" for="registration_blood_group_4">
                            โอ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_5" value="option_5" required onclick="toggleOtherInput(this)">
                        <label class="form-check-label" for="registration_blood_group_5">
                            อื่นๆ
                        </label>
                    </div>
                    <div class="col-md-3" id="blood_group_detail">
                        <input type="text" name="blood_group_detail" class="form-control" placeholder="กลุ่มเลือด อื่นๆโปรดระบุ">
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="registration_congenital_disease">เด็กมีโรคประจำตัว</label>
                    <input type="text" name="registration_congenital_disease" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="edited_by">เมื่อมีอาการแก้ไขโดย (ระบุอาการ)</label>
                    <input type="text" name="edited_by" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="drug_allergy">เด็กมีประวัติการแพ้ยา (โปรดระบุ)</label>
                    <input type="text" name="drug_allergy" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="drug_allergy_detail">แพ้อาหาร คือ (โปรดระบุ)</label>
                    <input type="text" name="drug_allergy_detail" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="accident_history">ประวัติการได้รับอุบัติเหตุหรือเจ็บป่วย</label>
                    <input type="text" name="accident_history" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="accident_history_when_age">เมื่ออายุ (ปี)</label>
                    <input type="text" name="accident_history_when_age" class="form-control" required>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="ge_immunity">การได้รับภูมิคุ้มกัน</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_1" value="option_1">
                        <label class="form-check-label" for="ge_immunity_1">
                            คอตีบ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_2" value="option_2">
                        <label class="form-check-label" for="ge_immunity_2">
                            หัดเยอรมัน
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_3" value="option_3">
                        <label class="form-check-label" for="ge_immunity_3">
                            ไอกรน
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_4" value="option_4">
                        <label class="form-check-label" for="ge_immunity_4">
                            บาดทะยัก
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_5" value="option_5">
                        <label class="form-check-label" for="ge_immunity_5">
                            โปลิโอ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_6" value="option_6">
                        <label class="form-check-label" for="ge_immunity_6">
                            ตับอักเสบ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_7" value="option_7">
                        <label class="form-check-label" for="ge_immunity_7">
                            บีซีจี
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_8" value="option_8">
                        <label class="form-check-label" for="ge_immunity_8">
                            อื่นๆ
                        </label>
                    </div>
                    <input type="text" name="ge_immunity_detail" class="form-control" placeholder="การได้รับภูมิคุ้มกันอื่นๆ คือ">
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="specially_about">เด็กควรได้รับการดูแลเป็นพิเศษเรื่อง</label>
                    <input type="text" name="specially_about" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="the_eldest_son">เด็กเป็นบุตรคนที่</label>
                    <input type="text" name="the_eldest_son" class="form-control" required>
                </div>

                <div class="mb-3 col-md-3">
                    <label for="registration_number_of_siblings" class="form-label">จำนวนพี่น้องร่วมสายโลหิต</label>
                    <div style="display: flex; align-items: center;">
                        <input type="text" name="registration_number_of_siblings" class="form-control" required>
                        <span class="ms-2">คน</span>
                    </div>
                </div>

                <div class="mb-3 col-md-3">
                    <label for="elder_brother" class="form-label">พี่ชาย</label>
                    <div style="display: flex; align-items: center;">
                        <input type="text" name="elder_brother" class="form-control" required>
                        <span class="ms-2">คน</span>
                    </div>
                </div>

                <div class="mb-3 col-md-3">
                    <label for="younger_brother" class="form-label">น้องชาย</label>
                    <div style="display: flex; align-items: center;">
                        <input type="text" name="younger_brother" class="form-control" required>
                        <span class="ms-2">คน</span>
                    </div>
                </div>

                <div class="mb-3 col-md-3">
                    <label for="elder_sister" class="form-label">พี่สาว</label>
                    <div style="display: flex; align-items: center;">
                        <input type="text" name="elder_sister" class="form-control" required>
                        <span class="ms-2">คน</span>
                    </div>
                </div>

                <div class="mb-3 col-md-3">
                    <label for="younger_sister" class="form-label">น้องสาว</label>
                    <div style="display: flex; align-items: center;">
                        <input type="text" name="younger_sister" class="form-control" required>
                        <span class="ms-2">คน</span>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="fathers_name">บิดาชื่อ - สกุล</label>
                    <input type="text" name="fathers_name" class="form-control" required>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="fathers_age">อายุ (ปี)</label>
                    <input type="text" name="fathers_age" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="fathers_occupation">อาชีพ</label>
                    <input type="text" name="fathers_occupation" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="fathers_workplace">สถานที่ทำงาน</label>
                    <input type="text" name="fathers_workplace" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="fathers_phone">โทรศัพท์</label>
                    <input type="text" name="fathers_phone" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="registration_mother_name">มารดาชื่อ - สกุล</label>
                    <input type="text" name="registration_mother_name" class="form-control" required>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="mother_age">อายุ (ปี)</label>
                    <input type="text" name="mother_age" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="registration_mother_occupation">อาชีพ</label>
                    <input type="text" name="registration_mother_occupation" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="mother_workplace">สถานที่ทำงาน</label>
                    <input type="text" name="mother_workplace" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="mother_phone">โทรศัพท์</label>
                    <input type="text" name="mother_phone" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="marital_status">สถานภาพสมรสของบิดา/มารดา</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status_1" value="option_1" required>
                        <label class="form-check-label" for="marital_status_1">อยู่ด้วยกัน</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status_2" value="option_2" required>
                        <label class="form-check-label" for="marital_status_2">แยกกันอยู่</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status_3" value="option_3" required>
                        <label class="form-check-label" for="marital_status_3">เลิกร้างกัน</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status_4" value="option_4" required>
                        <label class="form-check-label" for="marital_status_4">บิดาหรือมารดาแต่งงานใหม่</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status_5" value="option_5" required>
                        <label class="form-check-label" for="marital_status_5">อื่นๆ</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="marital_status_details" class="form-control" placeholder="อื่นๆ โปรดระบุ">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="parent_name">ผู้ปกครองชื่อ - สกุล</label>
                    <input type="text" name="parent_name" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="parent_age">อายุ (ปี)</label>
                    <input type="number" name="parent_age" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="parent_relevant_as">เกี่ยวข้องเป็น</label>
                    <input type="text" name="parent_relevant_as" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="parent_occupation">อาชีพ</label>
                    <input type="text" name="parent_occupation" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="parent_workplace">สถานที่ทำงาน</label>
                    <input type="text" name="parent_workplace" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="parent_phone">โทรศัพท์</label>
                    <input type="text" name="parent_phone" class="form-control" required>
                </div>
            </div>
            <br>

            <span><strong>ข้าพเจ้าขอรับรองว่ารายการข้างต้นถูกต้องและเป็นความจริงทุกประการ</strong></span><br>
            <span>เอกสาร/หลักฐานที่ใช้ในการสมัครเรียน</span><br>
            <span class="ms-3">1. ตัวเด็ก</span><br>
            <span class="ms-3">2. สำเนาสูติบัตร</span><br>
            <span class="ms-3">3. สำเนาทะเบียนบ้าน</span><br>
            <span class="ms-3">4. สำเนาบัตรประชาชนบิดา-มารดา</span><br>
            <span class="ms-3">5. ใบสมัครของศูนย์พัฒนาเด็กเล็กที่กรอกข้อมูลสมบูรณ์แล้ว</span><br>
            <span class="ms-3">6. สำเนาสมุดบันทึกสุขภาพ (สีชมพู)</span><br><br>

            <hr><br>

            <div class="text-center w-full border">
                <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                    ส่งฟอร์มข้อมูล</button>
            </div>

        </div>
    </div>
</div>
@endsection
