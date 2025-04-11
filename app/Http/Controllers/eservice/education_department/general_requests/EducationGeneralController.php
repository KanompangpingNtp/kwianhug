<?php

namespace App\Http\Controllers\eservice\education_department\general_requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducationGeneralForm;
use App\Models\EducationGeneralFiles;
use App\Models\EducationGeneralReplies;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class EducationGeneralController extends Controller
{
    public function EducationGeneralFormPage()
    {
        return view('eservice.users.education_department.general_requests.page');
    }

    public function EducationGeneralFormCreate(Request $request)
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

        $grForm = EducationGeneralForm::create([
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

                EducationGeneralFiles::create([
                    'gr_form_id' => $grForm->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function EducationGeneralShowDetails()
    {
        $forms = EducationGeneralForm::with(['user', 'grReplies', 'grAttachments'])
            ->where('users_id', Auth::id())
            ->get();

        return view('eservice.users.education_department.general_requests.account.show-detail', compact('forms'));
    }

    public function EducationGeneralUserExportPDF($id)
    {
        $form = EducationGeneralForm::find($id);

        $pdf = Pdf::loadView('eservice.users.education_department.general_requests.pdf-form', compact('form'))->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำขอร้องทั่วไป' . $form->id . '.pdf');
    }

    public function EducationGeneralUserReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        EducationGeneralReplies::create([
            'gr_form_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

}
