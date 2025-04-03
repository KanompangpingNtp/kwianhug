<?php

namespace App\Http\Controllers\eservice\temporary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\AuthorityType;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;

class TemporaryController extends Controller
{
    public function eservice_pages()
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

        return view('users.pages.e-service.page', compact(
            'personnelAgencies',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'AuthorityMenu',
            'PublicMenus',
            'LawsRegsMenu',
        ));
    }

    public function general_requests_pages()
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

        return view('users.pages.e-service.general_requests.page', compact(
            'personnelAgencies',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'AuthorityMenu',
            'PublicMenus',
            'LawsRegsMenu',
        ));
    }

    public function disability_pages()
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

        return view('users.pages.e-service.disability.page', compact(
            'personnelAgencies',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'AuthorityMenu',
            'PublicMenus',
            'LawsRegsMenu',
        ));
    }

    public function elderly_allowance_pages()
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

        return view('users.pages.e-service.elderly_allowance.page', compact(
            'personnelAgencies',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'AuthorityMenu',
            'PublicMenus',
            'LawsRegsMenu',
        ));
    }

    public function receive_assistance_pages()
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

        return view('users.pages.e-service.receive_assistance.page', compact(
            'personnelAgencies',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'AuthorityMenu',
            'PublicMenus',
            'LawsRegsMenu',
        ));
    }

    public function child_development_pages()
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

        return view('users.pages.e-service.child_development_center.page', compact(
            'personnelAgencies',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'AuthorityMenu',
            'PublicMenus',
            'LawsRegsMenu',
        ));
    }

    public function surrender_pages()
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

        return view('users.pages.e-service.child_development_center.surrender', compact(
            'personnelAgencies',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'AuthorityMenu',
            'PublicMenus',
            'LawsRegsMenu',
        ));
    }

    public function register_pages()
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

        return view('users.pages.e-service.child_development_center.register', compact(
            'personnelAgencies',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'AuthorityMenu',
            'PublicMenus',
            'LawsRegsMenu',
        ));
    }

    public function ReceiveComplaintsForm()
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

        return view('users.pages.menu_for_public.receive_complaints.page_form', compact(
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }

    public function SatisfactionForm ()
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

        return view('users.pages.menu_for_public.survey.page_form',compact(
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }
}
