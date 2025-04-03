<?php

namespace App\Http\Controllers\learning_organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\ListDetailImage;
use App\Models\ListDetailsPdf;
use Illuminate\Support\Facades\Storage;

class AdminLearningOrganizationController extends Controller
{
    public function  LearningOrganizationAdmin()
    {
        $basicInfoType = BasicInfoType::all();

        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'KM')->id;

        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('admin.post.learning_organization.page', compact('listDetail', 'basicInfoType'));
    }

    public function LearningOrganizationNameCreate(Request $request)
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

    public function LearningOrganizationNameUpdate(Request $request, $id)
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


    public function LearningOrganizationNameDelete($id)
    {
        $listDetail = ListDetail::findOrFail($id);

        $listDetail->delete();

        return redirect()->back()->with('success', 'ข้อมูลถูกลบเรียบร้อยแล้ว');
    }


    public function LearningOrganizationShowDertails($id)
    {
        $listDetail = ListDetail::with('type', 'pdf')->findOrFail($id);

        return view('admin.post.learning_organization.show_details', compact('listDetail'));
    }

    public function LearningOrganizationDetailsCreate(Request $request, $DetailsId)
    {
        $request->validate([
            'file_post' => 'nullable|file|mimes:pdf',
        ]);

        if ($request->hasFile('file_post')) {
            $file = $request->file('file_post');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('learning_organization_pdf', $fileName, 'public');

            ListDetailsPdf::create([
                'list_details_id' => $DetailsId,
                'pdf_file' => $filePath,
                'status' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function LearningOrganizationDetailsDelete($DetailsId)
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
