<?php

namespace App\Http\Controllers\tourist_attractions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostType;
use App\Models\PostDetail;
use App\Models\PostPhoto;
use Illuminate\Support\Facades\Storage;

class AdminTouristAttractionController extends Controller
{
    public function TouristAttractionPage()
    {
        $postTypes = PostType::all();

        $postTypeId = $postTypes->firstWhere('type_name', 'แนะนำสถานที่ท่องเที่ยว')->id;

        $postDetails = PostDetail::with('postType', 'photos', 'pdfs')
            ->where('post_type_id', $postTypeId)
            ->orderBy('date', 'desc')
            ->get();

        return view('admin.post.tourist_attractions.page', compact('postDetails', 'postTypes'));
    }

    public function TouristAttractionCreate(Request $request)
    {
        $request->validate([
            'post_type_id' => 'required|exists:post_types,id',
            'topic_name' => 'nullable|string|max:255',
            'details' => 'nullable|string|max:255',
            'title_image' => 'file|mimes:jpg,jpeg,png',
            'file_post' => 'nullable|array',
            'file_post.*' => 'file|mimes:jpg,jpeg,png|max:10240',
        ]);

        // dd($request);

        $postDetail = PostDetail::create([
            'post_type_id' => $request->post_type_id,
            'topic_name' => $request->topic_name,
            'details' => $request->details,
        ]);

        if ($request->hasFile('title_image')) {
            $file = $request->file('title_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('photo_title', $filename, 'public');

            PostPhoto::create([
                'post_detail_id' => $postDetail->id,
                'post_photo_file' => $path,
                'post_photo_status' => '1',
            ]);
        }

        if ($request->hasFile('file_post')) {
            $hasValidFile = false; // ตัวแปรตรวจสอบว่ามีไฟล์ที่ตรงเงื่อนไขหรือไม่

            foreach ($request->file('file_post') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                if (in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png'])) {
                    $path = $file->storeAs('photo', $filename, 'public');

                    PostPhoto::create([
                        'post_detail_id' => $postDetail->id,
                        'post_photo_file' => $path,
                        'post_photo_status' => '2',
                    ]);

                    $hasValidFile = true;
                }
            }

            if (!$hasValidFile) {
                return redirect()->back()->with('error', 'โพสถูกเพิ่มแล้ว แต่ไม่มีไฟล์รูปภาพที่ถูกต้อง!');
            }
        } else {
            return redirect()->back()->with('error', 'กรุณาอัพโหลดไฟล์รูปภาพ!');
        }

        return redirect()->back()->with('success', 'โพสถูกเพิ่มแล้ว!');
    }

    public function TouristAttractionDelete($id)
    {
        $postDetail = PostDetail::findOrFail($id);

        foreach ($postDetail->photos as $photo) {
            Storage::disk('public')->delete($photo->post_photo_file);
            $photo->delete();
        }

        $postDetail->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลเรียบร้อยแล้ว!');
    }

    public function TouristAttractionUpdate(Request $request, $id)
    {
        $request->validate([
            'post_type_id' => 'required|exists:post_types,id',
            'topic_name' => 'nullable|string|max:255',
            'details' => 'nullable|string|max:255',
            'title_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'file_post' => 'nullable|array',
            'file_post.*' => 'file|mimes:jpg,jpeg,png|max:10240',
        ]);

        // ค้นหาข้อมูลที่ต้องการอัปเดต
        $postDetail = PostDetail::findOrFail($id);

        // อัปเดตข้อมูลพื้นฐาน
        $postDetail->update([
            'post_type_id' => $request->post_type_id,
            'topic_name' => $request->topic_name,
            'details' => $request->details,
        ]);

        // จัดการอัปโหลดรูป Title Image
        if ($request->hasFile('title_image')) {
            // ลบรูปภาพเก่าถ้ามี
            $oldPhoto = PostPhoto::where('post_detail_id', $postDetail->id)->where('post_photo_status', '1')->first();
            if ($oldPhoto) {
                Storage::disk('public')->delete($oldPhoto->post_photo_file);
                $oldPhoto->delete();
            }

            // อัปโหลดรูปใหม่
            $file = $request->file('title_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('photo_title', $filename, 'public');

            PostPhoto::create([
                'post_detail_id' => $postDetail->id,
                'post_photo_file' => $path,
                'post_photo_status' => '1',
            ]);
        }

        // จัดการอัปโหลดรูปภาพเพิ่มเติม
        if ($request->hasFile('file_post')) {
            // ลบเฉพาะรูปที่ถูกทำเครื่องหมายว่าต้องการลบ
            if ($request->has('delete_photo')) {
                $photosToDelete = PostPhoto::whereIn('id', $request->delete_photo)->get();
                foreach ($photosToDelete as $photo) {
                    Storage::disk('public')->delete($photo->post_photo_file);
                    $photo->delete();
                }
            }

            // อัปโหลดไฟล์ใหม่
            foreach ($request->file('file_post') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('photo', $filename, 'public');

                PostPhoto::create([
                    'post_detail_id' => $postDetail->id,
                    'post_photo_file' => $path,
                    'post_photo_status' => '2',
                ]);
            }
        }


        return redirect()->back()->with('success', 'แก้ไขโพสเรียบร้อย!');
    }
}
