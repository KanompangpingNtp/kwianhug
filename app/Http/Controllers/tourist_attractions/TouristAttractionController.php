<?php

namespace App\Http\Controllers\tourist_attractions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostDetail;
use App\Models\OperationalPlanType;
use App\Models\PersonnelAgency;
use App\Models\LawsRegsType;
use App\Models\AuthorityType;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;

class TouristAttractionController extends Controller
{
    public function TouristAttractionShowData()
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

        $touristAttraction = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', callback: function ($query) {
                $query->where('type_name', 'แนะนำสถานที่ท่องเที่ยว');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(14);

        return view('users.pages.tourist_attraction.show_data', compact(
            'PublicMenus',
            'touristAttraction',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }


    public function TouristAttractionShowDetails($id)
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

        $touristAttraction = PostDetail::with(['postType', 'videos', 'photos', 'pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'แนะนำสถานที่ท่องเที่ยว');
            })
            ->findOrFail($id);

        return view('users.pages.tourist_attraction.show_detail', compact(
            'PublicMenus',
            'touristAttraction',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }
}
