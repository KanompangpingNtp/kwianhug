<?php

namespace App\Http\Controllers\average_price;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostDetail;

class AveragePriceController extends Controller
{
    public function AveragePriceShowData()
    {
        $AveragePrice = PostDetail::with('postType','photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศราคากลาง');
            })->paginate(14);

        return view('pages.treasury_announcement.average_price.show_data', compact('AveragePrice','personnelAgencies'));
    }

    public function AveragePriceShowDetails($id)
    {
        $AveragePrice = PostDetail::with(['postType','photos'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศราคากลาง');
            })
            ->findOrFail($id);

        return view('pages.treasury_announcement.average_price.show_detail', compact('AveragePrice','personnelAgencies'));
    }
}
