@extends('admin.layouts.app')
@section('title', 'หน้าหลัก')
@section('content')

<style>
    a {
        text-decoration: none;
        color: black;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                {{-- <h4>Dashboard</h4> --}}
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="welcomeModalLabel">ยินดีต้อนรับ 🎉</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="font-size: 15px;">
                                <p><strong>รายการอัพเดทเมนูใหม่ สามารถคลิกเพื่อดูรายละเอียดได้ทันที</strong></p>
                                <ul id="menuList">
                                    <li class="mb-1">เมนูพื้นฐาน
                                        <ul>
                                            <li class="mb-1"><a href="{{route('HistoryAdmin')}}">ประวัติความเป็นมา</a></li>
                                            <li class="mb-1"><a href="{{route('GeneralInformationAdmin')}}">ข้อมูลสภาพทั่วไป</a></li>
                                            <li class="mb-1"><a href="{{route('CommunityAdmin')}}">ข้อมูลชุมชน</a></li>
                                            <li class="mb-1"><a href="{{route('CommunityProductsAdmin')}}">ผลิตภัณฑ์ชุมชน</a></li>
                                            <li class="mb-1"><a href="{{route('ImportantPlacesAdmin')}}">สถานที่สำคัญ</a></li>
                                            <li class="mb-1"><a href="{{route('LandscapeGalleryAdmin')}}">แกลอรี่ภาพถ่ายภูมิทัศน์</a></li>
                                        </ul>
                                    </li>
                                    <br>
                                    <li class="mb-1"><a href="{{route('AdminITAType')}}">การประเมินคุณธรรม (ITA)</a></li>
                                    <li class="mb-1"><a href="{{route('ManagePersonnel')}}">บุคลากร</a></li>
                                    <li class="mb-1"><a href="{{route('PerformanceResultsType')}}">ผลการดำเนินงาน</a></li>
                                    <li class="mb-1"><a href="{{route('AuthorityType')}}">อำนาจหน้าที่</a></li>
                                    <li class="mb-1"><a href="{{route('OperationalPlanType')}}">แผนพัฒนาท้องถิ่น</a></li>
                                    <li class="mb-1"><a href="{{route('LawsAndRegulationsType')}}">กฏหมายและกฏระเบียบ</a></li>
                                    <li class="mb-1"><a href="{{route('MenuForPublicType')}}">เมนูสำหรับประชาชน</a></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#welcomeModal').modal('show');
    });

</script>

@endsection
