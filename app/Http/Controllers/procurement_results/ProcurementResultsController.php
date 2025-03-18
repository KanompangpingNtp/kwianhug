<?php

namespace App\Http\Controllers\procurement_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostDetail;

class ProcurementResultsController extends Controller
{
    public function ProcurementResultsShowData()
    {
        $ProcurementResults = PostDetail::with('postType','photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลจัดซื้อจัดจ้าง');
            })->paginate(14);

        return view('pages.treasury_announcement.performance_results.show_data', compact('ProcurementResults','personnelAgencies'));
    }

    public function ProcurementResultsShowDetails($id)
    {
        $ProcurementResults = PostDetail::with(['postType','photos'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลจัดซื้อจัดจ้าง');
            })
            ->findOrFail($id);

        return view('pages.treasury_announcement.performance_results.show_detail', compact('ProcurementResults','personnelAgencies'));
    }
}
