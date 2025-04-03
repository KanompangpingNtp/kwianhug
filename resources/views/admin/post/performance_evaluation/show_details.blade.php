@extends('admin.layouts.app')
@section('title', 'การประเมินประสิทธิภาพภายใน (LPA)')
@section('content')

<h2 class="text-center">ข้อมูล<span class="text-primary"> {{$listDetail->list_details_name}}</span> </h2><br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    แนบไฟล์เอกสาร
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">แนบไฟล์เอกสาร</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('PerformanceEvaluationDetailsCreate',$listDetail->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="file_post" class="form-label">แนบไฟล์เพิ่มเติม</label>
                        <input type="file" class="form-control" id="file_post" name="file_post">
                        <small class="text-muted">ประเภทไฟล์ที่รองรับ: pdf</small>
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
    <thead class="text-center">
        <tr>
            <th>#</th>
            <th>ไฟล์</th>
            <th>การจัดการ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listDetail->pdf as $index => $details)
        <tr>
            <td class="text-center">{{ $index + 1 }}</td>
            <td>
                <!-- แสดงชื่อไฟล์ -->
                {{ basename($details->pdf_file) }}
            </td>
            <td class="text-center">
                <a href="{{ Storage::url($details->pdf_file) }}" class="btn btn-info btn-sm" target="_blank">
                    <i class="bi bi-file-earmark"></i>
                </a>
                <form action="{{ route('PerformanceEvaluationDetailsDelete', $details->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="{{asset('js/datatable.js')}}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
