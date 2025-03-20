<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostDetail;

class HomePageController extends Controller
{
    public function Home()
    {
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
            ->orderBy('date', 'desc')
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

        return view('pages.home.app', compact(
            'pressRelease',
            'activity',
            'procurement',
            'procurementResults',
            'averageprice',
            'procurementreport',
            'awardsPride',
            'noticeBoard',
            'touristattraction',
        ));
    }
}
