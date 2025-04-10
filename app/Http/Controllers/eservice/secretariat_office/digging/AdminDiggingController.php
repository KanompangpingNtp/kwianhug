<?php

namespace App\Http\Controllers\eservice\secretariat_office\digging;

use App\Http\Controllers\Controller;
use App\Models\DiggingFormReplies;
use App\Models\DiggingInformations;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class AdminDiggingController extends Controller
{
    public function DiggingShowData()
    {
        $forms = DiggingInformations::with(['user', 'details', 'files', 'replies'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('eservice.admin.municipal_office.digging.show-data', compact('forms'));
    }

    public function DiggingAdminExportPDF($id)
    {
        $form = DiggingInformations::with('details')->find($id);

        $details = $form->details->first();
        $document_option = $details->document_option ?? [];

        if (is_string($document_option)) {
            $document_option = json_decode($document_option, true);
        }

        $document_option = is_array($document_option) ? $document_option : [];

        $pdf = Pdf::loadView(
            'eservice.users.municipal_office.digging.pdf-form',
            compact('form', 'document_option')
        )->setPaper('A4', 'portrait');

        return $pdf->stream('pdf' . $form->id . '.pdf');
    }

    public function DiggingAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // dd($request);

        DiggingFormReplies::create([
            'digging_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function DiggingUpdateStatus($id)
    {
        $form = DiggingInformations::findOrFail($id);

        $form->form_status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }

    public function DiggingUserAdminShowEdit($id)
    {
        $form = DiggingInformations::with('files', 'details')->findOrFail($id);

        if ($form['details'] && $form['details']->document_option) {
            $document_option = $form['details']->document_option;
            if (is_string($document_option)) {
                $form['details']->document_option = json_decode($document_option, true);
            }
        }

        return view('eservice.admin.municipal_office.digging.edit-data', compact('form'));
    }
}
