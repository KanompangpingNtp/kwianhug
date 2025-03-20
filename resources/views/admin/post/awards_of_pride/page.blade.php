@extends('admin.layouts.app')
@section('title', 'รางวัลแห่งความภาคภูมิใจ')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h3 class="text-center">รางวัลแห่งความภาคภูมิใจ</h3>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    สร้าง
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างรางวัลแห่งความภาคภูมิใจ</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('AwardsofPrideCreate') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <input type="hidden" name="post_type_id" value="{{ $postTypes->firstWhere('type_name', 'รางวัลแห่งความภาคภูมิใจ')->id }}">
                                        <label for="topic_name" class="form-label">หัวข้อ</label>
                                        <input type="text" class="form-control" id="topic_name" name="topic_name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="file_post" class="form-label">แนบไฟล์ภาพ</label>
                                        <input type="file" class="form-control" id="file_post" name="file_post[]" multiple>
                                        <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png (ขนาดไม่เกิน 10MB)</small>
                                        <!-- แสดงรายการไฟล์ที่แนบ -->
                                        <div id="file-list" class="mt-1">
                                            <div class="d-flex flex-wrap gap-3"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">บันทึก</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <br>
                <br>

                <table class="table table-bordered" id="data_table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">ประเภท</th>
                            <th class="text-center">ชื่อ</th>
                            <th class="text-center">การจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($postDetails as $index => $postDetail)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="text-center">{{ $postDetail->postType->type_name ?? 'N/A' }}</td>
                            <td>{{ $postDetail->topic_name ?? 'N/A' }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#showFile-{{ $postDetail->id }}">
                                    แสดงไฟล์
                                </button>
                                <form action="{{ route('AwardsofPrideDelete', $postDetail->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">ลบ</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @foreach ($postDetails as $postDetail)
                <div class="modal fade" id="showFile-{{ $postDetail->id }}" tabindex="-1" aria-labelledby="showFileLabel-{{ $postDetail->id }}" aria-hidden="true">
                    <div class="modal-dialog" style="margin-top: 5%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="showFileLabel-{{ $postDetail->id }}">แสดงไฟล์</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <h5>รูปภาพ</h5>
                                @if($postDetail->photos->isNotEmpty())
                                <div>
                                    @foreach($postDetail->photos as $photo)
                                    <img src="{{ asset('storage/' . $photo->post_photo_file) }}" alt="Image" style="width: auto; height: auto; max-width: 100%; max-height: 500px;">
                                    @endforeach
                                </div>
                                @else
                                <p>ไม่มีรูปภาพ</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/multipart_files.js') }}"></script>
<script src="{{asset('js/datatable.js')}}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
