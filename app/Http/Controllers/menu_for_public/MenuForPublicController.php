<?php

namespace App\Http\Controllers\menu_for_public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PublicMenusType;
use App\Models\PublicMenusSection;
use App\Models\PublicMenusFiles;
use App\Models\PersonnelAgency;
use App\Models\LawsRegsType;
use App\Models\AuthorityType;
use App\Models\OperationalPlanType;
use App\Models\PerfResultsType;

class MenuForPublicController extends Controller
{
    public function MenuForPublicSectionPages($id)
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

        $PublicMenusType = PublicMenusType::findOrFail($id);
        $PublicMenusSection = PublicMenusSection::where('type_id', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(14);

        return view('users.pages.menu_for_public.page_section', compact(
            'PublicMenusType',
            'PublicMenusSection',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }

    public function MenuForPublicShowDetailsPages($id)
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

        $PublicMenusSection = PublicMenusSection::with('type')->findOrFail($id);
        $PublicMenusFiles = PublicMenusFiles::where('section_id', $id)->get();

        return view('users.pages.menu_for_public.page_detail', compact(
            'PublicMenusSection',
            'PublicMenusFiles',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }
}
