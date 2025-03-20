@extends('admin.layouts.app')
@section('title', 'จัดการข้อมูลหน่วยงานย่อย')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>จัดการข้อมูลหน่วยงานย่อย <span class="text-primary">{{ $PersonnelRank->personnel_rank_name }}</span></h4>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    สร้างข้อมูลบุคลากร
                </button>

                <a href="{{route('PersonnelGroupPhotoPage',$PersonnelRank->id )}}" class="btn btn-primary btn-sm">เพิ่มรูปกลุ่ม</a>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างข้อมูลบุคลากร</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('PersonnelDetailsCreate', $PersonnelRank->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">ชื่อบุคลากร</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name">
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="ตำแหน่งและแผนก" id="detail" name="department"></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">เบอร์ติดต่อ</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>

                                    <div class="mb-5">
                                        <label class="form-label">ระดับความสำคัญ</label>
                                        <div>
                                            @for ($i = 1; $i <= 5; $i++) <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status{{ $i }}" value="{{ $i }}" required>
                                                <label class="form-check-label" for="status{{ $i }}">{{ $i }}</label>
                                        </div>
                                        @endfor
                                    </div>

                                    <br>

                                    <div class="mb-5">
                                        <label for="post_photo_file" class="form-label">อัปโหลดรูปภาพ</label>
                                        <input type="file" class="form-control" id="post_photo_file" name="post_photo_file" accept=".jpg,.jpeg,.png">
                                        <small class="form-text text-muted">รองรับไฟล์ประเภท JPG, JPEG, PNG</small>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <table class="table table-bordered text-center" id="data_table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">ชื่อบุคลากร</th>
                        <th class="text-center">ตำแหน่งและแผนก</th>
                        <th class="text-center">เบอร์ติดต่อ</th>
                        <th class="text-center">ระดับความสำคัญ</th>
                        <th class="text-center">รูปภาพ</th>
                        <th class="text-center">การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($PersonnelDetail as $key => $detail)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $detail->full_name }}</td>

                        <style>
                            td p {
                                margin-bottom: 1.5px;
                            }
                        </style>

                        <td>{!! $detail->department ?? '' !!}</td>
                        <td>{{ $detail->phone }}</td>
                        <td>{{ $detail->status }}</td>
                        <td>
                            @if ($detail->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $detail->images->first()->post_photo_file) }}" alt="รูปภาพ" style="width: 100px; height: auto;">
                            @else
                            <span class="text-muted">ไม่มีรูปภาพ</span>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $detail->id }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>

                            <form action="{{ route('PersonnelDetailsDelete', $detail->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach ($PersonnelDetail as $detail)
            <div class="modal fade" id="editModal{{ $detail->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $detail->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('PersonnelDetailsUpdate', $detail->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $detail->id }}">แก้ไขข้อมูลบุคลากร</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">ชื่อบุคลากร</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $detail->full_name }}">
                                </div>

                                <div class="mb-3">
                                    <label for="editdetail" class="form-label">แผนก</label>
                                    <textarea class="form-control" id="editdetail" placeholder="ตำแหน่งและแผนก" name="department">{{ old('department', $detail->department) }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">เบอร์ติดต่อ</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $detail->phone }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">ระดับความสำคัญ</label>
                                    <div>
                                        @for ($i = 1; $i <= 5; $i++) <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="status{{ $i }}" value="{{ $i }}" @if ($detail->status == $i) checked @endif required>
                                            <label class="form-check-label" for="status{{ $i }}">{{ $i }}</label>
                                    </div>
                                    @endfor
                                </div>
                            </div>

                            <br>

                            <div class="mb-3">
                                <label for="post_photo_file" class="form-label">อัปโหลดรูปภาพ</label>
                                @if ($detail->images->isNotEmpty())
                                <!-- แสดงตัวอย่างรูปภาพที่มีอยู่ -->
                                <div>
                                    <img src="{{ asset('storage/' . $detail->images->first()->post_photo_file) }}" alt="รูปภาพ" style="width: 100px; height: auto;">
                                    <br>
                                    <small class="text-muted">รูปภาพที่อัปโหลดแล้ว</small>
                                    <input type="checkbox" name="remove_image" id="remove_image" value="1">
                                    <label for="remove_image">ลบ</label>
                                </div>
                                @endif

                                <br>

                                <!-- ฟอร์มอัปโหลดไฟล์ใหม่ -->
                                <input type="file" class="form-control" id="post_photo_file" name="post_photo_file" accept=".jpg,.jpeg,.png">
                                <small class="form-text text-muted">รองรับไฟล์ประเภท JPG, JPEG, PNG</small>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
</div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("#detail, #editdetail").forEach(textarea => {
            ClassicEditor
                .create(textarea)
                .then(editor => {
                    const editable = editor.ui.view.editable.element;
                    editable.style.resize = "none";
                    editable.style.overflow = "auto";
                })
                .catch(error => {
                    console.error("CKEditor error:", error);
                });
        });
    });

</script>

<style>
    /* ใช้ CSS เพื่อบังคับให้ CKEditor มีความสูงที่แน่นอน */
    .ck-editor__editable {
        min-height: 100px !important;

    }

</style>

<script src="{{asset('js/datatable.js')}}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
