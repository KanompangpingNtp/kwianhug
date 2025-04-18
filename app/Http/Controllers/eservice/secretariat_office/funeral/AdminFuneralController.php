<?php

namespace App\Http\Controllers\eservice\secretariat_office\funeral;

use App\Http\Controllers\Controller;
use App\Models\DiggingFormReplies;
use App\Models\DiggingInformations;
use App\Models\FuneralFormReplies;
use App\Models\FuneralInformations;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class AdminFuneralController extends Controller
{
    public function FuneralShowData()
    {
        $forms = FuneralInformations::with(['user', 'details', 'replies', 'files'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('eservice.admin.municipal_office.funeral.show-data', compact('forms'));
    }

    public function FuneralAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // dd($request);

        FuneralFormReplies::create([
            'funeral_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function FuneralUpdateStatus($id)
    {
        $form = FuneralInformations::findOrFail($id);

        $form->form_status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }

    public function FuneralUserAdminShowEdit($id)
    {
        $form = FuneralInformations::with('details')->findOrFail($id);

        if ($form['details'] && $form['details']->document_option) {
            $document_option = $form['details']->document_option;
            if (is_string($document_option)) {
                $form['details']->document_option = json_decode($document_option, true);
            }
        }

        return view('eservice.admin.municipal_office.funeral.edit-data', compact('form'));
    }

    public function FuneralAdminExportPDF($id)
    {
        $forms = FuneralInformations::with(['user', 'details', 'replies'])
            ->where('id', $id)
            ->orderBy('created_at', 'desc')
            ->first();
        $pdf = Pdf::loadView('eservice.users.municipal_office.funeral.pdf-form', compact('forms'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('pdf');
    }
}
