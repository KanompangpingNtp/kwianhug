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
            margin-bottom: 5px;
            /* เว้นระยะห่างระหว่าง checkbox และข้อความ */
        }

        .box_text_border {
            margin-top: 5px;
            padding-left: 5px;
            padding-right: 5px;
            margin-bottom: 5px;
            border: 2px solid black;
            text-align: left;
            ;
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
    <div style="text-align: right;">
        <strong>
            แบบ ขถด.๑
        </strong>
    </div>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width: 50%; text-align: left;">
                <!-- ด้านซ้าย (เว้นไว้ หรือใส่ข้อความก็ได้) -->
            </td>
            <td style="width: 50%; text-align: right;">
                <div style="display: inline-block; padding: 5px; border: 1px solid #000;">
                    <span>เลขที่รับ</span>
                    <span
                        style="display: inline-block; width: 200px; border-bottom: 1px dotted #000; margin-left: 5px;"></span>
                    <br><span>วันที่</span>
                    <span
                        style="display: inline-block; width: 200px; border-bottom: 1px dotted #000; margin-left: 5px;"></span>
                    <br><span>ลงชื่อ</span>
                    <span
                        style="display: inline-block; width: 150px; border-bottom: 1px dotted #000; margin-left: 5px;"></span>
                    <span>ผู้รับคำขอ</span><br>
                    <span>(</span><span
                        style="display: inline-block; width: 150px; border-bottom: 1px dotted #000; margin-left: 5px;"></span>
                    <span style="margin-right: 40px;">)</span>
                </div>
            </td>
        </tr>
    </table>

    <div style="text-align: center; margin-top: -80px; margin-left:-16rem;">
        <strong style="text-decoration: underline; ">
            ใบแจ้งการขุดดิน/ถมดิน<br>
            ตามพระราชบัญญัติการขุดดินและถมดิน พ.ศ.๒๕๔๓
        </strong>
    </div>
    <div class="box_text" style="text-align: right; margin-top:3rem;">
        <span>เขียนที่</span><span class="dotted-line" style="width: 40%; text-align: center;"></span>
    </div>
    <div class="box_text" style="margin-left: 3rem;">
        <span>ข้อ ๕ พร้อมหนังสือฉบับนี้ ข้าพเจ้า ได้แนบเอกสารหลักฐานต่างๆ มาด้วยแล้ว คือ</span><br>
        <input type="checkbox"><span>แผนผังบริเวณที่จะทำการขุดดิน/ถมดิน
            และแผนผังที่บริเวณแสดงเขตที่ดินและที่ดินบริเวณข้างเคียง</span><br>
        <span style="margin-top: 1rem;">ข้าพเจ้า</span><span class="dotted-line"
            style="width: 60%; text-align: center;"></span><span>เจ้าของที่ดิน/ผู้ครอบครองที่ดิน/ตัวแทน</span><br>
        <input type="checkbox"><span>เป็นบุคคลธรรมดา อยู่บ้านเลขที่</span><span class="dotted-line"
            style="width: 20.5%; text-align: center;"></span>
        <span>ตรอก/ซอย</span><span class="dotted-line" style="width: 20.5%; text-align: center;"></span>
        <span>ถนน</span><span class="dotted-line" style="width: 20.5%; text-align: center;"></span>
        <div style="margin-left: -3rem;">
            <span>หมู่ที่</span><span class="dotted-line" style="width: 18.7%; text-align: center;"></span>
            <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 18.7%; text-align: center;"></span>
            <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 18.7%; text-align: center;"></span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 18.7%; text-align: center;"></span>
        </div>
        <input type="checkbox"><span style="margin-top: 1rem;">เป็นนิติบุคคลประเภท</span><span class="dotted-line"
            style="width: 34.8%; text-align: center;"></span>
        <span>จดทะเบียนเมื่อ</span><span class="dotted-line" style="width: 34.8%; text-align: center;"></span>
        <div style="margin-left: -3rem;">
            <span>เลขทะเบียน</span><span class="dotted-line" style="width: 38.5%; text-align: center;"></span>
            <span>มีสำนักงานตั้งอยู่เลขที่</span><span class="dotted-line"
                style="width: 38.5%; text-align: center;"></span>
            <span>ตรอก/ซอย</span><span class="dotted-line" style="width: 28.3%; text-align: center;"></span>
            <span>ถนน</span><span class="dotted-line" style="width: 28.3%; text-align: center;"></span>
            <span>หมู่ที่</span><span class="dotted-line" style="width: 28.3%; text-align: center;"></span>
            <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 26.2%; text-align: center;"></span>
            <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 26.2%; text-align: center;"></span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 26.2%; text-align: center;"></span>
            <span>โดย</span><span class="dotted-line" style="width: 74%; text-align: center;"></span>
            <span>ผู้มีอำนาจลงชื่อแทนนิตบุคคลผู้แจ้ง</span>
            <span>อยู่บ้านเลขที่</span><span class="dotted-line" style="width: 26.2%; text-align: center;"></span>
            <span>ตรอก/ซอย</span><span class="dotted-line" style="width: 26.2%; text-align: center;"></span>
            <span>ถนน</span><span class="dotted-line" style="width: 26.2%; text-align: center;"></span>
            <span>หมู่ที่</span><span class="dotted-line" style="width: 14%; text-align: center;"></span>
            <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 20%; text-align: center;"></span>
            <span>อำเภอ/เขต</span><span class="dotted-line" style="width: 20%; text-align: center;"></span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 20%; text-align: center;"></span>
        </div>
        <span>มีความประสงค์จะทำการ ชุดดิน/ถมดิน จึงขอแจ้งต่อเจ้าพนักงานท้องถิ่น ดังต่อไปนี้</span><br>
        <span style="font-weight: bold; margin-right:5px; margin-top:1rem;">ข้อ ๑</span><span> ทำการขุดดิน/ถมดิน
            ณ</span><span class="dotted-line" style="width: 33%; text-align: center;"></span><span>ตรอก/ซอย ถนน</span>
        <span class="dotted-line" style="width: 34%; text-align: center;"></span>
        <div style="margin-left: -3rem;">
            <span>หมู่ที่</span><span class="dotted-line" style="width: 18.5%; text-align: center;"></span>
            <span>ตำบล/แขวง</span><span class="dotted-line" style="width: 18.5%; text-align: center;"></span>
            <span>อำเภอเขต</span><span class="dotted-line" style="width: 18.5%; text-align: center;"></span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 19.5%; text-align: center;"></span>
            <span>ในโฉนดที่ดิน เลขที่/น.ส.๓ เลขที่/ส.ค.๑ เลขที่/อื่นๆ</span><span class="dotted-line"
                style="width: 67%; text-align: center;"></span>
            <span>เป็นที่ดินของ</span><span class="dotted-line" style="width: 91%; text-align: center;"></span>
        </div>
        <span style="font-weight: bold; margin-right:5px; margin-top:1rem;">ข้อ ๒</span><span> ทำการขุดดิน/ถมดิน
            โดยมีความลึก/ความสูง จากระดับดินเดิม</span><span class="dotted-line"
            style="width: 49%; text-align: center;"></span><span>เมตร</span>
        <div style="margin-left: -3rem;">
            <span>พื้นที่</span><span class="dotted-line"
                style="width: 31.2%; text-align: center;"></span><span>ตารางเมตร เพื่อใช้เป็น</span>
            <span class="dotted-line"
                style="width: 31.2%; text-align: center;"></span><span>โดยมีสิ่งก่อสร้างข้างเคียงดังนี้</span>
        </div>
        <span>ทิศเหนือ</span><span class="dotted-line" style="width: 31.2%; text-align: center;"></span>
        <span>ห่างจากบ่อดิน/เนินดิน</span><span class="dotted-line"
            style="width: 31.2%; text-align: center;"></span><span>เมตร</span> <br>
        <span>ทิศใต้</span><span class="dotted-line" style="width: 31.2%; text-align: center;"></span>
        <span>ห่างจากบ่อดิน/เนินดิน</span><span class="dotted-line"
            style="width: 31.2%; text-align: center;"></span><span>เมตร</span><br>
        <span>ทิศตะวันออก</span><span class="dotted-line" style="width: 31.2%; text-align: center;"></span>
        <span>ห่างจากบ่อดิน/เนินดิน</span><span class="dotted-line"
            style="width: 31.2%; text-align: center;"></span><span>เมตร</span><br>
        <span>ทิศตะวันตก</span><span class="dotted-line" style="width: 31.2%; text-align: center;"></span>
        <span>ห่างจากบ่อดิน/เนินดิน</span><span class="dotted-line"
            style="width: 31.2%; text-align: center;"></span><span>เมตร</span><br>
        <span style="font-weight: bold; margin-right:5px; margin-top:1rem;">ข้อ ๓ </span><span> โดยมี</span><span
            class="dotted-line" style="width: 31%; text-align: center;"></span>
        <span>เลขทะเบียน</span><span class="dotted-line"
            style="width: 41%; text-align: center;"></span><span>ผู้ควบคุมงาน</span>
        <span style="font-weight: bold; margin-right:5px; margin-top:1rem;">ข้อ ๔ </span><span>
            กำหนดแล้วเสร็จภายใน</span><span class="dotted-line" style="width: 28%; text-align: center;"></span>
        <span>วัน โดยจะเริ่มขุดดิน/ถมดิน วันที่</span><span class="dotted-line"
            style="width: 28%; text-align: center;"></span>
        <div style="margin-left: -3rem;">
            <span>เดือน</span><span class="dotted-line"
                style="width: 15%; text-align: center;"></span><span>พ.ศ</span>
            <span class="dotted-line"
                style="width: 15%; text-align: center;"></span><span>และจะแล้วเสร็จวันที่</span><span
                class="dotted-line" style="width: 14%; text-align: center;"></span>
            <span>เดือน</span><span class="dotted-line"
                style="width: 14%; text-align: center;"></span><span>พ.ศ</span>
            <span class="dotted-line" style="width: 14%; text-align: center;"></span>
        </div>
    </div>
    <div style="page-break-before: always;"></div>
    <div class="box_text" style="margin-left: 3rem;">
        <div style="margin-left: -3rem;">
            <span>พร้อมทั้งวิธีการขุดดินหรือถมดิน และการรมดิน จำนวน</span><span class="dotted-line"
                style="width: 26%; text-align: center;"></span>
            <span>ชุด ชุดละ</span><span class="dotted-line"
                style="width: 26%; text-align: center;"></span><span>แผ่น</span>
        </div>
        <input type="checkbox"><span>รายการที่กำหนดไว้ในกฎกระทรวงที่ออกตามมาตรา ๖ แห่งพระราชบัญญัติการขุดดินและถมดิน
            พ.ศ.๒๕๔๓</span><br>
        <input type="checkbox"><span>ภาระผูกพันต่างๆ
            ที่บุคคลอื่นมีส่วนได้เสียเกี่ยวกับที่ดินที่จะทำการขุดดิน/ถมดิน</span><br>
        <input type="checkbox"><span>สำเนาบัตรประจำตัวประชาชน/สำเนาทะเบียนบ้านของผู้แจ้ง ซึ่งรับรองสำเนาถูกต้องแล้ว
            จำนวน</span><span class="dotted-line" style="width: 10%; text-align: center;"></span><span>ฉบับ</span><br>
        <input type="checkbox"><span>สำเนาหนังสือรับรองจากการจดทะเบียนนิติบุคคล ซึ่งแสดงวัตถุประสงค์ ที่ตั้งสำนักงาน
            และผู้มีอำนาจลงชื่อแทนนิติบุคคลผู้แจ้งที่หน่วยงาน</span><br>
        <div style="margin-left: -3rem; margin-top:-6px;">
            ซึ่งมีอำนาจรับรอง (กรณีที่นิติบุคคลเป็นผู้แจ้ง)
        </div>
        <input type="checkbox"><span>สำเนาบัตรประจำตัวประชาชนของผู้จัดการหรือผู้แทนนิติบุคคลผู้แจ้ง
            ซึ่งรับรองสำเนาถูกต้องแล้ว จำนวน</span><span class="dotted-line"
            style="width: 10%; text-align: center;"></span><span>ฉบับ </span><br>
        <div style="margin-left: -3rem; margin-top:-6px;">(กรณีที่นนิติบุคคลเป็นผู้แจ้ง)</div>
        <input type="checkbox"><span>หนังสือแสดงความเป็นตัวแทนของผู้แจ้ง สำเนาบัตรประจำตัวประชาชน
            และสำเนาทะเบียนบ้านของตัวแทนผู้แจ้ง </span>
        <div style="margin-left: -3rem; margin-top:-6px;">ซึ่งรับรองสำเนาถูกต้องเรียบร้อยแล้ว
            (กรณีการมอบอำนาจให้ผู้อื่นแจ้งแทน)</div>
        <input type="checkbox"><span>รายการคำนวณ ๑ ชุด จำนวน</span><span class="dotted-line"
            style="width: 20%; text-align: center;"></span><span>แผ่น</span> <br>
        <input type="checkbox"><span>หนังสือรับรองว่าเป็นผู้ออกแบบและคำนวณการขุดดิน/ถมดิน จำนวน</span><span
            class="dotted-line" style="width: 10%; text-align: center;"></span><span>ฉบับ
            พร้อมทั้งสำเนาบัตรอนุญาตเป็นผู้ประกอบวิชาชีพ</span> <br>
        <div style="margin-left: -3rem; margin-top:-6px;">วิศวกรรมควบคุม ซึ่งรับรองสำเนาถูกต้องแล้ว จำนวน <span
                class="dotted-line" style="width: 10%; text-align: center;"></span><span>ฉบับ (กรณีที่งานมีลักษณะ ขนาด
                อยู่ในประเภทวิชาชีพวิศวกรรมควบคุม)</span></div>
        <input type="checkbox"><span>สำเนาโฉนดที่ดิน/ เลขที่/น.ส.๓ เลขที่/ส.ค.๑ เลขที่</span><br>
        <div style="margin-left: -3rem; margin-top:-6px;">ที่จะทำการขุดดิน/ถมดิน ขนาดเท่าต้นฉบับจริง
            ซึ่งรับรองสำเนาถูกต้อง จำนวน<span class="dotted-line"
                style="width: 20%; text-align: center;"></span><span>ฉบับ</span></div>
        <input type="checkbox"><span>หนังสือสำเนายินยอมของเจ้าของที่ดิน สำเนาบัตรประจำตัวประชาชน
            หรือสำเนาหนังสือรับรองการ จดทะเบียนนิติบุคคล ซึ่งแสดงวัตถุประสงค์</span><br>
        <div style="margin-left: -3rem; margin-top:-6px;">
            <span>และผู้มีอำนาจลงชื่อแทนนิติบุคคลเจ้าของที่ดิน ที่หน่วยงานซึ่งมีอำนาจ
                รับรอง สำเนาบัตรประจำตัวประชาชนและสำเนาทะเบียนบ้านของผู้จัดการหรือผู้แทน</span><br>
            นิติบุคคลเจ้าของที่ดิน ซึ่งรับรองสำเนาถูกต้อง จำนวน<span class="dotted-line"
                style="width: 20%; text-align: center;"></span><span>ฉบับ (กรณีที่เป็นที่ดินของบุคคลอื่น)</span>
        </div>
        <input type="checkbox"><span>หนังสือแสดงความยินยอมของผู้ควบคุมงานตามข้อ ๓ จำนวน</span><span
            class="dotted-line" style="width: 20%; text-align: center;"></span><span>ฉบับ</span><br>
        <input type="checkbox"><span>สำเนาใบอนุญาตเป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุมงาน
            ซึ่งรับรองสำเนาถูกต้องจำนวน</span><span class="dotted-line"
            style="width: 20%; text-align: center;"></span><span>ฉบับ</span><br>
        <div style="margin-left: -3rem; margin-top:-6px;">(เฉพาะกรณีที่งานมีลักษณะ ขนาด
            อยู่ในประเภทเป็นวิชาชีพวิศวกรรมควบคุม)</div>
        <input type="checkbox"><span>เอกสารและรายละเอียด อื่น ๆ </span><br>
        <span style=" margin-top:-6px;">ข้อ ๖ ข้าพเจ้าขอชำระค่าธรรมเนียมและค่าใช้จ่าย ตามกฎกระทรวงซึ่งออกตามมาตรา ๑๐
            แห่งพระราชบัญญัติการขุดดินและถมดิน พ.ศ.๒๕๔๓</span>

    </div>
    <div class="box_text" style="text-align: center; margin-top:10rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">
        </span><span>ผู้แจ้ง</span>
        <div style="margin-right: 0px;">
            <span>(</span>
            <span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style=" margin-top:5rem;">
        <span style="text-decoration: underline;">หมายเหตุ</span><br>
        <span>(๑) ข้อความใดไม่ใช่ให้ขีดฆ่า (๒) ใส่เครื่องหมาย ถูก ในช่อง <input type="checkbox" "> ที่ต้องการ</span>
    </div>
    <div style="page-break-before: always;"></div>
    <div style="text-align: center;">
        <strong style="text-decoration: underline; ">
            หนังสือยินยอมให้ดำเนินการขุดดิน/ถมดิน
        </strong>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>เขียนที่</span><span class="dotted-line" style="width: 30%; text-align: center;"></span><br>
        <span>วันที่</span><span class="dotted-line" style="width: 10%; text-align: center;"></span>
        <span>เดือน</span><span class="dotted-line" style="width: 10%; text-align: center;"></span>
        <span>พ.ศ.</span><span class="dotted-line" style="width: 10%; text-align: center;"></span>
    </div>
    <div class="box_text" style="margin-left:3rem;">
        <span>ข้าพเจ้า</span><span class="dotted-line" style="width: 40%; text-align: center;"></span>
        <span>ตั้งบ้านเรือนที่อยู่บ้านเลขที่</span><span class="dotted-line" style="width: 15.5%; text-align: center;"></span>
        <span>หมู่ที่</span><span class="dotted-line" style="width: 15.5%; text-align: center;"></span>

        <div style="margin-left: -3rem; margin-top:-6px;">
        <span>ตรอก/ซอย</span><span class="dotted-line" style="width: 19%; text-align: center;"></span>
        <span>ตำบล</span><span class="dotted-line" style="width: 19%; text-align: center;"></span>
        <span>อำเภอ</span><span class="dotted-line" style="width: 19%; text-align: center;"></span>
        <span>จังหวัด</span><span class="dotted-line" style="width: 21%; text-align: center;"></span>
        <span>ยินยอมให้</span><span class="dotted-line" style="width: 24%; text-align: center;"></span>
        <span>เข้าดำเนินการขุดดิน/ถมดินในที่ดิน</span><span class="dotted-line" style="width: 24%; text-align: center;"></span>
        <span>เลขที่</span><span class="dotted-line" style="width: 18%; text-align: center;"></span>
        <span>ดังกล่าวได้โดยยินยอมให้ทำการขุดดิน/ถมดิน ในเนื้อที่</span><span class="dotted-line" style="width: 41%; text-align: center;"></span>
        <span>ตารางเมตร มีขนาดที่ดิน ดังนนี้</span>
        <div style="margin-left: 3rem; margin-top:-6px;">
            <span style="margin-right: 20px;">ทิศเหนือ</span>
            <span>ยาว</span><span class="dotted-line" style="width: 24%; text-align: center;"></span>
            <span>เมตร จด</span><span class="dotted-line" style="width: 24%; text-align: center;"></span> <br>
        
            <span style="margin-right: 33px;">ทิศใต้</span>
            <span>ยาว</span><span class="dotted-line" style="width: 24%; text-align: center;"></span>
            <span>เมตร จด</span><span class="dotted-line" style="width: 24%; text-align: center;"></span><br>
        
            <span style="margin-right: 0px;">ทิศตะวันออก</span>
            <span>ยาว</span><span class="dotted-line" style="width: 24%; text-align: center;"></span>
            <span>เมตร จด</span><span class="dotted-line" style="width: 24%; text-align: center;"></span><br>
        
            <span style="margin-right: 4px;">ทิศตะวันตก</span>
            <span>ยาว</span><span class="dotted-line" style="width: 24%; text-align: center;"></span>
            <span>เมตร จด</span><span class="dotted-line" style="width: 24%; text-align: center;"></span><br>
            
            <span>ข้าพเจ้ายินยอมให้</span><span class="dotted-line" style="width: 56%; text-align: center;"></span>
            <span>ขุดดิน/ถมดินในที่ดินดังกล่าวนนี้ เพราะ</span>
        </div>
        </div>
        
        <div style="margin-left: -3rem; ">
            <span>เป็น</span><span class="dotted-line" style="width: 40.5%; text-align: center;"></span>
            <span>และได้แนบ</span><span class="dotted-line" style="width: 40.5%; text-align: center;"></span>
            <span>มาด้วยแล้ว</span>
            <span>(ถ้าผู้ให้เช่าให้แนบสำเนาสัญญาเช่าที่ดิน หรือถ้ามีหนังสือแสดงสิทธิ์อย่างอื่นให้แนบมาด้วย)
            </span>
        </div>
        <span>พร้อมกันนี้ ข้าพเจ้าได้แสดงแผนผังโฉนดที่ดินและเขตที่ดิน ที่ยินยอมให้</span><span class="dotted-line" style="width: 52%; text-align: center;"></span>
    </div>
    <span>ขุดดิน/ถมดินไว้หลังหนังสือนี้แล้ว</span>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">
        </span><span>ผู้ถือกรรมสิทธิ์ที่ดิน</span>
        <div style="margin-right: 90px;">
            <span>(</span>
            <span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 30%; text-align: center; ">
        </span><span style="margin-right: 55px;">พยาน</span>
        <div style="margin-right: 90px;">
            <span>(</span>
            <span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 30%; text-align: center; ">
        </span><span style="margin-right: 55px;">พยาน</span>
        <div style="margin-right: 90px;">
            <span>(</span>
            <span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="margin-left:3rem;">
        <span>ข้าพเจ้ารับรองว่าลายมือชื่อหรือลายพิมพ์นิ้วมือข้างบนนี้เป็นของผู้ถือกรรมสิทธิ์ที่ดินตามสำเนาเอกสารสิทธิที่ดินดังกล่าวข้างบนนี้จริง</span>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">
        </span><span style="margin-right: 32px;">ผู้ขออณุญาต</span>
        <div style="margin-right: 90px;">
            <span>(</span>
            <span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 30%; text-align: center; ">
        </span><span style="margin-right: 55px;">พยาน</span>
        <div style="margin-right: 90px;">
            <span>(</span>
            <span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 30%; text-align: center; ">
        </span><span style="margin-right: 55px;">พยาน</span>
        <div style="margin-right: 90px;">
            <span>(</span>
            <span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="margin-top: 6rem; margin-left: 3rem;">
        <strong>
            คำเตือน หนังสือรับรองการปลูกสร้างอาคารนี้ห้ามมีการขูด ขีด ลบ ฆ่า ไม่ว่ากรณีใดๆ เว้นแต่ผู้ถือ
        </strong> <br>
            <strong style="margin-left: 3rem;">กรรมสิทธิ์ที่ดินจะรับรองการขีดฆ่านั้น เป็นลายลักษณ์อักษรเฉพาะแห่งไว้*(ให้แนบสำเนาบัตรประจำตัว</strong><br>
            <strong>ประชาชนสำเนาทะเบียนบ้านและสำเนาเอกสารสิทธิ์ที่ดิน ที่รับรองสำเนาแล้วประกอบด้วย )</strong>
    </div>
    <div style="page-break-before: always;"></div>
    <div class="box_text" style="text-align: center;">
        <strong>บัญชีรายการเอกสารประกอบใบแจ้งการขุดดินหรือถมดิน ตามพระราชบัญญัติการขุดดินและถมดิน พ.ศ. 2543</strong>
    </div>
    <div class="box_text" style="text-align: center; margin-top:2rem;">
        <span>ของ</span><span class="dotted-line" style="width: 50%; text-align: center;"></span>
        <span>โทร.</span><span class="dotted-line" style="width: 30%; text-align: center;"></span>
    </div>
    <table style="width: 100%; font-size:18px; border-collapse: collapse; margin-top:1rem;">
        <thead>
            <tr>
                <th style="width: 10%; text-align: center; border: 1px solid #000;">ลำดับที่</th>
                <th style="width: 60%; text-align: center; border: 1px solid #000;">รายการ</th>
                <th style="width: 30%; text-align: center; border: 1px solid #000;">หมายเหตุ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๑.
                </td>
                <td style="padding:0px 5px;">ใบแจ้งการจุดดินหรือถมดิน (แบบ ขถด.๑)</td>
                <td style="text-align: left; vertical-align: top; border: 1px solid #000;" rowspan="11">
                    <div style="padding: 0 5px;">
                        - เท่าฉบับจริง<br>
                        - กรณีขุดดิน/ถมดินในที่ดินผู้อื่น<br>
                        - กรณีที่งานมีลักษณะ ขนาด อยู่ในประเภทวิชาชีพวิศวกรรมควบคุม พร้อมภาพถ่ายใบอนุญาต<br>
                        - กรณีนิติบุคคล<br>
                        - ปิดอากรแสตมป์ 30 บาท
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๒.
                </td>
                <td style="padding:0px 5px;">สำเนาบัตรประจำตัวและสำเนาทะเบียนบ้านของผู้แจ้ง</td>
            </tr>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๓.
                </td>
                <td style="padding:0px 5px;">สำเนาภาพถ่ายโฉนดที่ดิน/น.ส.3/ส.ค.1 เลขที่</td>
            </tr>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๔.
                </td>
                <td style="padding:0px 5px;">หนังสือยินยอมให้ขุดดิน/ถมดินในที่ดิน</td>
            </tr>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๕.
                </td>
                <td style="padding:0px 5px;">หนังสือรับรองผู้ประกอบวิชาชีพวิศวกรรมควบคุม ผู้ทำรายการคำนวณ/ออกแบบ</td>
            </tr>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๖.
                </td>
                <td style="padding:0px 5px;">หนังสือยินยอมวิศวกรผู้ควบคุมงาน (แบบ ขถด.7)</td>
            </tr>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๗.
                </td>
                <td style="padding:0px 5px;">แบบแปลน แผนผังบริเวณ รายการประกอบแบบ จำนวน...............ชุด</td>
            </tr>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๘.
                </td>
                <td style="padding:0px 5px;">รายการคำนวณความมั่นคงแข็งแรงโครงสร้าง จำนวน 1 ชุด</td>
            </tr>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๙.
                </td>
                <td style="padding:0px 5px;">หนังสือรับรองการจดทะเบียนและผู้มีอำนาจลงนาม</td>
            </tr>
            <tr>
                <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๑๐.
                </td>
                <td style="padding:0px 5px;">หนังสือมอบอำนาจให้ผู้อื่นทำการแทน</td>
            </tr>
            <tr>
                <td style="text-align: center; border-bottom: 1px solid #000; border-left: 1px solid #000; border-right: 1px solid #000; padding-bottom: 2rem;">
                    <input type="checkbox" style="margin-bottom: -5px;"> ๑๑.
                </td>
                <td style="padding:0px 5px; border-bottom: 1px solid #000; padding-bottom: 2rem;">หนังสือหรือเอกสารที่เกี่ยวข้อง</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%; margin-top: 2rem;">
        <tr>
            <!-- ช่องพยาน -->
            <td style="width: 50%; text-align: center;">
                <div class="box_text" style="text-align: right; margin-top:1rem;">
                    <span>(ลงชื่อ)</span>
                    <span class="dotted-line" style="width: 60%; text-align: center; ">
                    </span><span style="margin-right: 55px;">ผู้แจ้ง</span>
                    <div style="margin-right: 60px;">
                        <span>(</span>
                        <span class="dotted-line" style="width: 80%; text-align: center;"></span>
                        <span>)</span>
                    </div>
                </div>
            </td>
    
            <!-- ช่องผู้ขออนุญาต -->
            <td style="width: 50%; text-align: center;">
                <div class="box_text" style="text-align: right; margin-top:1rem;">
                    <span>(ลงชื่อ)</span>
                    <span class="dotted-line" style="width: 50%; text-align: center; ">
                    </span><span style="margin-right: 55px;">ผู้ตรวจรับเอกสาร</span>
                    <div style="margin-right: 7.5rem;">
                        <span>(</span>
                        <span class="dotted-line" style="width: 80%; text-align: center;"></span>
                        <span>)</span>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    
    
    
</body>

</html>
