<?php

namespace App\Http\Controllers\personnel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\PersonnelGroupPhoto;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\AuthorityType;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;
use App\Models\OrgStructure;

class PersonnelAgencyController extends Controller
{
    public function AgencyShow($id)
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

        $agency = PersonnelAgency::with('ranks.details.images')->findOrFail($id);
        $photos = PersonnelGroupPhoto::whereIn('personnel_rank_id', $agency->ranks->pluck('id'))->get();

        preg_match('/(.*?)(\d{2,}-\d{3,}-\d{4,})/', $agency->phone, $matches);
        $text = trim($matches[1] ?? '');
        $phone = trim($matches[2] ?? '');

        return view('users.pages.agency.show_details', compact(
            'agency',
            'photos',
            'text',
            'phone',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }

    // public function Personnel_Chart()
    // {
    //     //เมนู
    //     $personnelAgencies = PersonnelAgency::with('ranks')
    //         ->whereIn('status', [1, 2, 3, 4, 5])
    //         ->orderByRaw("FIELD(status, 1, 2, 3, 4, 5)")
    //         ->get();
    //     $PerfResultsMenu = PerfResultsType::all();
    //     $AuthorityMenu = AuthorityType::all();
    //     $OperationalPlanMenu = OperationalPlanType::all();
    //     $LawsRegsMenu = LawsRegsType::all();
    //     $PublicMenus = PublicMenusType::all();

    //     $data = OrgStructure::orderBy('id', 'asc')->first();

    //     return view('users.pages.agency.personnel_chart', compact(
    //         'data',
    //         'PerfResultsMenu',
    //         'AuthorityMenu',
    //         'OperationalPlanMenu',
    //         'LawsRegsMenu',
    //         'PublicMenus',
    //         'personnelAgencies'
    //     ));
    // }
}
