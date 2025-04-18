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
            border: 1px solid rgb(255, 255, 255);
            text-align: start;
        }

        .box_text span {
            display: inline-flex;
            align-items: center;
            line-height: 1;
        }

        .box_text input[type="checkbox"] {
            width: 17px;
            /* ปรับขนาด checkbox ให้พอดีกับข้อความ */
            height: 17px;
            /* ปรับความสูงให้พอดีกับข้อความ */
            margin-right: 5px;
            margin-left: 5px;
            /* เว้นระยะห่างระหว่าง checkbox และข้อความ */
        }

        .box_text_border {
            margin-top: 5px;
            padding-left: 5px;
            padding-right: 5px;
            margin-bottom: 5px;
            border: 1px solid black;
            text-align: left;
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

        .page-break {
    border-top: 2px dashed #000; /* เส้นประสีดำ */
    margin-top: 20px; /* ระยะห่างจากด้านบน */
    margin-bottom: 20px; /* ระยะห่างจากด้านบน */
}
    </style>
</head>

<body>
    <div style="width: 100%; position: relative; ">
        <div class="box_text_border" style="float: right; padding:5px;">
            แบบ ผศผ. 01
        </div>
    </div>

    <div class="title_doc">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/pdf/ครุฑ.png'))) }}"
            alt="Logo" height="100" style="margin-left:4rem;"> <br>
        <strong>แบบคำขอรับเงินสงเคราะห์ และรับรองผู้รับผิดชอบในการจัดการศพผู้สูงอายุตามประเพณี</strong>
    </div>
    <div class="box_text" style="text-align: right; margin-top:5px;"><span>เขียนที่</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">
        </span>
        <div>
            <span>วันที่</span><span class="dotted-line" style="width: 5%; text-align: center;">
            </span><span>เดือน</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span><span>พ.ศ.</span><span class="dotted-line" style="width: 10%; text-align: center;">
            </span>
        </div>
    </div>
    <div class="box_text" style="margin-top: 0.1rem;">
        <span style="font-weight: bold; text-decoration: underline;">ส่วนที่ 1</span>
        <span>:สำหรับผู้ยื่นขอรับเงินสงเคราะห์ค่าจัดการศพผู้สูงอายุตามประเพณี</span>
        <div style="margin-left: 3rem;">
            <span>ข้าพเจ้า (นาย/นาง/นางสาว)</span><span class="dotted-line" style="width: 33%; text-align: center;">
            </span><span>อายุ</span><span class="dotted-line" style="width: 10%; text-align: center;">
            </span><span>ปี เลขบัตรประชาชน</span><span class="dotted-line" style="width: 20%; text-align: center;">
            </span>
        </div>
        <div>
            <span>ออกให้โดย</span><span class="dotted-line" style="width: 22.5%; text-align: center;">
            </span><span>วันออกบัตร</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span><span>วันหมดอายุ</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>อาชีพ</span><span class="dotted-line" style="width: 20%; text-align: center;">
            </span>
            <span>โทรศัพท์</span><span class="dotted-line" style="width: 20%; text-align: center;">
            </span>
            <span>โทรศัพท์มือถือ</span><span class="dotted-line" style="width: 20%; text-align: center;">
            </span>
        </div>
    </div>
    <div class="box_text" style="margin-top: 0.1rem;">
        <span style="font-weight: bold; text-decoration: underline;">ที่อยู่ตามทะเบียนบ้าน</span>
        <div >
            <span>อยู่บ้านเลขที่</span><span class="dotted-line" style="width: 11%; text-align: center;">
            </span><span>หมู่ที่</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span><span>ตรอก/ซอย</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ถนน</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>รหัสไปรษณีย์</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
        </div>
    </div>
    <div class="box_text" style="margin-top: 0.1rem;">
        <span style="font-weight: bold; text-decoration: underline;">ที่อยู่ปัจจุบัน</span><span style="margin-left:10px; font-weight: bold;"> (<input type="checkbox"> ตรงกับที่อยู่ตามทะเบียนบ้าน)</span>
        <div >
            <span>อยู่บ้านเลขที่</span><span class="dotted-line" style="width: 11%; text-align: center;">
            </span><span>หมู่ที่</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span><span>ตรอก/ซอย</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ถนน</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>รหัสไปรษณีย์</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
        </div>
    </div>
    <div class="box_text" style="margin-top: 0.1rem; font-weight: bold;">
        <div >
            <span style="margin-left: 3rem;">มีความเกี่ยวข้องกับผู้สูงอายุที่ตายในฐานะเป็น</span><span class="dotted-line" style="width: 33%; text-align: center;">
            </span><span>และเป็นผู้รับผิดชอบในการจัดการศพผู้สูงอายุ</span><span>โดยได้รับความยินยอมจากบิดา/มารดา/บุตร/พี่น้อง/เครือญาติ/ของผู้สูงอายุที่ตายเป็นผู้รับเงินสงเคราะห์ค่าจัดการศพของผู้สูงอายุที่ตาย</span>
        </div>
        
    </div>
    <div class="box_text">
        <span>ชื่อ (นาย/นาง/นางสาว)</span><span class="dotted-line" style="width: 65%; text-align: center;">
        </span><span>อายุ</span><span class="dotted-line" style="width: 15%; text-align: center;">
        </span><span>ปี </span><span>เลขบัตรประจำตัวประชาชน</span><span class="dotted-line" style="width: 82%; text-align: center;">
        </span>
    </div>
    <div class="box_text" style="margin-top: 0.1rem;">
        <span style="font-weight: bold; text-decoration: underline;">ที่อยู่ตามทะเบียนบ้าน</span>
        <div >
            <span>อยู่บ้านเลขที่</span><span class="dotted-line" style="width: 11%; text-align: center;">
            </span><span>หมู่ที่</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span><span>ตรอก/ซอย</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ถนน</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>รหัสไปรษณีย์</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
        </div>
    </div>
    <div class="box_text" style="margin-top: 0.1rem;">
        <span style="font-weight: bold; text-decoration: underline;">ที่อยู่ปัจจุบัน</span><span style="margin-left:10px; font-weight: bold;"> (<input type="checkbox"> ตรงกับที่อยู่ตามทะเบียนบ้าน)</span>
        <div >
            <span>อยู่บ้านเลขที่</span><span class="dotted-line" style="width: 11%; text-align: center;">
            </span><span>หมู่ที่</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span><span>ตรอก/ซอย</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ถนน</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>รหัสไปรษณีย์</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
        </div>
    </div>
    <div class="box_text" style="margin-top: 0.1rem;">
        <div >
            <span style="font-weight: bold;">ถึงแก่กรรมด้วยสาเหตุ</span><span class="dotted-line" style="width: 36%; text-align: center;">
            </span><span>เมื่อวันที่</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span><span>เดือน</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span>
            <span>พ.ศ.</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span>
            <span style="font-weight: bold;">ตามใบมรณบัตรเลขที่</span><span class="dotted-line" style="width: 36%; text-align: center;">
            </span><span>เมื่อวันที่</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span><span>เดือน</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span>
            <span>พ.ศ.</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span>
        </div>
    </div>
    <div class="box_text" style="margin-top: 0.1rem;">
        <div style="margin-left: 3rem; font-weight: bold;">
            ข้าพเจ้าขอรับรองว่าข้อความและเอกสารที่ได้ยื่นนี้เป็นความจริงทุกประการ และข้าพเจ้าไม่เคยได้รับเงินสงเคราะห์ในการจัดการศพผู้สูงอายุราย
        </div>
        <div style=" font-weight: bold;">
            นี้มาก่อน หากข้อความและเอกสารที่ยื่นเรื่องนี้เป็นเท็จ ข้าพเจ้ายินยอมให้ดำเนินการตามกฏหมาย
        </div>
        <div style="margin-left: 3rem; font-weight: bold;">
            ข้าพเจ้าตกลงยินยอมให้เปิดเผยข้อมูลส่วนบุคคลของข้าพเจ้าและข้อมูลในบัตรประชาชนพร้อมภาพใบหน้าของข้าพเจ้าไปใช้แก่ห่วยงานของรัฐและ    
        </div>
        <div style=" font-weight: bold;">
            ยินยอมให้ห่วยงานของรัฐร้องขอ สอบถามและใช้ข้อมูลส่วนบุคคลของข้าพเจ้าแก่หน่วยงานของรัฐที่เกี่ยวข้อง เพื่อประโยชน์ในการพิจารณาจัดสรรสวัสดิ
        </div>
        <div style=" font-weight: bold;">
            การและหรือเพื่อประโยชน์ในการดำเนินตามกฏหมายชองรัฐ และหรือเพื่อประโยชน์ในการวางแผนให้ความช่วยเหลือของหน่วยงานที่เกี่ยวข้องโดยให้ถือว่า
        </div>
        <div style=" font-weight: bold;">
           คู่ฉบับและบรรดาสำเนา ภาพถ่ายข้อมูลอิเล็กทรอนิกส์ หรือโทรสารที่ทำขึ้นจากหนังสือให้ความยินยอมฉบับนี้ เป็นหลักฐานในการให้ความยินยอมของข้าพ
        </div>
        <div style=" font-weight: bold;">
            เจ้าเช่นเดียวกัน
        </div>

    </div>
    <div class="box_text" style="text-align: right;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">
        </span><span>ผู้ยื่นคำขอ</span>
        <div style="margin-right: 40px;">
            <span>(</span>
            <span class="dotted-line"
                style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
        <div style="margin-right: 50px;">
            <span>วันที่</span><span class="dotted-line" style="width: 8%; text-align: center;">
            </span><span>/</span><span class="dotted-line" style="width: 8%; text-align: center;">
            </span><span>/</span><span class="dotted-line" style="width: 8%; text-align: center;">
            </span>
        </div>
    </div>
    <div style="position: absolute; bottom: -20px; right: -10px;  font-weight: bold;">
        มีต่อหน้า 2
    </div>
    <div style="page-break-before: always;"></div>
    <div style="width: 100%; position: relative; ">
        <div class="box_text_border" style="float: right; padding:5px;">
            แบบ ผศผ. 01
        </div>
    </div>

    <div class="title_doc">
        <strong>- 2 -</strong>
    </div>
    <div class="box_text" style="margin-top: 0.1rem;">
        <span style="font-weight: bold; text-decoration: underline;">ส่วนที่ 1</span>
        <span>:ข้อมูลผู้ให้การรับรองผู้รับผิดชอบในการจัดการศพผู้สูงอายุตามประเพณี</span>
        <div >
            <span>ข้าพเจ้า (นาย/นาง/นางสาว)</span><span class="dotted-line" style="width: 38%; text-align: center;">
            </span><span>ตำแหน่ง</span><span class="dotted-line" style="width: 38%; text-align: center;">
            </span><span>สังกัดหน่วยงาน</span><span class="dotted-line" style="width: 39%; text-align: center;">
            </span><span>เลขบัตรประชาชน</span><span class="dotted-line" style="width: 39%; text-align: center;">
            </span>
        </div>
        <div>
            <span>ออกให้โดย</span><span class="dotted-line" style="width: 33%; text-align: center;">
            </span><span>วันออกบัตร</span><span class="dotted-line" style="width: 22%; text-align: center;">
            </span><span>วันหมดอายุ</span><span class="dotted-line" style="width: 22%; text-align: center;">
            </span>
            <span>อยู่บ้านเลขที่</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span>
            <span>หมู่ที่</span><span class="dotted-line" style="width: 10%; text-align: center;">
            </span>
            <span>ตรอก/ซอย</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ถนน</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 15%; text-align: center;">
            </span>
            <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 19%; text-align: center;">
            </span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 20%; text-align: center;">
            </span>
            <span>รหัสไปรษณีย์</span><span class="dotted-line" style="width: 12%; text-align: center;">
            </span>
            <span>โทรศัพท์</span><span class="dotted-line" style="width: 20%; text-align: center;">
            </span><span>ขอรับรองว่าผู้ยื่นคำขอดังกล่าวเป็นผู้รับผิดชอบในการจัดการศพผู้สูงอายุรายนี้จริง</span>
        </div>
        <div class="box_text" style="text-align: right;">
            <span>(ลงชื่อ)</span>
            <span class="dotted-line" style="width: 30%; text-align: center;">
            </span><span>ผู้ยื่นคำขอ</span>
            <div style="margin-right: 40px;">
                <span>(</span>
                <span class="dotted-line"
                    style="width: 30%; text-align: center;"></span>
                <span>)</span>
            </div>
            <div style="margin-right: 40px;">
                <span>ตำแหน่ง</span>
            <span class="dotted-line" style="width: 30%; text-align: center;">
            </span>
            </div>
            
            <div style="margin-right: 50px;">
                <span>วันที่</span><span class="dotted-line" style="width: 8%; text-align: center;">
                </span><span>/</span><span class="dotted-line" style="width: 8%; text-align: center;">
                </span><span>/</span><span class="dotted-line" style="width: 8%; text-align: center;">
                </span>
            </div>
            
        </div>
        <div class="page-break"></div>
        <div style=" font-weight: bold;">
            คำชี้แจง
        </div>
        <div  class="box_text" style="text-align: left;">
            <span>1. ผู้ยื่นคำขอรับเงินสงเคราะห์ค่าจัดการศพผู้สูงอายุ หมายถึง ผู้รับผิดชอบในการจัดการศพผู้สูงอายุที่ถึงแก่กรรม เช่น บิดา มารดา สามี ภรรยา บุตร ญาติพี่น้อง</span>
            <span>ของผู้สูงอายุที่ถึงแก่กรรม ในกรณีที่ผู้สูงอายุไม่มีญาติ บุคคลที่รับผิดชอบใการจัดการศพผู้สูงอายุเป็นผู้ยื่นคำขอ รับเงินค่าจัดการศพ เช่น ผู้ให้การดูแล ผู้นำชุมชน </span>
            <span>กำนัน ผู้ใหญ่บ้าน เป็นต้น รวมทั้งมูลนิธิ สมาคม วัด มัสยิด โบสถ์</span>
            <span>2. ผู้ให้คำรับรองผู้รับผิดชอบในการจัดการศพผู้สูงอายุตามประเพณี หมายถึง ผู้อำนวยการเขต หรือนายอำเภอ หรือกำนัน หรือผู้ใหญ่บ้าน หรือนายกเทศมนตรี </span>
            <span>หรือนายกองค์การบริหารส่วนตำบล หรือนายกเมืองพัทยา หรือประธานชุมชน หรือผู้อำนวยศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ ผู้ปกครองสถาน</span>
            <span>สงเคราะห์ ผู้ปกครองสถานดูแล ผู้อำนวยการสถานคุ้มครอง หรือผู้ปกครองสถานใด ๆ ของรัฐหรือองค์กรปกครองส่วนท้องถิ่น</span>
            <span>3. คุณสมบัติผู้สูงอายุ</span>
            <div class="box_text" style="margin-left: 30px;">
                <span>(1) มีอายุเกินหกสิบปีบริบูรณ์ขึ้นไป</span><br>
                <span>(2) มีสัญชาติไทย</span><br>
                <span>(3) ผู้สูงอายุที่ได้รับสิทธิตามโครงการลงทะเบียนเพื่อสวัสดิการแห่งรัฐ หรือโครงการสวัสดิการ ในลักษณะเดียวกันที่เรียกชื่อเป็นอย่างอื่น หรือ</span>
            </div>
            <span>เป็นผู้สูงอายุที่ผู้อำนวยการเขตหรือนายอำเภอ หรือกำนัน หรือผู้ใหญ่บ้าน หรือนายกเทศมนตรี หรือนายกองค์การบริหารส่วนตำบล หรือนายกเมืองพัทยา หรือ </span>
            <span>ประธานชุมชน รับรองว่ามีคุณสมบัติตามโครงการดังกล่าว</span><br>
            <span>4. หลักฐานการยื่นคำขอ</span>
            <div class="box_text" style="margin-left: 30px;">
                <span>(1) ใบมรณบัตรของผู้สูงอายุ</span><br>
                <span>(2) บัตรประจำตัวประชาชนของผู้สูงอายุที่ตาย หรือบัตรประจำตัวประชาชนของผู้สูงอายุที่ตาย พร้อมหนังสือรับรอง ตามข้อ 5 (3) แล้วแต่กรณี </span>
                <span style="margin-left: -30px;">หากไม่มีบัตรประจำตัวประชาชนให้ใช้เอกสารราชการ ที่มีเลขประจำตัวประชาชนและวัน เดือน ปีเกิดของผู้สูงอายุที่ตายแทนได้</span>
                <span>(3) บัตรประจำตัวประชาชน หรือบัตรอื่นที่ออกโดยหน่วยงานของรัฐที่มีรูปถ่ายและเลขประจำตัวประชาชนของผู้ยื่นคำขอกรณีการจัดการศพตาม</span>
                <span style="margin-left: -30px;">ประเพณีโดยมูลนิธิสมาคม วัด มัสยิด โบสถ์ ให้แนบหนังสือแสดงการจดทะเบียน หรืออนุญาตให้สร้าง จัดตั้ง หรือดำเนินงานมูลนิธิ สมาคม วัด มัสยิด โบสถ์ด้วย</span>
                <span>(4) สมุดบัญชีหรือเลขที่บัญชีธนาคารของผู้ยื่นคำขอ เว้นแต่ประสงค์จะขอรับเงินสดให้ดำเนินการตามระเบียบของทางราชการ</span>
                <span>(5) แบบคำขอรับเงินสงเคราะห์และรับรองผู้รับผิดชอบในการจัดการศพผู้สูงอายุตามประเพณี (แบบ ศผส. 01)</span>
            </div>
            <span>5. การยื่นคำขอ ยื่นภายใน 6 เดือนนับตั้งแต่วันออกใบมรณบัตร โดยยื่นคำขอในท้องที่ที่ผู้สูงอายุมีชื่ออยู่ในทะเบียนบ้านหรือภูมิลำเนา ที่ถึงแก่ความตาย ในขณะถึงแก่ความตาย ดังต่อไปนี้</span>
            <div class="box_text" style="margin-left: 30px;">
                <span>(1) ในกรุงเทพมหานคร ให้ยื่นคำขอที่สำนักงานเขต สังกัดกรุงเทพมหานคร</span>
                <span>(2) ในจังหวัดอื่น ให้ยื่นคำขอต่อสำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์จังหวัด หรือที่ว่าการอำเภอ หรือสำนักงานเทศบาล </span>
                <span style="margin-left: -30px;">หรือที่ทำการองค์การบริหารส่วนตำบล หรือศาลาว่าการเมืองพัทยา</span>
            </div>
            <span>6. ผู้ยื่นคำขอและผู้รับรองต้องไม่เป็นบุคคลเดียวกัน</span>
        </div>
    </div>
</body>


</html>
