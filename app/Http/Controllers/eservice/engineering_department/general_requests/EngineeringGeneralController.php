<?php

namespace App\Http\Controllers\eservice\engineering_department\general_requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EngineeringGeneralForm;
use App\Models\EngineeringGeneralFiles;
use App\Models\EngineeringGeneralReplies;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class EngineeringGeneralController extends Controller
{
    public function EngineeringGeneralFormPage()
    {
        return view('eservice.users.engineering_department.general_requests.page');
    }

    public function EngineeringGeneralFormCreate(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'subject' => 'nullable|string|max:255',
            'salutation' => 'nullable|string|max:50',
            'name' => 'nullable|string|max:255',
            'age' => 'nullable|integer',
            'house_number' => 'nullable|string|max:50',
            'village' => 'nullable|string|max:100',
            'subdistrict' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'province' => 'nullable|string|max:100',
            'request_details' => 'nullable|string',
            'phone' => 'nullable|string',
            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
            'included' => 'nullable|string',
            'proceedings' => 'nullable|string'
        ]);

        // dd($request);

        $grForm = EngineeringGeneralForm::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'date' => $request->date,
            'subject' => $request->subject,
            'salutation' => $request->salutation,
            'name' => $request->name,
            'age' => $request->age,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'phone' => $request->phone,
            'request_details' => $request->request_details,
            'included' => $request->included,
            'proceedings' => $request->proceedings,
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                $path = $file->storeAs('general-requests-files', $filename, 'public');

                EngineeringGeneralFiles::create([
                    'gr_form_id' => $grForm->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function EngineeringGeneralShowDetails()
    {
        $forms = EngineeringGeneralForm::with(['user', 'grReplies', 'grAttachments'])
            ->where('users_id', Auth::id())
            ->get();

        return view('eservice.users.engineering_department.general_requests.account.show-detail', compact('forms'));
    }

    public function EngineeringGeneralUserExportPDF($id)
    {
        $form = EngineeringGeneralForm::find($id);

        $pdf = Pdf::loadView('eservice.users.engineering_department.general_requests.pdf-form', compact('form'))->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำขอร้องทั่วไป' . $form->id . '.pdf');
    }

    public function EngineeringGeneralUserReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        EngineeringGeneralReplies::create([
            'gr_form_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function EngineeringGeneralUserShowFormEdit($id)
    {
        $form = EngineeringGeneralForm::with('grAttachments')->findOrFail($id);

        return view('users.ops.general-requests.account.edit-data', compact('form'));
    }

    // public function EngineeringGeneralUserUpdateForm(Request $request, $id)
    // {
    //     $request->validate([
    //         'date' => 'required|date',
    //         'subject' => 'nullable|string|max:255',
    //         'salutation' => 'nullable|string|max:50',
    //         'name' => 'nullable|string|max:255',
    //         'age' => 'nullable|integer',
    //         'house_number' => 'nullable|string|max:50',
    //         'village' => 'nullable|string|max:100',
    //         'subdistrict' => 'nullable|string|max:100',
    //         'district' => 'nullable|string|max:100',
    //         'province' => 'nullable|string|max:100',
    //         'request_details' => 'nullable|string',
    //         'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
    //         'delete_attachments' => 'nullable|array',
    //         'delete_attachments.*' => 'integer',
    //         'included' => 'nullable|string',
    //         'proceedings' => 'nullable|string'
    //     ]);

    //     $grForm = EngineeringGeneralForm::findOrFail($id);

    //     $grForm->update([
    //         'date' => $request->date,
    //         'subject' => $request->subject,
    //         'salutation' => $request->salutation,
    //         'name' => $request->name,
    //         'age' => $request->age,
    //         'house_number' => $request->house_number,
    //         'village' => $request->village,
    //         'subdistrict' => $request->subdistrict,
    //         'district' => $request->district,
    //         'province' => $request->province,
    //         'request_details' => $request->request_details,
    //         'included' => $request->included,
    //         'proceedings' => $request->proceedings,
    //     ]);

    //     if ($request->has('delete_attachments')) {
    //         foreach ($request->delete_attachments as $attachmentId) {
    //             $attachment = EngineeringGeneralFiles::find($attachmentId);
    //             if ($attachment) {
    //                 Storage::disk('public')->delete($attachment->file_path);
    //                 $attachment->delete();
    //             }
    //         }
    //     }

    //     if ($request->hasFile('attachments')) {
    //         foreach ($request->file('attachments') as $file) {
    //             $filename = time() . '_' . $file->getClientOriginalName();

    //             $path = $file->storeAs('general-requests-files', $filename, 'public');

    //             EngineeringGeneralFiles::create([
    //                 'gr_form_id' => $grForm->id,
    //                 'file_path' => $path,
    //                 'file_type' => $file->getClientMimeType(),
    //             ]);
    //         }
    //     }

    //     return redirect()->back()->with('success', 'อัปเดตสำเร็จแล้ว!');
    // }
}
