<?php

namespace App\Http\Controllers\press_release;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostDetail;
use App\Models\OperationalPlanType;
use App\Models\PersonnelAgency;
use App\Models\LawsRegsType;
use App\Models\AuthorityType;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;

class PressReleaseController extends Controller
{
    public function PressReleaseShowData()
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

        $pressRelease = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ข่าวประชาสัมพันธ์');
            })
            ->orderBy('date', 'desc')
            ->paginate(14); // กำหนดจำนวนรายการที่แสดงต่อหน้าเป็น 14

        return view('users.pages.press_release.show_data', compact(
            'PublicMenus',
            'pressRelease',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }

    public function PressReleaseShowDetails($id)
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

        $pressRelease = PostDetail::with(['postType', 'videos', 'photos', 'pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ข่าวประชาสัมพันธ์');
            })
            ->findOrFail($id);

        return view('users.pages.press_release.show_detail', compact(
            'PublicMenus',
            'pressRelease',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }
}
