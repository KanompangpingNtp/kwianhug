<?php

namespace App\Http\Controllers\notice_board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostDetail;
use App\Models\PersonnelAgency;
use App\Models\AuthorityType;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;

class NoticeBoardController extends Controller
{
    public function NoticeBoardShowData()
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

        $noticeBoard = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ป้ายประกาศ');
            })->paginate(14);

        return view('users.pages.notice_board.show_data', compact('PublicMenus','noticeBoard', 'personnelAgencies', 'PerfResultsMenu', 'AuthorityMenu', 'OperationalPlanMenu', 'LawsRegsMenu'));
    }

    public function NoticeBoardShowDetails($id)
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

        $noticeBoard = PostDetail::with(['postType', 'photos'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ป้ายประกาศ');
            })
            ->findOrFail($id);

        return view('users.pages.notice_board.show_detail', compact('PublicMenus','noticeBoard', 'personnelAgencies', 'PerfResultsMenu', 'AuthorityMenu', 'OperationalPlanMenu', 'LawsRegsMenu'));
    }
}
