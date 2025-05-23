<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostDetail;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\AuthorityType;
use App\Models\PersonnelAgency;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;

class HomePageController extends Controller
{
    public function Home()
    {
        //เมนูผลการดำเนินงานเมนู
        $PerfResultsMenu = PerfResultsType::all();

        //เมนูอำนาจหน้าที่
        $AuthorityMenu = AuthorityType::all();

        //เมนูแผนงานพัฒนาท้องถิ่น
        $OperationalPlanMenu = OperationalPlanType::all();

        //เมนูกฎหมายและกฎระเบียบ
        $LawsRegsMenu = LawsRegsType::all();

        //เมนูสำหรับประชาชน
        $PublicMenus = PublicMenusType::all();

        //เมนูบุคลากร
        $personnelAgencies = PersonnelAgency::with('ranks')
            ->whereIn('status', [1, 2, 3, 4, 5])
            ->orderByRaw("FIELD(status, 1, 2, 3, 4, 5)")
            ->get();

        //ข่าวประชาสัมพันธ์
        $pressRelease = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ข่าวประชาสัมพันธ์');
            })
            ->orderBy('date', 'desc')
            ->get();

        //กิจกรรม
        $activity = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })
            ->orderByRaw("STR_TO_DATE(date, '%d-%m-%Y') DESC")
            ->get();


        //ประกาศจัดซื้อจัดจ้าง
        $procurement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ผลประกาศจัดซื้อจัดจ้าง
        $procurementResults = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลประกาศจัดซื้อจัดจ้าง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ประกาศราคากลาง
        $averageprice = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศราคากลาง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //รายงานผลจัดซื้อจัดจ้าง
        $procurementreport = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'รายงานผลจัดซื้อจัดจ้าง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //รางวัลแห่งความภาคภูมิใจ
        $awardsPride = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'รางวัลแห่งความภาคภูมิใจ');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ป้ายประกาศ
        $noticeBoard = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ป้ายประกาศ');
            })
            ->orderBy('date', 'desc')
            ->get();

        //แนะนำสถานที่ท่องเที่ยว
        $touristattraction = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'แนะนำสถานที่ท่องเที่ยว');
            })
            ->orderBy('date', 'desc')
            ->get();

        //egp
        $egp = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'egp');
            })
            ->orderBy('date', 'desc')
            ->get();

        return view('pages.home.app', compact(
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies',
            'pressRelease',
            'activity',
            'procurement',
            'procurementResults',
            'averageprice',
            'procurementreport',
            'awardsPride',
            'noticeBoard',
            'touristattraction',
            'egp'
        ));
    }

    public function TreasuryAnnouncementData()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();
        $PerfResultsMenu = PerfResultsType::all();
        $AuthorityMenu = AuthorityType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        return view('users.pages.treasury_announcement.show_data', compact(
            'PublicMenus',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }

    public function BannserPages()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();
        $PerfResultsMenu = PerfResultsType::all();
        $AuthorityMenu = AuthorityType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        return view('users.pages.banner-in.app', compact(
            'PublicMenus',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }

    public function contact()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();
        $PerfResultsMenu = PerfResultsType::all();
        $AuthorityMenu = AuthorityType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        return view('users.pages.contact.page', compact(
            'PublicMenus',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }
}
