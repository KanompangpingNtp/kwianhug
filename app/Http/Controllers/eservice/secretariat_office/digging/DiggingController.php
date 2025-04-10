<?php

namespace App\Http\Controllers\eservice\secretariat_office\digging;

use App\Http\Controllers\Controller;
use App\Models\DiggingFormDetails;
use App\Models\DiggingFormFiles;
use App\Models\DiggingFormReplies;
use App\Models\DiggingInformations;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ElderlyAllowancePeople;
use App\Models\ElderlyAllowancePersonsOptions;
use App\Models\ElderlyAllowanceFiles;
use App\Models\ElderlyAllowanceBank;
use App\Models\ElderlyAllowanceReplies;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class DiggingController extends Controller
{
    public function DiggingFormPage()
    {
        return view('eservice.users.municipal_office.digging.page');
    }

    public function DiggingFormCreate(Request $request)
    {
        $written_date = Carbon::now()->format('Y-m-d');
        $birth_day = $request->birth_day ? Carbon::createFromFormat('d/m/Y', $request->birth_day)->format('Y-m-d') : null;

        $request->validate([
            'salutation' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'house_number' => 'nullable|string',
            'village' => 'nullable|string',
            'alley' => 'nullable|string',
            'road' => 'nullable|string',
            'subdistrict' => 'nullable|string',
            'district' => 'nullable|string',
            'province' => 'nullable|string',
            'postal_code' => 'nullable|string',
            'phone_number' => 'nullable|string',

            'fullname_address' => 'required|string',
            'fullname_design' => 'required|string',
            'fullname_control' => 'required|string',
            'desire_detail' => 'required|string',
            'area_detail' => 'required|string',
            'mouth_area' => 'required|string',
            'document_permission' => 'required|string',
            'road_detail' => 'required|string',
            'village_detail' => 'nullable|string',
            'alley_detail' => 'nullable|string',
            'subdistrict_detail' => 'required|string',
            'district_detail' => 'required|string',
            'province_detail' => 'required|string',
            'postal_code_detail' => 'required|string',
            'name_district_detail' => 'required|string',
            'fix_day_detail' => 'required|string',

            'document_option' => 'nullable|array|min:1',
            'document_option.*' => 'in:option1,option2,option3,option4,option5,option6,option7,option8',
            'document_option_detail' => 'nullable|required_if:document_option.*,"option8"|string|max:255',
        ]);

        // dd($request);

        $data = [
            'users_id' => auth()->id(),
            'form_status' => 1,
            'salutation' => $request->salutation,
            'full_name' => $request->first_name . ' ' . $request->last_name,
            'address' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'telephone' => $request->phone_number,
        ];

        $diggingInformations = DiggingInformations::create([
            'users_id' => auth()->id(),
            'form_status' => 1,
            'salutation' => $request->salutation,
            'full_name' => $request->first_name . ' ' . $request->last_name,
            'address' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'telephone' => $request->phone_number,
        ]);

        $diggingFormDetails = DiggingFormDetails::create([
            'digging_id' => $diggingInformations->id,
            'fullname_address' => $request->fullname_address,
            'fullname_design' => $request->fullname_design,
            'fullname_control' => $request->fullname_control,
            'desire_detail' => $request->desire_detail,
            'mouth_area' => $request->mouth_area,
            'area_detail' => $request->area_detail,
            'document_permission' => $request->document_permission,
            'road_detail' => $request->road_detail,
            'village_detail' => $request->village_detail,
            'alley_detail' => $request->alley_detail,
            'subdistrict_detail' => $request->subdistrict_detail,
            'district_detail' => $request->district_detail,
            'province_detail' => $request->province_detail,
            'postal_code_detail' => $request->postal_code_detail,
            'name_district_detail' => $request->name_district_detail,
            'fix_day_detail' => $request->fix_day_detail,
            'document_option' => json_encode($request->document_type),
            'document_option_detail' => $request->document_option_detail,
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $optionKey => $file) {

                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('attachments', $filename, 'public');

                DiggingFormFiles::create([
                    'digging_id' => $diggingInformations->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function DiggingShowDetails()
    {
        $forms = DiggingInformations::with(['user', 'files', 'replies', 'details'])
            ->where('users_id', Auth::id())
            ->get();

        return view('eservice.users.municipal_office.digging.account.show-detail', compact('forms'));
    }

    public function DiggingUserShowEdit($id)
    {
        $form = DiggingInformations::with('files', 'details')->findOrFail($id);

        if ($form['details'] && $form['details']->document_option) {
            $document_option = $form['details']->document_option;
            if (is_string($document_option)) {
                $form['details']->document_option = json_decode($document_option, true);
            }
        }

        return view('eservice.users.municipal_office.digging.account.edit-data', compact('form'));
    }

    public function DiggingUserReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        DiggingFormReplies::create([
            'digging_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function ElderlyAllowanceUserExportPDF($id)
    {
        $form = ElderlyAllowancePeople::with('personsOption', 'bank')->find($id);

        if ($form->personsOption->first() && $form->personsOption->first()->welfare_type) {
            $welfareType = $form->personsOption->first()->welfare_type;
            if (is_string($welfareType)) {
                $form->personsOption->first()->welfare_type = json_decode($welfareType, true);
            }
        }

        $documentType = $form->personsOption->first()->document_type ?? [];
        if (is_string($documentType)) {
            $documentType = json_decode($documentType, true);
        }

        $pdf = Pdf::loadView('eservice.users.municipal_office.digging.pdf-form', compact('form', 'documentType'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำขอยืนยันสิทธิรับเงินเบี้ยยังชีพผู้สูงอายุ' . $form->id . '.pdf');
    }
}
