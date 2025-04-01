<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\activity\AdminActivityController;
use App\Http\Controllers\press_release\AdminPressReleaseController;
use App\Http\Controllers\procurement\AdminProcurementController;
use App\Http\Controllers\procurement_results\AdminProcurementResultsController;
use App\Http\Controllers\average_price\AdminAveragePriceController;
use App\Http\Controllers\procurement_report\AdminProcurementReportController;
use App\Http\Controllers\activity\ActivityController;
use App\Http\Controllers\press_release\PressReleaseController;
use App\Http\Controllers\procurement\ProcurementController;
use App\Http\Controllers\procurement_results\ProcurementResultsController;
use App\Http\Controllers\average_price\AveragePriceController;
use App\Http\Controllers\procurement_report\ProcurementReportController;
use App\Http\Controllers\notice_board\AdminNoticeBoardController;
use App\Http\Controllers\tourist_attractions\AdminTouristAttractionController;
use App\Http\Controllers\awards_of_pride\AdminAwardsofPrideController;
use App\Http\Controllers\personnel\AdminPersonnelController;
use App\Http\Controllers\personnel\PersonnelAgencyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\home\HomePageController;
use App\Http\Controllers\performance_results\AdminPerformanceResultsController;
use App\Http\Controllers\performance_results\PerformanceResultsController;
use App\Http\Controllers\authority\AdminAuthorityController;
use App\Http\Controllers\authority\AuthorityController;
use App\Http\Controllers\operational_plan\AdminOperationalPlanController;
use App\Http\Controllers\operational_plan\OperationalPlanController;
use App\Http\Controllers\laws_and_regulations\AdminLawsAndRegulationsController;
use App\Http\Controllers\laws_and_regulations\LawsAndRegulationsController;
use App\Http\Controllers\menu_for_public\AdminMenuForPublicController;
use App\Http\Controllers\menu_for_public\MenuForPublicController;

use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/test', [TestController::class, 'testindex'])->name('testindex');
// Route::get('/test/result/{id}', [TestController::class, 'test'])->name('test');

//กิจกรรม
Route::get('/Activity/ShowData', [ActivityController::class, 'ActivityShowData'])->name('ActivityShowData');
Route::get('/Activity/ShowDetails/{id}', [ActivityController::class, 'ActivityShowDetails'])->name('ActivityShowDetails');

//ประชาสัมพันธ์
Route::get('/PressRelease/ShowData', [PressReleaseController::class, 'PressReleaseShowData'])->name('PressReleaseShowData');
Route::get('/PressRelease/ShowDetails/{id}', [PressReleaseController::class, 'PressReleaseShowDetails'])->name('PressReleaseShowDetails');

//ประกาศของคลัง
Route::get('/TreasuryAnnouncement/ShowData', [HomePageController::class, 'TreasuryAnnouncementData'])->name('TreasuryAnnouncementData');

//ประกาศจัดซื้อจัดจ้าง
Route::get('/procurement/detail/{id}', [ProcurementController::class, 'ProcurementDetail'])->name('ProcurementDetail');
Route::get('/procurement/ShowData', [ProcurementController::class, 'ProcurementShowData'])->name('ProcurementShowData');

//ผลประกาศจัดซื้อจัดจ้าง
Route::get('/procurement-results/detail/{id}', [ProcurementResultsController::class, 'ProcurementResultsDetail'])->name('ProcurementResultsDetail');
Route::get('/procurement-results/ShowData', [ProcurementResultsController::class, 'ProcurementResultsShowData'])->name('ProcurementResultsShowData');

//ประกาศราคากลาง
Route::get('/AveragePrice/detail/{id}', [AveragePriceController::class, 'AveragePriceDetail'])->name('AveragePriceDetail');
Route::get('/AveragePrice/ShowData', [AveragePriceController::class, 'AveragePriceShowData'])->name('AveragePriceShowData');

//รายงานผลจัดซื้อจัดจ้าง
Route::get('/ProcurementReport/detail/{id}', [ProcurementReportController::class, 'ProcurementReportDetail'])->name('ProcurementReportDetail');
Route::get('/ProcurementReport/ShowData', [ProcurementReportController::class, 'ProcurementReportShowData'])->name('ProcurementReportShowData');

