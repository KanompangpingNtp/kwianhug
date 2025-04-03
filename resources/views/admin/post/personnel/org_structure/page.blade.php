@extends('admin.layouts.app')
@section('title', 'โครงสร้างองค์กร')
@section('content')

<h3 class="text-center">จัดการข้อมูลโครงสร้างองค์กร</h3> <br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    แนบไฟล์
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">แนบไฟล์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('OrgStructureCreate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="files_add" class="form-label">อัปโหลดไฟล์</label>
                        <input type="file" class="form-control" id="files_add" name="files_add" accept=".jpg,.jpeg,.png,.pdf">
                        <small class="form-text text-muted">รองรับไฟล์ประเภท JPG, JPEG, PNG, PDF</small>
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

<table class="table table-bordered" id="data_table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">ชื่อไฟล์</th>
            <th class="text-center">ไฟล์</th>
            <th class="text-center">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Data as $index => $details)
        <tr>
            <td class="text-center">{{ $index + 1 }}</td>
            <td>{{ basename($details->files_path) }}</td>
            <td class="text-center">
                <!-- Button to trigger Modal -->
                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#fileModal{{ $details->id }}">
                    <i class="fas fa-eye"></i>
                </button>
            </td>
            <td class="text-center">
                <form action="{{ route('OrgStructureDelete', $details->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจว่าต้องการลบข้อมูลนี้?')">ลบ</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($Data as $details)
<div class="modal fade" id="fileModal{{ $details->id }}" tabindex="-1" aria-labelledby="fileModalLabel{{ $details->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fileModalLabel{{ $details->id }}">ไฟล์: {{ basename($details->files_path) }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Show image or file -->
                @if (in_array($details->files_type, ['jpg', 'jpeg', 'png']))
                <img src="{{ asset('storage/' . $details->files_path) }}" class="img-fluid" alt="File Image">
                @elseif ($details->files_type == 'pdf')
                <embed src="{{ asset('storage/' . $details->files_path) }}" type="application/pdf" width="100%" height="500px">
                @else
                <p>ไม่รองรับไฟล์ประเภทนี้</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<script src="{{asset('js/datatable.js')}}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
