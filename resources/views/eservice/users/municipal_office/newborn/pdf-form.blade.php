<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>PDF Report</title>

    <style>
        @font-face {
            font-family: 'sarabun';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'sarabun-bold';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew-Bold.ttf') }}") format('truetype');
        }

        body {
            font-family: 'sarabun', 'sarabun-bold', sans-serif;
            font-size: 17px;
            margin: 0;
            padding: 0;
            line-height: 1;
        }


        .regis_number {
            text-align: right;
            margin-right: 8px;
        }

        .title_doc {
            text-align: center;
        }

        .box_text {
            border: 1px solid rgba(255, 255, 255, 0);
            text-align: left;
        }

        .box_text span {
            display: inline-flex;
            align-items: left;
            line-height: 1;
        }

        .box_text input[type="checkbox"] {
            width: 17px;
            /* ปรับขนาด checkbox ให้พอดีกับข้อความ */
            height: 17px;
            /* ปรับความสูงให้พอดีกับข้อความ */
            margin-right: 5px;
            margin-left: 5px;
            margin-bottom: 6px;
            /* เว้นระยะห่างระหว่าง checkbox และข้อความ */
        }

        .box_text_border {
            margin-top: 5px;
            padding-left: 5px;
            padding-right: 5px;
            margin-bottom: 5px;
            border: 2px solid black;
            text-align: left;


            /* ชิดขวา */
        }

        .box_text_border span {
            display: inline-flex;
            align-items: left;
            line-height: 0.3;
        }

        .box_text_border input[type="checkbox"] {
            width: 17px;
            /* ปรับขนาด checkbox ให้พอดีกับข้อความ */
            height: 17px;
            /* ปรับความสูงให้พอดีกับข้อความ */
            margin-right: 5px;
            margin-left: 5px;
            /* เว้นระยะห่างระหว่าง checkbox และข้อความ */
        }

        .dotted-line {
            margin-left: 2px;
            color: blue;
            border-bottom: 2px dotted blue;
            word-wrap: break-word;
            /* ห่อข้อความที่ยาวเกิน */
            overflow-wrap: break-word;
            /* รองรับ browser อื่น */
        }
    </style>
</head>

