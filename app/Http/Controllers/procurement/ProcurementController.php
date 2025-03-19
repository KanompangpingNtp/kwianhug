<?php

namespace App\Http\Controllers\procurement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostDetail;

class ProcurementController extends Controller
{
    public function ProcurementShowData()
    {
        $Procurement = PostDetail::with('postType','photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })->paginate(14);

        return view('pages.treasury_announcement.procurement.show_data', compact('Procurement','personnelAgencies'));
    }

    public function ProcurementShowDetails($id)
    {
        $Procurement = PostDetail::with(['postType','photos'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })
            ->findOrFail($id);

        return view('pages.treasury_announcement.procurement.show_detail', compact('Procurement','personnelAgencies'));
    }
}