Route::get('/index', function () {
    return view('pages.home.app');
});

Route::get('/', [HomePageController::class, 'Home'])->name('Home');

//บุคลากร
Route::get('/agency/detail/{id}', [PersonnelAgencyController::class, 'AgencyShow'])->name('AgencyShow');
Route::get('/agency/personnel_chart/detail', [PersonnelAgencyController::class, 'Personnel_Chart'])->name('Personnel_Chart');

//ผลการดำเนินงาน
Route::get('/PerformanceResults/show/section/{id}', [PerformanceResultsController::class, 'PerformanceResultsSectionPages'])->name('PerformanceResultsSectionPages');
Route::get('/PerformanceResults/show/section/topic/{id}', [PerformanceResultsController::class, 'PerfResultsSubTopicPages'])->name('PerfResultsSubTopicPages');
Route::get('/PerformanceResults/show/section/topic/details/{id}', [PerformanceResultsController::class, 'PerfResultsShowDetailsPages'])->name('PerfResultsShowDetailsPages');

//อำนาจหน้าที่
Route::get('/Authority/show/detail/{id}', [AuthorityController::class, 'AuthorityShowDetailsPages'])->name('AuthorityShowDetailsPages');

//แผนงานพัฒนาท้องถิ่น
Route::get('/OperationalPlan/show/section/{id}', [OperationalPlanController::class, 'OperationalPlanSectionPages'])->name('OperationalPlanSectionPages');
Route::get('/OperationalPlan/show/section/details/{id}', [OperationalPlanController::class, 'OperationalPlanShowDetailsPages'])->name('OperationalPlanShowDetailsPages');

//กฏหมายและกฏระเบียบ
Route::get('/LawsAndRegulations/show/section/{id}', [LawsAndRegulationsController::class, 'LawsAndRegulationsSectionPages'])->name('LawsAndRegulationsSectionPages');
Route::get('/LawsAndRegulations/show/section/details/{id}', [LawsAndRegulationsController::class, 'LawsAndRegulationsShowDetailsPages'])->name('LawsAndRegulationsShowDetailsPages');

//เมนูสำหรับประชาชน
Route::get('/MenuForPublic/show/section/{id}', [MenuForPublicController::class, 'MenuForPublicSectionPages'])->name('MenuForPublicSectionPages');
Route::get('/MenuForPublic/show/section/details/{id}', [MenuForPublicController::class, 'MenuForPublicShowDetailsPages'])->name('MenuForPublicShowDetailsPages');

