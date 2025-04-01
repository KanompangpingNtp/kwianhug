<?php

namespace App\Http\Controllers\laws_and_regulations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LawsRegsType;
use App\Models\LawsRegsSection;
use App\Models\LawsRegsFiles;
use App\Models\PersonnelAgency;
use App\Models\AuthorityType;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;

class LawsAndRegulationsController extends Controller
{
    public function LawsAndRegulationsSectionPages($id)
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

        $LawsRegsType = LawsRegsType::findOrFail($id);
        $LawsRegsSection = LawsRegsSection::where('type_id', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(14);

        return view('users.pages.laws_and_regulations.page_section', compact(
            'LawsRegsType',
            'LawsRegsSection',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }

    public function LawsAndRegulationsShowDetailsPages($id)
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

        $LawsRegsSection = LawsRegsSection::with('type')->findOrFail($id);
        $LawsRegsFiles = LawsRegsFiles::where('section_id', $id)->get();

        return view('users.pages.laws_and_regulations.page_detail', compact(
            'LawsRegsSection',
            'LawsRegsFiles',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }
}
