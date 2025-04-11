<?php

namespace App\Http\Controllers\eservice\education_department\general_requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducationGeneralForm;
use App\Models\EducationGeneralFiles;
use App\Models\EducationGeneralReplies;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminEducationGeneralController extends Controller
{
    public function EducationGeneralAdminShowData()
    {
        $forms = EducationGeneralForm::with(['user', 'grAttachments', 'grReplies'])
        ->orderBy('created_at', 'desc')
        ->get();

        return view('eservice.admin.education_department.general-requests.show-data', compact('forms'));
    }

    public function EducationGeneralAdminExportPDF($id)
    {
        $form = EducationGeneralForm::find($id);

        $pdf = Pdf::loadView('eservice.users.education_department.general_requests.pdf-form', compact('form'))->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำขอร้องทั่วไป' . $form->id . '.pdf');
    }

    public function EducationGeneralAdminReply(Request $request, $formId)
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

    public function EducationGeneralUpdateStatus($id)
    {
        $form = EducationGeneralForm::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
