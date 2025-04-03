<?php

namespace App\Http\Controllers\performance_evaluation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\ListDetailImage;
use App\Models\ListDetailsPdf;
use Illuminate\Support\Facades\Storage;

class AdminPerformanceEvaluationController extends Controller
{
    public function  PerformanceEvaluationAdmin()
    {
        $basicInfoType = BasicInfoType::all();

        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'LPA')->id;

        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('admin.post.performance_evaluation.page', compact('listDetail', 'basicInfoType'));
    }

    public function PerformanceEvaluationNameCreate(Request $request)
    {
        $request->validate([
            'basic_info_type' => 'required|exists:basic_info_types,id',
            'list_details_name' => 'required|string',
        ]);

        // dd( $request);

        $ListDetail = ListDetail::create([
            'basic_info_type_id' => $request->basic_info_type,
            'list_details_name' => $request->list_details_name,
        ]);

        return redirect()->back()->with('success', 'สร้างข้อมูลสำเร็จ');
    }

    public function PerformanceEvaluationNameUpdate(Request $request, $id)
    {
        $request->validate([
            'basic_info_type' => 'required|exists:basic_info_types,id',
            'list_details_name' => 'required|string',
        ]);

        $listDetail = ListDetail::findOrFail($id);

        $listDetail->update([
            'basic_info_type_id' => $request->basic_info_type,
            'list_details_name' => $request->list_details_name,
        ]);

        return redirect()->back()->with('success', 'อัปเดตข้อมูลสำเร็จ');
    }


    public function PerformanceEvaluationNameDelete($id)
    {
        $listDetail = ListDetail::findOrFail($id);

        $listDetail->delete();

        return redirect()->back()->with('success', 'ข้อมูลถูกลบเรียบร้อยแล้ว');
    }


    public function PerformanceEvaluationShowDertails($id)
    {
        $listDetail = ListDetail::with('type', 'pdf')->findOrFail($id);

        return view('admin.post.performance_evaluation.show_details', compact('listDetail'));
    }

    public function PerformanceEvaluationDetailsCreate(Request $request, $DetailsId)
    {
        $request->validate([
            'file_post' => 'nullable|file|mimes:pdf',
        ]);

        if ($request->hasFile('file_post')) {
            $file = $request->file('file_post');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('performance_evaluation_pdf', $fileName, 'public');

            ListDetailsPdf::create([
                'list_details_id' => $DetailsId,
                'pdf_file' => $filePath,
                'status' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function PerformanceEvaluationDetailsDelete($DetailsId)
    {
        // ค้นหาข้อมูลจาก ListDetailsPdf
        $details = ListDetailsPdf::findOrFail($DetailsId);

        // ลบไฟล์ออกจาก Storage
        if ($details->pdf_file && Storage::disk('public')->exists($details->pdf_file)) {
            Storage::disk('public')->delete($details->pdf_file);
        }

        // ลบข้อมูลจากฐานข้อมูล
        $details->delete();

        return redirect()->back()->with('success', 'ลบไฟล์สำเร็จ');
    }
}
