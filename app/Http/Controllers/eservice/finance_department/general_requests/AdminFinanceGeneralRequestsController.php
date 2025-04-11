<?php

namespace App\Http\Controllers\eservice\finance_department\general_requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FinanceGeneralForm;
use App\Models\FinanceGeneralFiles;
use App\Models\FinanceGeneralReplies;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminFinanceGeneralRequestsController extends Controller
{
    public function FinanceGeneralAdminShowData()
    {
        $forms = FinanceGeneralForm::with(['user', 'grAttachments', 'grReplies'])
        ->orderBy('created_at', 'desc')
        ->get();

        return view('eservice.admin.finance_department.general-requests.show-data', compact('forms'));
    }

    public function FinanceGeneralAdminExportPDF($id)
    {
        $form = FinanceGeneralForm::find($id);

        $pdf = Pdf::loadView('eservice.users.finance_department.general_requests.pdf-form', compact('form'))->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำขอร้องทั่วไป' . $form->id . '.pdf');
    }

    public function FinanceGeneralAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        FinanceGeneralReplies::create([
            'gr_form_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function FinanceGeneralUpdateStatus($id)
    {
        $form = FinanceGeneralForm::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
