<?php

namespace App\Http\Controllers\message_from_pm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicInfoType;
use App\Models\BasicInfoDetail;
use App\Models\PersonnelAgency;
use App\Models\AuthorityType;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;

class MessageFromPMController extends Controller
{
    public function  MessageFromPMPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')
        ->whereIn('status', [1, 2, 3, 4, 5])
        ->orderByRaw("FIELD(status, 1, 2, 3, 4, 5)")
        ->get();

        $PerfResultsMenu = PerfResultsType::all();
        $AuthorityMenu = AuthorityType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'สารจากนายก')->id;
        $basicInfoDetail = BasicInfoDetail::with('type', 'images', 'pdf')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('users.pages.message_from_pm.page', compact(
            'basicInfoDetail',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus'
        ));
    }
}
