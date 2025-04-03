<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostDetail;
use App\Models\OperationalPlanType;
use App\Models\PersonnelAgency;
use App\Models\LawsRegsType;
use App\Models\AuthorityType;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;

class ActivityController extends Controller
{
    public function ActivityShowData()
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

        $activity = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })
            ->orderByRaw("STR_TO_DATE(date, '%d-%m-%Y') DESC")
            ->paginate(14);;

        return view('users.pages.activity.show_data', compact(
            'activity',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }

    public function ActivityShowDetails($id)
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

        $activity = PostDetail::with(['postType', 'videos', 'photos', 'pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })
            ->findOrFail($id);

        return view('users.pages.activity.show_detail', compact(
            'activity',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }
}
