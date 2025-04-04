<?php

namespace App\Http\Controllers\egp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthorityType;
use App\Models\PostDetail;
use App\Models\PersonnelAgency;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;

class EGPController extends Controller
{
    public function EGPShowData()
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

        $Egp = PostDetail::with('postType','photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'egp');
            })->paginate(14);

        return view('users.pages.egp.show_data', compact(
            'Egp',
            'PublicMenus',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }

    public function EGPDetail($id)
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

        $Egp = PostDetail::with(['pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'egp');
            })->findOrFail($id);

        return view('users.pages.egp.show_detail', compact(
            'Egp',
            'PublicMenus',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }
}
