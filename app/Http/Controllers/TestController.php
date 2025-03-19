<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class TestController extends Controller
{
    public function testindex ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('test.test_agency',compact('personnelAgencies'));
    }
    public function test ($id)
    {
        $agency = PersonnelAgency::with('ranks.details.images')->findOrFail($id);

        return view('test.test_agency_result',compact(var_name: 'agency'));
    }
}
