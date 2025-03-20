@extends('admin.layouts.app')
@section('title', 'ข้อมูลบุคลากร')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h3 class="text-center">ข้อมูลบุคลากร</h3>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">หน่วยงาน</th>
                            <th class="text-center">ระดับความสำคัญ (Status)</th>
                            <th class="text-center">ตำแหน่ง</th>
                            <th class="text-center">ชื่อบุคคล</th>
                            <th class="text-center">โทรศัพท์</th>
                            <th class="text-center">รูปภาพ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agencies as $agency)
                            <tr>
                                <td rowspan="{{ $agency->ranks->sum(fn($rank) => $rank->details->count()) + $agency->ranks->count() }}">
                                    {{ $agency->personnel_agency_name }}
                                </td>
                                @foreach ($agency->ranks as $rank)
                                    <td rowspan="{{ $rank->details->count() + 1 }}">
                                        {{ $rank->status }}
                                    </td>
                                    @foreach ($rank->details as $detail)
                                        <td>{{ $rank->personnel_rank_name }}</td>
                                        <td>{{ $detail->full_name }}</td>
                                        <td>{{ $detail->phone }}</td>
                                        <td>
                                            @foreach ($detail->images as $image)
                                                <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Image" width="50">
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if ($rank->details->isEmpty())
                                        <tr>
                                            <td colspan="4">ไม่มีข้อมูลบุคคล</td>
                                        </tr>
                                    @endif
                                @endforeach
                                @if ($agency->ranks->isEmpty())
                                    <tr>
                                        <td colspan="5">ไม่มีข้อมูลตำแหน่ง</td>
                                    </tr>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
