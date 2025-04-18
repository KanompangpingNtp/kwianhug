<?php

namespace App\Http\Controllers\eservice\secretariat_office\funeral;

use App\Http\Controllers\Controller;
use App\Models\DiggingFormDetails;
use App\Models\DiggingFormFiles;
use App\Models\DiggingFormReplies;
use App\Models\DiggingInformations;
use App\Models\FuneralFormDetails;
use App\Models\FuneralFormReplies;
use App\Models\FuneralInformations;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class FuneralController extends Controller
{
    public function FuneralFormPage()
    {
        return view('eservice.users.municipal_office.funeral.page');
    }

    public function FuneralFormCreate(Request $request)
    {
        $FuneralInformations = FuneralInformations::create([
            'users_id' => auth()->id(),
            'form_status' => 1,
        ]);

        $FuneralFormDetails = FuneralFormDetails::create([
            'funeral_id' => $FuneralInformations->id,
            'salutation_detail_1' => $request->salutation_detail_1,
            'fullname_detail_1' => $request->fullname_detail_1,
            'phone_number_detail_1' => $request->phone_number_detail_1,
            'mobile_number_detail_1' => $request->mobile_number_detail_1,
            'age_detail_1' => $request->age_detail_1,
            'idcard_detail_1' => $request->idcard_detail_1,
            'idcard_out_detail_1' => $request->idcard_out_detail_1,
            'idcard_date_detail_1' => $request->idcard_date_detail_1,
            'idcard_end_detail_1' => $request->idcard_end_detail_1,
            'occupation_detail_1' => $request->occupation_detail_1,
            'related_detail_1' => $request->related_detail_1,
            'address_detail_1' => $request->address_detail_1,
            'village_detail_1' => $request->village_detail_1,
            'alley_detail_1' => $request->alley_detail_1,
            'road_detail_1' => $request->road_detail_1,
            'subdistrict_detail_1' => $request->subdistrict_detail_1,
            'district_detail_1' => $request->district_detail_1,
            'province_detail_1' => $request->province_detail_1,
            'postal_code_detail_1' => $request->postal_code_detail_1,
            'address_current_detail_1' => $request->address_current_detail_1,
            'village_current_detail_1' => $request->village_current_detail_1,
            'alley_current_detail_1' => $request->alley_current_detail_1,
            'road_current_detail_1' => $request->road_current_detail_1,
            'subdistrict_current_detail_1' => $request->subdistrict_current_detail_1,
            'district_current_detail_1' => $request->district_current_detail_1,
            'province_current_detail_1' => $request->province_current_detail_1,
            'postal_code_current_detail_1' => $request->postal_code_current_detail_1,
            'salutation_detail_2' => $request->salutation_detail_2,
            'fullname_detail_2' => $request->fullname_detail_2,
            'age_detail_2' => $request->age_detail_2,
            'idcard_detail_2' => $request->idcard_detail_2,
            'dead_remake_detail_2' => $request->dead_remake_detail_2,
            'dead_date_detail_2' => $request->dead_date_detail_2,
            'certificate_detail_2' => $request->certificate_detail_2,
            'certificate_out_detail_2' => $request->certificate_out_detail_2,
            'certificate_date_detail_2' => $request->certificate_date_detail_2,
            'address_detail_2' => $request->address_detail_2,
            'village_detail_2' => $request->village_detail_2,
            'alley_detail_2' => $request->alley_detail_2,
            'road_detail_2' => $request->road_detail_2,
            'subdistrict_detail_2' => $request->subdistrict_detail_2,
            'district_detail_2' => $request->district_detail_2,
            'province_detail_2' => $request->province_detail_2,
            'postal_code_detail_2' => $request->postal_code_detail_2,
            'address_current_detail_2' => $request->address_current_detail_2,
            'village_current_detail_2' => $request->village_current_detail_2,
            'alley_current_detail_2' => $request->alley_current_detail_2,
            'road_current_detail_2' => $request->road_current_detail_2,
            'subdistrict_current_detail_2' => $request->subdistrict_current_detail_2,
            'district_current_detail_2' => $request->district_current_detail_2,
            'province_current_detail_2' => $request->province_current_detail_2,
            'postal_code_current_detail_2' => $request->postal_code_current_detail_2,
            'salutation_detail_3' => $request->salutation_detail_3,
            'fullname_detail_3' => $request->fullname_detail_3,
            'positon_detail_3' => $request->positon_detail_3,
            'org_detail_3' => $request->org_detail_3,
            'idcard_detail_3' => $request->idcard_detail_3,
            'idcard_out_detail_3' => $request->idcard_out_detail_3,
            'idcard_date_detail_3' => $request->idcard_date_detail_3,
            'idcard_end_detail_3' => $request->idcard_end_detail_3,
            'address_detail_3' => $request->address_detail_3,
            'village_detail_3' => $request->village_detail_3,
            'alley_detail_3' => $request->alley_detail_3,
            'road_detail_3' => $request->road_detail_3,
            'subdistrict_detail_3' => $request->subdistrict_detail_3,
            'district_detail_3' => $request->district_detail_3,
            'province_detail_3' => $request->province_detail_3,
            'postal_code_detail_3' => $request->postal_code_detail_3,
            'phone_number_detail_3' => $request->phone_number_detail_3,
        ]);

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function FuneralShowDetails()
    {
        $forms = FuneralInformations::with(['user', 'replies', 'details'])
            ->where('users_id', Auth::id())
            ->get();

        return view('eservice.users.municipal_office.funeral.account.show-detail', compact('forms'));
    }

    public function FuneralUserShowEdit($id)
    {
        $form = FuneralInformations::with('details')->findOrFail($id);

        if ($form['details'] && $form['details']->document_option) {
            $document_option = $form['details']->document_option;
            if (is_string($document_option)) {
                $form['details']->document_option = json_decode($document_option, true);
            }
        }

        return view('eservice.users.municipal_office.funeral.account.edit-data', compact('form'));
    }

    public function FuneralUserReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        FuneralFormReplies::create([
            'funeral_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function FuneralUserExportPDF($id)
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
