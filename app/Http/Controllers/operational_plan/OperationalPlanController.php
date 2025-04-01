<?php

namespace App\Http\Controllers\operational_plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OperationalPlanType;
use App\Models\OperationalPlanSection;
use App\Models\OperationalPlanFile;
use App\Models\PersonnelAgency;
use App\Models\LawsRegsType;
use App\Models\AuthorityType;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;

class OperationalPlanController extends Controller
{
    public function OperationalPlanSectionPages($id)
    {
        //เมนู
        $personnelAgencies = PersonnelAgency::with('ranks')
            ->whereIn('status', [1, 2, 3, 4, 5])
            ->orderByRaw("FIELD(status, 1, 2, 3, 4, 5)")
            ->get();
        $PerfResultsMenu = PerfResultsType::all();
        $AuthorityMenu = AuthorityType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        $OperationalPlanType = OperationalPlanType::findOrFail($id);
        $OperationalPlanSection = OperationalPlanSection::where('type_id', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(14);

        return view('users.pages.operational_plan.page_section', compact(
            'OperationalPlanType',
            'OperationalPlanSection',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }

    public function OperationalPlanShowDetailsPages($id)
    {
        //เมนู
        $personnelAgencies = PersonnelAgency::with('ranks')
            ->whereIn('status', [1, 2, 3, 4, 5])
            ->orderByRaw("FIELD(status, 1, 2, 3, 4, 5)")
            ->get();
        $PerfResultsMenu = PerfResultsType::all();
        $AuthorityMenu = AuthorityType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        $OperationalPlanSection = OperationalPlanSection::with('type')->findOrFail($id);
        $OperationalPlanFile = OperationalPlanFile::where('section_id', $id)->get();

        return view('users.pages.operational_plan.page_detail', compact(
            'OperationalPlanSection',
            'OperationalPlanFile',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }
}
