<?php

namespace App\Http\Controllers\eservice\engineering_department\general_requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EngineeringGeneralForm;
use App\Models\EngineeringGeneralReplies;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminEngineeringGeneralController extends Controller
{
    public function EngineeringGeneralAdminShowData()
    {
        $forms = EngineeringGeneralForm::with(['user', 'grAttachments', 'grReplies'])
        ->orderBy('created_at', 'desc')
        ->get();

        return view('eservice.admin.engineering_department.general-requests.show-data', compact('forms'));
    }

    public function EngineeringGeneralAdminExportPDF($id)
    {
        $form = EngineeringGeneralForm::find($id);

        $pdf = Pdf::loadView('eservice.users.engineering_department.general_requests.pdf-form', compact('form'))->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำขอร้องทั่วไป' . $form->id . '.pdf');
    }

    public function EngineeringGeneralAdminReply(Request $request, $formId)
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

    public function EngineeringGeneralUpdateStatus($id)
    {
        $form = EngineeringGeneralForm::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