<body>
    <div style="width: 100%; position: relative; ">
        <div class="box_text_border" style="float: right; padding:5px;">
            แบบ ดร.01
        </div>
    </div>
    <div class="title_doc">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/pdf/ครุฑ.png'))) }}"
            alt="Logo" height="100" style="margin-left:4rem;"> <br>
        <div class="box_text" style="text-align: center; margin-top:5px;">
            <div style="font-weight: bold;">
                <span>แบบคำร้องขอลงทะเบียน</span><br>
                </span><span>เพื่อขอรับสิทธิเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด ปีงบประมาณ</span><span
                    class="dotted-line" style="width: 8%; text-align: center;">
                </span>
            </div>
        </div>
    </div>
    <div class="box_text_border" style=" margin-left: auto; text-align: right; width: 18rem;">
        <span>หน่วยงานรับลงทะเบียน</span><span class="dotted-line" style="width: 60%; text-align: center;">
        </span><br><span>วันที่</span><span class="dotted-line" style="width: 25%; text-align: center;">
        </span><span>เดือน</span><span class="dotted-line" style="width: 25%; text-align: center;">
        </span><span>พ.ศ.</span><span class="dotted-line" style="width: 25%; text-align: center;">
        </span>
    </div>
    <div class="box_text" style="margin-top: -25px;">
        <span style="font-weight: bold; text-decoration: underline;">กรุณากรอกแบบฟอร์มให้ครบทุกช่อง</span>
    </div>
    <div class="box_text">
        <span style="font-weight: bold; ">1. ข้อมูลผู้ลงทะเบียน</span>
        <input type="checkbox"><span>เป็นนผู้ลงทะเบียนตามโคงการเพื่อสวัสดิการแห่งรัฐ</span>
        <input type="checkbox"><span>ไม่เป็นนผู้ลงทะเบียนตามโคงการเพื่อสวัสดิการแห่งรัฐ</span>
        <div style="margin-left: 3rem;">
            <span>1.1</span><input type="checkbox"><span>บิดา</span>
            <input type="checkbox"><span>มารดา</span>
            <input type="checkbox"><span>ผู้ปกครอง ความสัมพันธ์กับเด็กแรกเกิด ระบุ</span><span class="dotted-line"
                style="width: 46%; text-align: center;">
            </span>
            <span>1.2</span><input type="checkbox"><span>เด็กชาย</span>
            <input type="checkbox"><span>เด็กหญิง</span>
            <input type="checkbox"><span>นาย</span>
            <input type="checkbox"><span>นาง</span>
            <input type="checkbox"><span>นางสาว</span><span class="dotted-line" style="width: 52%; text-align: center;">
            </span>
            <span>1.3 เลขประจำตัวประชาชน</span><span class="dotted-line" style="width: 80%; text-align: center;">
            </span>
            <span>1.4 เกิดเมื่อวันที่</span><span class="dotted-line" style="width: 19%; text-align: center;">
            </span><span>เดือน</span><span class="dotted-line" style="width: 19%; text-align: center;">
            </span><span>พ.ศ.</span><span class="dotted-line" style="width: 19%; text-align: center;">
            </span><span>อายุ</span><span class="dotted-line" style="width: 19%; text-align: center;">
            </span><span>ปี</span>
            <span>1.5 สัญชาติ</span><span class="dotted-line" style="width: 91%; text-align: center;">
            </span>
            <span>1.6 ที่อยู่ตามทะเบียนบ้าน</span>
            <div style="margin-left: 1rem;">
                <span>บ้านเลขที่</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>หมู่ที่</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>อาคาร/ตึก</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>ชั้น</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>เลขที่ห้อง</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>หมู่บ้าน</span><span class="dotted-line" style="width: 15.5%; text-align: center;">
                </span>
                <span>ตรอก/ซอย</span><span class="dotted-line" style="width: 26%; text-align: center;">
                </span>
                <span>ถนน</span><span class="dotted-line" style="width: 26%; text-align: center;">
                </span>
                <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 26%; text-align: center;">
                </span>
                <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 25.5%; text-align: center;">
                </span>
                <span>จังหวัด</span><span class="dotted-line" style="width: 25.5%; text-align: center;">
                </span>
                <span>รหัสไปรษณี</span><span class="dotted-line" style="width: 25.5%; text-align: center;">
                </span>
                <span>โทรศัพท์บ้าน</span><span class="dotted-line" style="width: 39.5%; text-align: center;">
                </span>
                <span>โทรศัพท์มือถือ</span><span class="dotted-line" style="width: 39.5%; text-align: center;">
                </span>
            </div>
            <span>1.7 ที่อยู่ปัจุบัน <input type="checkbox"><span>ใช้ที่อยู่ตามทะเบียนบ้าน</span></span>
            <div style="margin-left: 1rem;">
                <span>บ้านเลขที่</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>หมู่ที่</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>อาคาร/ตึก</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>ชั้น</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>เลขที่ห้อง</span><span class="dotted-line" style="width: 10%; text-align: center;">
                </span><span>หมู่บ้าน</span><span class="dotted-line" style="width: 15.5%; text-align: center;">
                </span>
                <span>ตรอก/ซอย</span><span class="dotted-line" style="width: 26%; text-align: center;">
                </span>
                <span>ถนน</span><span class="dotted-line" style="width: 26%; text-align: center;">
                </span>
                <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 26%; text-align: center;">
                </span>
                <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 25.5%; text-align: center;">
                </span>
                <span>จังหวัด</span><span class="dotted-line" style="width: 25.5%; text-align: center;">
                </span>
                <span>รหัสไปรษณี</span><span class="dotted-line" style="width: 25.5%; text-align: center;">
                </span>
                <span>โทรศัพท์บ้าน</span><span class="dotted-line" style="width: 39.5%; text-align: center;">
                </span>
                <span>โทรศัพท์มือถือ</span><span class="dotted-line" style="width: 39.5%; text-align: center;">
                </span>
            </div>
            <span>1.8 อาชีพ</span><input type="checkbox"><span>ไม่ได้ประกอบอาชีพ</span><input
                type="checkbox"><span>ประกอบอาชีพ ระบุ</span><span class="dotted-line"
                style="width: 57%; text-align: center;"></span>
            <span>1.9 การศึกษา</span><input type="checkbox"><span>ไม่ได้รับการศึกษา</span><input
                type="checkbox"><span>กำลังศึกษา</span><span class="dotted-line"
                style="width: 62%; text-align: center;"></span>
            <input type="checkbox" style="margin-left: 1rem;"><span>จบการศึกษา (สูงสุด)</span><span
                class="dotted-line" style="width: 79%; text-align: center;"></span>
        </div>
        <div class="box_text" style="margin-top: -11px;">
            <span style="font-weight: bold;">2. ข้อมูลเด็ก (ตามสูติบัตร)</span>
            <div style="margin-left: 3rem;">
                <span>2.1 ชื่อ-นามสกุล</span>
                <input type="checkbox"><span>เด็กชาย</span>
                <input type="checkbox"><span>เด็กหญิง</span>
                <span class="dotted-line" style="width: 67%; text-align: center;">
                </span>
                <span>2.2 เลขประจำตัวประชาชน</span><span class="dotted-line" style="width: 80%; text-align: center;">
                </span>
                <span>2.3 เกิดเมื่อวันที่</span><span class="dotted-line" style="width: 19%; text-align: center;">
                </span><span>เดือน</span><span class="dotted-line" style="width: 19%; text-align: center;">
                </span><span>พ.ศ.</span><span class="dotted-line" style="width: 19%; text-align: center;"></span>
                <div style="margin-left: -0.5rem;">
                    <span style="text-decoration: underline;">ข้อมูลมารดา</span>
                    <input type="checkbox"><span>เป็นนผู้ลงทะเบียนตามโคงการเพื่อสวัสดิการแห่งรัฐ</span>
                    <input type="checkbox"><span>ไม่เป็นนผู้ลงทะเบียนตามโคงการเพื่อสวัสดิการแห่งรัฐ</span>
                </div>
                <span>2.4</span>
                <input type="checkbox"><span>เด็กหญิง</span>
                <input type="checkbox"><span>นาง</span>
                <input type="checkbox"><span>นางสาว</span>
                <span class="dotted-line" style="width: 68%; text-align: center;"></span>
                <span>2.5 เลขประจำตัวประชาชน</span><span class="dotted-line" style="width: 80%; text-align: center;">
                </span>
                <span>2.6 อายุ</span><span class="dotted-line"
                    style="width: 14%; text-align: center;"></span><span>ปี</span>
                <span>2.7 สัญญาติ</span><span class="dotted-line" style="width: 14%; text-align: center;"></span>
                <span>2.8 ประกอบอาชีพ</span><span class="dotted-line" style="width: 14%; text-align: center;"></span>
                <span>2.9 จบการศึกษา</span><span class="dotted-line" style="width: 14%; text-align: center;"></span>
                <div style="margin-left: -0.5rem;">
                    <span style="text-decoration: underline;">ข้อมูลบิดา</span>
                    <input type="checkbox"><span>เป็นนผู้ลงทะเบียนตามโคงการเพื่อสวัสดิการแห่งรัฐ</span>
                    <input type="checkbox"><span>ไม่เป็นนผู้ลงทะเบียนตามโคงการเพื่อสวัสดิการแห่งรัฐ</span>
                </div>
                <input type="checkbox"><span>ไม่ปรากฏบิดา</span> <br>
                <span>2.10</span><input type="checkbox"><span>เด็กชาย</span>
                <input type="checkbox"><span>นาย</span>
                <span class="dotted-line" style="width: 78%; text-align: center;"></span>
                <span>2.11 เลขประจำตัวประชาชน</span><span class="dotted-line" style="width: 79%; text-align: center;">
                </span>
                <span>2.12 อายุ</span><span class="dotted-line"
                    style="width: 13%; text-align: center;"></span><span>ปี</span>
                <span>2.13 สัญญาติ</span><span class="dotted-line" style="width: 13%; text-align: center;"></span>
                <span>2.14 ประกอบอาชีพ</span><span class="dotted-line" style="width: 13%; text-align: center;"></span>
                <span>2.15 จบการศึกษา</span><span class="dotted-line" style="width: 13%; text-align: center;"></span>

            </div>
        </div>
    </div>
    <div style="page-break-before: always;"></div>
    <div class="title_doc">
        <strong>- 2 -</strong>
    </div>
    <div class="box_text" style="margin-top: -11px;">
        <span style="font-weight: bold;">3. ช่องทางการรับเงินอุดหนุน</span>
        <div style="margin-left: 3rem;">
            <span style="font-weight: bold;">3.1 ผู้ยื่นคำร้องขอลงทะเบียนสัญชาติไทย</span>
            <input type="checkbox"><span>ผูกพร้อมเพย์ด้วยเลขบัตรประชาชนนนเท่านั้น</span>
            <span style="font-weight: bold;">3.2 ผู้ยื่นคำร้องขอลงทะเบียนที่ไม่มีสัญชาติไทย เลือกเพียง 1 ธนาคาร</span>
            <div style="margin-left: -0.5rem;">
                <input type="checkbox"><span>ธนาคารกรุงไทย ประเภทบัญชี ออมทรัพย์</span>
                <input type="checkbox"><span>ธนาคาร ธ.ภ.ส.ประเภทบัญชี ออมทรัพย์</span>
                <input type="checkbox"><span>ธนาคาร ออมสิน.ประเภทบัญชี เงินฝากเผื่อเรียก</span>
            </div>
            <span>ชื่อบัญชี</span><span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>เลขที่บัญชี</span><span class="dotted-line" style="width: 30%; text-align: center;"></span>
        </div>
        <span style="font-weight: bold;">4. ยื่นเอกสารหลักฐานประกอบการลงทะเบียน ดังนี้ (สำรหับเจ้าหน้าที่)</span>
        <div style="margin-left: 3rem;">
            <input type="checkbox"><span>4.1 แบบคำร้องขอลงทะเบียน(ดร.01)</span><br>
            <input type="checkbox"><span>4.2 แบบรับรองสถานะของครัวเรือน(ดร.02)</span><br>
            <input type="checkbox"><span>4.3 สำเนาสูติบัตรเด็กแรกเกิด</span><br>
            <input type="checkbox"><span>4.4 หนังสือรับรองรายได้หรือใบรับรองเงินเดือน
                (ของทุกคนที่มีรายได้ประจำเป็นสมาชิกในครัวเรือนที่เป็นเจ้าหนน้าที่ของรัฐ </span>
            </span><span style="margin-left: 2rem;">พนักงานรัฐวิสาหกิจหรือพนักงานบริษัท) จำนวน</span><span
                class="dotted-line" style="width: 30%; text-align: center;"></span><span>ใบ (ถ้ามี)</span> <br>
            <input type="checkbox"><span>4.5 เอกสาร หรือบัตรประจำตัวเจ้าหน้าที่ของรัฐ
                บัตรหรือเอกสารอื่นใดที่แสดงสถานะหรือตำแหน่งของผู้รับรองคนที่ 1 และผู้รับรองคนที่สอง</span> <br>
            <input type="checkbox"><span>4.6
                สำเนาหน้าแรกสมุดบัญชีเงินฝากของผู้ที่จะรับเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด(เฉพาะผู้ยื่นนคำร้องขอลงทะเบียนที่ไม่มีสัญชาติไทย)</span>

        </div>
        <span style="margin-left: 1rem;">ข้าพเจ้าขอรับรองว่าข้อความและเอกสารที่ได้ยื่นนี้เป็นความจริงทุกประการ และยินยอมให้เปิดเผยข้อมูลส่วนบุคคลของข้าพเจ้าแก่หน่วยงานของรัฐที่เกี่ยว</span>
        <span>ข้อง ยินยอมให้นำข้อมูลในบัตรประจำตัวประชาชนพร้อมภาพใบหน้าของข้าพเจ้าไปใช้เพื่อตรวจสอบสถานะบุคคลในฐานข้อมูลทะเบียนราษฎร ข้อมูลทางการเงิน</span>
        <span>และทรัพย์สิน หากข้อความและเอกสารที่ยื่นเรื่องนี้เป็นเท็จ ข้าพเจ้ายินยอมคืนเงินในส่วนที่รับไปโดยไม่มีสิทธิ หรือยินยอมให้หักจากสวัสดิการอื่นหรือหักจาก</span>
        <span>บัญชีเงินฝากธนาคารของข้าพเจ้าได้ ในการนี้ข้าพเจ้ายินดีรับข้อมูลข่าวสารเพื่อส่งเสริมสุขภาพของแม่และเด็กผ่านช่องทางต่าง ๆ</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top:2rem; display: inline-block; width:49%;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 60%; text-align: center;">
        </span><span>ผู้ลงทะเบียน</span>
        <div style="margin-left: 40px;">
            <span>(</span>
            <span class="dotted-line"
                style="width: 60%; text-align: center;"></span>
            <span>)</span>
        </div> 
        <div >
            <span>วันที่ลงทะเบียน</span><span class="dotted-line" style="width: 60%; text-align: center;">
            </span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:4rem; display: inline-block; width:49%;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 60%; text-align: center;">
        </span><span>ผู้รับลงทะเบียน</span>
        <div style="margin-right: 40px;">
            <span>(</span>
            <span class="dotted-line"
                style="width: 60%; text-align: center;"></span>
            <span>)</span>
        </div>
        <div style="margin-right: 40px;">
            <span>ตำแหน่ง</span>
        <span class="dotted-line" style="width: 64%; text-align: center;">
        </span>
        </div>
        
        <div style="margin-right: 32px;">
            <span>วันที่ลงทะเบียน</span><span class="dotted-line" style="width: 70%; text-align: center;">
            </span>
        </div>
    </div>
    <div style="border-bottom: 1px dotted black; padding-bottom: 4px; margin-bottom: 8px; text-align:center;">
        ตัดตามรอยประ
    </div>
    
</body>

</html>