Route::middleware(['check.auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'AdminIndex'])->name('AdminIndex');

    //admin Activity
    Route::get('/Activity/page', [AdminActivityController::class, 'ActivityHome'])->name('ActivityHome');
    Route::post('/Activity/create', [AdminActivityController::class, 'ActivityCreate'])->name('ActivityCreate');
    Route::delete('/Activity/delete{id}', [AdminActivityController::class, 'ActivityDelete'])->name('ActivityDelete');
    Route::put('/Activity/update/{id}', [AdminActivityController::class, 'ActivityUpdate'])->name('ActivityUpdate');
    Route::put('/Activity/{id}/updatefile', [AdminActivityController::class, 'ActivityUpdateFile'])->name('ActivityUpdateFile');

    //admin PressRelease
    Route::get('/PressRelease/page', [AdminPressReleaseController::class, 'PressReleaseHome'])->name('PressReleaseHome');
    Route::post('/PressRelease/create', [AdminPressReleaseController::class, 'PressReleaseCreate'])->name('PressReleaseCreate');
    Route::delete('/PressRelease/delete{id}', [AdminPressReleaseController::class, 'PressReleaseDelete'])->name('PressReleaseDelete');
    Route::put('/PressRelease/update/{id}', [AdminPressReleaseController::class, 'PressReleaseUpdate'])->name('PressReleaseUpdate');
    Route::put('/PressRelease/{id}/updatefile', [AdminPressReleaseController::class, 'updateFile'])->name('updateFile');

    //admin Procurement
    Route::get('/Procurement/page', [AdminProcurementController::class, 'ProcurementHome'])->name('ProcurementHome');
    Route::post('/Procurement/create', [AdminProcurementController::class, 'ProcurementCreate'])->name('ProcurementCreate');
    Route::delete('/Procurement/delete{id}', [AdminProcurementController::class, 'ProcurementDelete'])->name('ProcurementDelete');
    Route::put('/procurement/update/{id}', [AdminProcurementController::class, 'ProcurementUpdate'])->name('ProcurementUpdate');

    //admin ProcurementResults
    Route::get('/ProcurementResults/page', [AdminProcurementResultsController::class, 'ProcurementResultsHome'])->name('ProcurementResultsHome');
    Route::post('/ProcurementResults/create', [AdminProcurementResultsController::class, 'ProcurementResultsCreate'])->name('ProcurementResultsCreate');
    Route::delete('/ProcurementResults/delete{id}', [AdminProcurementResultsController::class, 'ProcurementResultsDelete'])->name('ProcurementResultsDelete');
    Route::put('/ProcurementResults/update/{id}', [AdminProcurementResultsController::class, 'ProcurementResultsUpdate'])->name('ProcurementResultsUpdate');

    //admin AveragePrice
    Route::get('/AveragePrice/page', [AdminAveragePriceController::class, 'AveragePriceHome'])->name('AveragePriceHome');
    Route::post('/AveragePrice/create', [AdminAveragePriceController::class, 'AveragePriceCreate'])->name('AveragePriceCreate');
    Route::delete('/AveragePrice/delete{id}', [AdminAveragePriceController::class, 'AveragePriceDelete'])->name('AveragePriceDelete');
    Route::put('/AveragePrice/update/{id}', [AdminAveragePriceController::class, 'AveragePriceUpdate'])->name('AveragePriceUpdate');

    //admin ProcurementReport
    Route::get('/ProcurementReport/page', [AdminProcurementReportController::class, 'ProcurementReportHome'])->name('ProcurementReportHome');
    Route::post('/ProcurementReport/create', [AdminProcurementReportController::class, 'ProcurementReportCreate'])->name('ProcurementReportCreate');
    Route::delete('/ProcurementReport/delete{id}', [AdminProcurementReportController::class, 'ProcurementReportDelete'])->name('ProcurementReportDelete');
    Route::put('/ProcurementReport/update/{id}', [AdminProcurementReportController::class, 'ProcurementReportUpdate'])->name('ProcurementReportUpdate');

    //admin NoticeBoard
    Route::get('/NoticeBoard/page', [AdminNoticeBoardController::class, 'NoticeBoardHome'])->name('NoticeBoardHome');
    Route::post('/NoticeBoard/create', [AdminNoticeBoardController::class, 'NoticeBoardCreate'])->name('NoticeBoardCreate');
    Route::delete('/NoticeBoard/delete{id}', [AdminNoticeBoardController::class, 'NoticeBoardDelete'])->name('NoticeBoardDelete');

    //admin TouristAttraction
    Route::get('/TouristAttraction/page', [AdminTouristAttractionController::class, 'TouristAttractionPage'])->name('TouristAttractionPage');
    Route::post('/TouristAttraction/create', [AdminTouristAttractionController::class, 'TouristAttractionCreate'])->name('TouristAttractionCreate');
    Route::delete('/TouristAttraction/delete/{id}', [AdminTouristAttractionController::class, 'TouristAttractionDelete'])->name('TouristAttractionDelete');
    Route::put('/TouristAttraction/update/{id}', [AdminTouristAttractionController::class, 'TouristAttractionUpdate'])->name('TouristAttractionUpdate');

    //admin NoticeBoard
    Route::get('/AwardsofPride/page', [AdminAwardsofPrideController::class, 'AwardsofPrideHome'])->name('AwardsofPrideHome');
    Route::post('/AwardsofPride/create', [AdminAwardsofPrideController::class, 'AwardsofPrideCreate'])->name('AwardsofPrideCreate');
    Route::delete('/AwardsofPride/delete{id}', [AdminAwardsofPrideController::class, 'AwardsofPrideDelete'])->name('AwardsofPrideDelete');

    //admin ManagePersonnel
    Route::get('/Personnel/page', [AdminPersonnelController::class, 'ManagePersonnel'])->name('ManagePersonnel');
    Route::post('/Personnel/agency/create', [AdminPersonnelController::class, 'agencyCreate'])->name('agencyCreate');
    Route::put('/Personnel/agency/update/{id}', [AdminPersonnelController::class, 'agencyUpdate'])->name('agencyUpdate');
    Route::delete('/Personnel/agency/delete{id}', [AdminPersonnelController::class, 'agencyDelete'])->name('agencyDelete');

    Route::get('/PersonnelRankDetails/page/{id}', [AdminPersonnelController::class, 'PersonnelRankDetails'])->name('PersonnelRankDetails');
    Route::post('/Personnel/PersonnelRank/create/{id}', [AdminPersonnelController::class, 'PersonnelRankCreate'])->name('PersonnelRankCreate');
    Route::put('/Personnel/PersonnelRank/update/{id}', [AdminPersonnelController::class, 'PersonnelRankUpdate'])->name('PersonnelRankUpdate');
    Route::delete('/Personnel/PersonnelRank/delete{id}', [AdminPersonnelController::class, 'PersonnelRankDelete'])->name('PersonnelRankDelete');

    Route::get('/Personnel/PersonnelRank/PersonnelDetails/page/{id}', [AdminPersonnelController::class, 'PersonnelDetails'])->name('PersonnelDetails');
    Route::post('/Personnel/PersonnelRank/PersonnelDetails/create/{id}', [AdminPersonnelController::class, 'PersonnelDetailsCreate'])->name('PersonnelDetailsCreate');
    Route::put('/Personnel/PersonnelRank/PersonnelDetails/update/{id}', [AdminPersonnelController::class, 'PersonnelDetailsUpdate'])->name('PersonnelDetailsUpdate');
    Route::delete('/Personnel/PersonnelRank/PersonnelDetails/delete{id}', [AdminPersonnelController::class, 'PersonnelDetailsDelete'])->name('PersonnelDetailsDelete');

    Route::get('/PersonnelGroupPhotoPage/page/{id}', [AdminPersonnelController::class, 'PersonnelGroupPhotoPage'])->name('PersonnelGroupPhotoPage');
    Route::post('/PersonnelGroupPhotoPage/create/{id}', [AdminPersonnelController::class, 'PersonnelGroupPhotoCreate'])->name('PersonnelGroupPhotoCreate');
    Route::delete('/PersonnelGroupPhotoPage/delete{id}', [AdminPersonnelController::class, 'PersonnelGroupPhotoDelete'])->name('PersonnelGroupPhotoDelete');

    //PerformanceResults
    Route::get('/Admin/PerformanceResults/page', [AdminPerformanceResultsController::class, 'PerformanceResultsType'])->name('PerformanceResultsType');
    Route::post('/Admin/PerformanceResults/create/name', [AdminPerformanceResultsController::class, 'PerformanceResultsTypeCreate'])->name('PerformanceResultsTypeCreate');
    Route::put('/Admin/PerformanceResults/{id}/update', [AdminPerformanceResultsController::class, 'PerformanceResultsUpdate'])->name('PerformanceResultsUpdate');
    Route::delete('/Admin/PerformanceResults/{id}/delete', [AdminPerformanceResultsController::class, 'PerformanceResultsDelete'])->name('PerformanceResultsDelete');

    Route::get('/Admin/PerformanceResults/show/section/{id}', [AdminPerformanceResultsController::class, 'PerformanceResultsShowSection'])->name('PerformanceResultsShowSection');
    Route::post('/Admin/PerformanceResults/show/section/create/{id}', [AdminPerformanceResultsController::class, 'PerformanceResultsSectionCreate'])->name('PerformanceResultsSectionCreate');
    Route::put('/Admin/PerformanceResults/show/section/update/{id}', [AdminPerformanceResultsController::class, 'PerformanceResultsSectionUpdate'])->name('PerformanceResultsSectionUpdate');
    Route::delete('/Admin/PerformanceResults/show/section/delete/{id}', [AdminPerformanceResultsController::class, 'PerformanceResultsSectionDelete'])->name('PerformanceResultsSectionDelete');

    Route::get('/Admin/PerformanceResults/show/section/topic/{id}', [AdminPerformanceResultsController::class, 'PerfResultsSubTopicShowSection'])->name('PerfResultsSubTopicShowSection');
    Route::post('/Admin/PerformanceResults/show/section/topic/create/{id}', [AdminPerformanceResultsController::class, 'PerfResultsSubTopicCreate'])->name('PerfResultsSubTopicCreate');
    Route::put('/Admin/PerformanceResults/show/section/topic/update/{id}', [AdminPerformanceResultsController::class, 'PerfResultsSubTopicUpdate'])->name('PerfResultsSubTopicUpdate');
    Route::delete('/Admin/PerformanceResults/show/section/topic/delete/{id}', [AdminPerformanceResultsController::class, 'PerfResultsSubTopicDelete'])->name('PerfResultsSubTopicDelete');

    Route::get('/Admin/PerformanceResults/show/section/topic/detail/{id}', [AdminPerformanceResultsController::class, 'PerfResultsShowDetails'])->name('PerfResultsShowDetails');
    Route::post('/Admin/PerformanceResults/show/section/topic/detail/create/{id}', [AdminPerformanceResultsController::class, 'PerfResultsDetailsCreate'])->name('PerfResultsDetailsCreate');
    Route::delete('/Admin/PerformanceResults/show/section/topic/detail/delete/{id}', [AdminPerformanceResultsController::class, 'PerfResultsDetailsDelete'])->name('PerfResultsDetailsDelete');

    //authority
    Route::get('/Admin/authority/page', [AdminAuthorityController::class, 'AuthorityType'])->name('AuthorityType');
    Route::post('/Admin/authority/create/name', [AdminAuthorityController::class, 'AuthorityTypeCreate'])->name('AuthorityTypeCreate');
    Route::put('/Admin/authority/{id}/update', [AdminAuthorityController::class, 'AuthorityTypeUpdate'])->name('AuthorityTypeUpdate');
    Route::delete('/Admin/authority/{id}/delete', [AdminAuthorityController::class, 'AuthorityTypeDelete'])->name('AuthorityTypeDelete');
    Route::get('/Admin/authority/show/detail/{id}', [AdminAuthorityController::class, 'AuthorityShowDetail'])->name('AuthorityShowDetail');
    Route::post('/Admin/authority/show/detail/create/{id}', [AdminAuthorityController::class, 'AuthorityDetailCreate'])->name('AuthorityDetailCreate');
    Route::delete('/Admin/authority/show/detail/delete/{id}', [AdminAuthorityController::class, 'AuthorityDetailDelete'])->name('AuthorityDetailDelete');

    //OperationalPlan
    Route::get('/Admin/OperationalPlan/page', [AdminOperationalPlanController::class, 'OperationalPlanType'])->name('OperationalPlanType');
    Route::post('/Admin/OperationalPlan/create/name', [AdminOperationalPlanController::class, 'OperationalPlanTypeCreate'])->name('OperationalPlanTypeCreate');
    Route::put('/Admin/OperationalPlan/{id}/update', [AdminOperationalPlanController::class, 'OperationalPlanUpdate'])->name('OperationalPlanUpdate');
    Route::delete('/Admin/OperationalPlan/{id}/delete', [AdminOperationalPlanController::class, 'OperationalPlanDelete'])->name('OperationalPlanDelete');

    Route::get('/Admin/OperationalPlan/show/section/{id}', [AdminOperationalPlanController::class, 'OperationalPlanShowSection'])->name('OperationalPlanShowSection');
    Route::post('/Admin/OperationalPlan/show/section/create/{id}', [AdminOperationalPlanController::class, 'OperationalPlanSectionCreate'])->name('OperationalPlanSectionCreate');
    Route::put('/Admin/OperationalPlan/show/section/update/{id}', [AdminOperationalPlanController::class, 'OperationalPlanSectionUpdate'])->name('OperationalPlanSectionUpdate');
    Route::delete('/Admin/OperationalPlan/show/section/delete/{id}', [AdminOperationalPlanController::class, 'OperationalPlanSectionDelete'])->name('OperationalPlanSectionDelete');

    Route::get('/Admin/OperationalPlan/show/section/detail/{id}', [AdminOperationalPlanController::class, 'OperationalPlanShowDetails'])->name('OperationalPlanShowDetails');
    Route::post('/Admin/OperationalPlan/show/section/detail/create/{id}', [AdminOperationalPlanController::class, 'OperationalPlanDetailCreate'])->name('OperationalPlanDetailCreate');
    Route::delete('/Admin/OperationalPlan/show/section/detail/delete/{id}', [AdminOperationalPlanController::class, 'OperationalPlanDetailDelete'])->name('OperationalPlanDetailDelete');

    //LawsAndRegulations
    Route::get('/Admin/LawsAndRegulations/page', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsType'])->name('LawsAndRegulationsType');
    Route::post('/Admin/LawsAndRegulations/create/name', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsTypeCreate'])->name('LawsAndRegulationsTypeCreate');
    Route::put('/Admin/LawsAndRegulations/{id}/update', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsUpdate'])->name('LawsAndRegulationsUpdate');
    Route::delete('/Admin/LawsAndRegulations/{id}/delete', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsDelete'])->name('LawsAndRegulationsDelete');

    Route::get('/Admin/LawsAndRegulations/show/section/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsShowSection'])->name('LawsAndRegulationsShowSection');
    Route::post('/Admin/LawsAndRegulations/show/section/create/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsSectionCreate'])->name('LawsAndRegulationsSectionCreate');
    Route::put('/Admin/LawsAndRegulations/show/section/update/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsSectionUpdate'])->name('LawsAndRegulationsSectionUpdate');
    Route::delete('/Admin/LawsAndRegulations/show/section/delete/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsSectionDelete'])->name('LawsAndRegulationsSectionDelete');

    Route::get('/Admin/LawsAndRegulations/show/section/detail/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsShowDetails'])->name('LawsAndRegulationsShowDetails');
    Route::post('/Admin/LawsAndRegulations/show/section/detail/create/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsDetailCreate'])->name('LawsAndRegulationsDetailCreate');
    Route::delete('/Admin/LawsAndRegulations/show/section/detail/delete/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsDetailDelete'])->name('LawsAndRegulationsDetailDelete');

    //MenuForPublic
    Route::get('/Admin/MenuForPublic/page', [AdminMenuForPublicController::class, 'MenuForPublicType'])->name('MenuForPublicType');
    Route::post('/Admin/MenuForPublic/create/name', [AdminMenuForPublicController::class, 'MenuForPublicTypeCreate'])->name('MenuForPublicTypeCreate');
    Route::put('/Admin/MenuForPublic/{id}/update', [AdminMenuForPublicController::class, 'MenuForPublicUpdate'])->name('MenuForPublicUpdate');
    Route::delete('/Admin/MenuForPublic/{id}/delete', [AdminMenuForPublicController::class, 'MenuForPublicDelete'])->name('MenuForPublicDelete');

    Route::get('/Admin/MenuForPublic/show/section/{id}', [AdminMenuForPublicController::class, 'MenuForPublicShowSection'])->name('MenuForPublicShowSection');
    Route::post('/Admin/MenuForPublic/show/section/create/{id}', [AdminMenuForPublicController::class, 'MenuForPublicSectionCreate'])->name('MenuForPublicSectionCreate');
    Route::put('/Admin/MenuForPublic/show/section/update/{id}', [AdminMenuForPublicController::class, 'MenuForPublicSectionUpdate'])->name('MenuForPublicSectionUpdate');
    Route::delete('/Admin/MenuForPublic/show/section/delete/{id}', [AdminMenuForPublicController::class, 'MenuForPublicSectionDelete'])->name('MenuForPublicSectionDelete');

    Route::get('/Admin/MenuForPublic/show/section/detail/{id}', [AdminMenuForPublicController::class, 'MenuForPublicShowDetails'])->name('MenuForPublicShowDetails');
    Route::post('/Admin/MenuForPublic/show/section/detail/create/{id}', [AdminMenuForPublicController::class, 'MenuForPublicDetailCreate'])->name('MenuForPublicDetailCreate');
    Route::delete('/Admin/MenuForPublic/show/section/detail/delete/{id}', [AdminMenuForPublicController::class, 'MenuForPublicDetailDelete'])->name('MenuForPublicDetailDelete');
});

Route::get('/showLoginForm', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/showRegistrationForm', [AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');
