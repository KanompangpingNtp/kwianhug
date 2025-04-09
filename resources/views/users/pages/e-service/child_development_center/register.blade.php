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

    /* กำหนดขนาดรูปภาพให้เท่ากัน */
    .image-container {
        width: 100%;
        height: 220px;
        /* ปรับความสูงที่ต้องการ */
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* ให้รูปภาพเต็มพื้นที่และตัดส่วนที่เกิน */
    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
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
        <div class=" d-flex flex-column justify-content-center align-items-center p-5 ">
            <div class="fs-1 fw-bold mb-4 text-center">E-Service</div>

            <div class="container">
                <h3 class="text-center mb-4">แบบคำร้องขอเงินค่าจัดการศพผู้สูงอายุ</h3>

                {{-- <form action="#" method="POST" enctype="multipart/form-data"> --}}
                    @csrf

                    <!-- Row 1: วันที่ และ เรื่อง -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="date" class="form-label">วันที่ <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label">เรื่อง <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" maxlength="255" required>
                        </div>
                    </div>

                    <!-- Row 2: คำนำหน้า และ ชื่อ -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-3">
                            <label for="salutation" class="form-label">คำนำหน้า</label>
                            <select class="form-select" id="salutation" name="salutation">
                                <option value="" selected disabled>เลือกคำนำหน้า</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">ชื่อ - นามสกุล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" maxlength="255" required>
                        </div>
                        <div class="col-md-3">
                            <label for="age" class="form-label">อายุ (ปี) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <div class="col-md-3">
                            <label for="nationality" class="form-label">สัญชาติ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nationality" name="nationality" required>
                        </div>
                        <div class="col-md-3">
                            <label for="ethnicity" class="form-label">เชื้อชาติ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ethnicity" name="ethnicity" required>
                        </div>
                    </div>

                    <!-- Row 4: หมู่บ้าน, ตำบล, อำเภอ -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label for="house_number" class="form-label">บ้านเลขที่<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="house_number" name="house_number" maxlength="50" required>
                        </div>
                        <div class="col-md-4">
                            <label for="village" class="form-label">หมู่บ้าน </label>
                            <input type="text" class="form-control" id="village" name="village" maxlength="100" required>
                        </div>
                        <div class="col-md-4">
                            <label for="subdistrict" class="form-label">ตำบล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subdistrict" name="subdistrict" maxlength="100" required>
                        </div>
                        <div class="col-md-4">
                            <label for="district" class="form-label">อำเภอ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="district" name="district" maxlength="100" required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="province" class="form-label">จังหวัด <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="province" name="province" maxlength="100" required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="phone" class="form-label">เบอร์ติดต่อ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" maxlength="100" required>
                        </div>
                    </div>

                    <!-- Row 6: รายละเอียดคำขอ -->
                    <div class="mb-3">
                        <label for="request_details" class="form-label">รายละเอียดคำขอ <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="request_details" name="request_details" rows="3" required></textarea>
                    </div>

                    <!-- Row 7: แนบไฟล์ -->
                    <div class="mb-3">
                        <label for="attachments" class="form-label">แนบไฟล์ (รูปหรือเอกสารประกอบคำร้อง)</label>
                        <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
                        <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 2MB)</small>
                        <!-- แสดงรายการไฟล์ที่แนบ -->
                        <div id="file-list" class="mt-1">
                            {{-- <label>ไฟล์ที่เลือก:</label> --}}
                            <div class="d-flex flex-wrap gap-3"></div>
                        </div>
                    </div>

                    <!-- ปุ่มบันทึก -->
                    <div class="text-center w-full border">
                        <button type="submit" class="btn btn-primary w-100 py-1"><i
                                class="fa-solid fa-file-arrow-up me-2"></i></i>
                            ส่งฟอร์มข้อมูล</button>
                    </div>
                </form>
            </div>

            <script>
                const fileInput = document.getElementById('attachments');
                const fileListContainer = document.querySelector('#file-list .d-flex');

                // อัปเดตรายการไฟล์
                fileInput.addEventListener('change', function() {
                    fileListContainer.innerHTML = ''; // เคลียร์รายการเก่า
                    Array.from(fileInput.files).forEach((file, index) => {
                        // สร้าง wrapper สำหรับรูปภาพหรือไอคอน PDF
                        const fileWrapper = document.createElement('div');
                        fileWrapper.className = 'position-relative d-inline-block text-center';

                        // ตรวจสอบประเภทไฟล์
                        let previewElement;
                        if (file.type.startsWith('image/')) {
                            // สร้างภาพตัวอย่างสำหรับไฟล์รูปภาพ
                            previewElement = document.createElement('img');
                            previewElement.src = URL.createObjectURL(file);
                            previewElement.alt = file.name;
                        } else if (file.type === 'application/pdf') {
                            // แสดงไอคอนแทนไฟล์ PDF
                            previewElement = document.createElement('img');
                            previewElement.src =
                                'https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg';
                            previewElement.alt = 'PDF File';
                        } else {
                            previewElement = document.createElement('div');
                            previewElement.textContent = 'ไฟล์ไม่รองรับ';
                        }

                        // กำหนดขนาดและสไตล์ของรูปภาพ/ไอคอน
                        previewElement.style.width = '100px';
                        previewElement.style.height = '100px';
                        previewElement.style.objectFit = 'cover';
                        previewElement.className = 'border rounded';

                        // ปุ่มลบ
                        const removeButton = document.createElement('button');
                        removeButton.textContent = '×';
                        removeButton.className = 'btn btn-danger btn-sm position-absolute';
                        removeButton.style.top = '0';
                        removeButton.style.right = '0';
                        removeButton.setAttribute('data-index', index);

                        removeButton.addEventListener('click', () => {
                            removeFile(index);
                        });

                        // ชื่อไฟล์
                        const fileName = document.createElement('p');
                        fileName.textContent = file.name;
                        fileName.className = 'mt-2 text-truncate';
                        fileName.style.width = '100px';

                        // รวมทุกอย่างเข้ากับ wrapper
                        fileWrapper.appendChild(previewElement);
                        fileWrapper.appendChild(removeButton);
                        fileWrapper.appendChild(fileName);

                        fileListContainer.appendChild(fileWrapper);
                    });
                });


                // ลบไฟล์ออกจากรายการ
                function removeFile(index) {
                    const fileArray = Array.from(fileInput.files);
                    fileArray.splice(index, 1); // ลบไฟล์จากอาร์เรย์

                    // สร้าง FileList ใหม่
                    const dataTransfer = new DataTransfer();
                    fileArray.forEach(file => dataTransfer.items.add(file));
                    fileInput.files = dataTransfer.files;

                    // อัปเดตรายการใน UI
                    fileInput.dispatchEvent(new Event('change'));
                }
            </script>

        </div>
    </div>
</div>
@endsection
