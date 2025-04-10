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
use App\Http\Controllers\notice_board\NoticeBoardController;
use App\Http\Controllers\tourist_attractions\AdminTouristAttractionController;
use App\Http\Controllers\tourist_attractions\TouristAttractionController;
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
use App\Http\Controllers\ITA\AdminITAController;
use App\Http\Controllers\ITA\ITAController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\basic_information\history\AdminHistoryController;
use App\Http\Controllers\basic_information\history\HistoryController;
use App\Http\Controllers\basic_information\general_information\AdminGeneralInformationController;
use App\Http\Controllers\basic_information\general_information\GeneralInformationController;
use App\Http\Controllers\basic_information\community_products\AdminCommunityProductsController;
use App\Http\Controllers\basic_information\community_products\CommunityProductsController;
use App\Http\Controllers\basic_information\important_places\AdminImportantPlacesController;
use App\Http\Controllers\basic_information\important_places\ImportantPlacesController;
use App\Http\Controllers\basic_information\landscape_gallery\AdminLandscapeGalleryController;
use App\Http\Controllers\basic_information\landscape_gallery\LandscapeGalleryController;
use App\Http\Controllers\basic_information\community_information\AdminCommunityInformationController;
use App\Http\Controllers\basic_information\community_information\CommunityInformationController;
use App\Http\Controllers\message_from_pm\AdminMessageFromPMController;
use App\Http\Controllers\message_from_pm\MessageFromPMController;
use App\Http\Controllers\executive_intentions\AdminExecutiveIntentionsController;
use App\Http\Controllers\executive_intentions\ExecutiveIntentionsController;
use App\Http\Controllers\performance_evaluation\AdminPerformanceEvaluationController;
use App\Http\Controllers\performance_evaluation\PerformanceEvaluationController;
use App\Http\Controllers\learning_organization\AdminLearningOrganizationController;
use App\Http\Controllers\learning_organization\LearningOrganizationController;
use App\Http\Controllers\egp\AdminEGPController;
use App\Http\Controllers\egp\EGPController;
use App\Http\Controllers\eservice\secretariat_office\digging\DiggingController;
use App\Http\Controllers\forum\ForumController;
use App\Http\Controllers\web_intro\AdminWebIntroController;
use App\Http\Controllers\web_intro\WebIntroController;
use App\Http\Controllers\eservice\secretariat_office\general_requests\GeneralRequestsController;
use App\Http\Controllers\eservice\secretariat_office\general_requests\AdminGeneralRequestsController;
use App\Http\Controllers\eservice\secretariat_office\disability\DisabilityController;
use App\Http\Controllers\eservice\secretariat_office\disability\AdminDisabilityController;
use App\Http\Controllers\eservice\secretariat_office\elderly_allowance\ElderlyAllowanceController;
use App\Http\Controllers\eservice\secretariat_office\elderly_allowance\AdminElderlyAllowanceController;
use App\Http\Controllers\eservice\secretariat_office\health_hazard_applications\HealthHazardApplicationController;
use App\Http\Controllers\eservice\secretariat_office\health_hazard_applications\AdminHealthHazardApplicationController;
use App\Http\Controllers\eservice\secretariat_office\food_storage_license\FoodStorageLicenseController;
use App\Http\Controllers\eservice\secretariat_office\food_storage_license\AdminFoodStorageLicenseController;

use App\Http\Controllers\eservice\temporary\TemporaryController;

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

//คำร้องทั่วไป
Route::get('/general-requests', [GeneralRequestsController::class, 'GeneralRequestsFormPage'])->name('GeneralRequestsFormPage');
Route::post('/general-requests/form/create', [GeneralRequestsController::class, 'GeneralRequestsFormCreate'])->name('GeneralRequestsFormCreate');

//users disability
Route::get('/disability', [DisabilityController::class, 'DisabilityFormPage'])->name('DisabilityFormPage');
Route::post('/disability/form/create', [DisabilityController::class, 'DisabilityFormCreate'])->name('DisabilityFormCreate');

//แบบยืนยันสิทธิผู้สูงอายุ
Route::get('/elderly-allowance', [ElderlyAllowanceController::class, 'ElderlyAllowanceFormPage'])->name('ElderlyAllowanceFormPage');
Route::post('/elderly-allowance/form/create', [ElderlyAllowanceController::class, 'ElderlyAllowanceFormCreate'])->name('ElderlyAllowanceFormCreate');

//แบบคำร้องการขุดดินและถมดิน
Route::get('/digging', [DiggingController::class, 'DiggingFormPage'])->name('DiggingFormPage');
Route::post('/digging/form/create', [DiggingController::class, 'DiggingFormCreate'])->name('DiggingFormCreate');

//แบบคำร้องใบอณุญาตประกอบกิจการที่เป็นอันตรายต่อสุขภาพ
Route::get('/health_hazard_applications', [HealthHazardApplicationController::class, 'HealthHazardApplicationFormPage'])->name('HealthHazardApplicationFormPage');
Route::post('/health_hazard_applications/form/create', [HealthHazardApplicationController::class, 'HealthHazardApplicationFormCreate'])->name('HealthHazardApplicationFormCreate');

//แบบคำร้องใบอณุญาตประกอบกิจการที่เป็นอันตรายต่อสุขภาพ
Route::get('/health_hazard_applications', [HealthHazardApplicationController::class, 'HealthHazardApplicationFormPage'])->name('HealthHazardApplicationFormPage');
Route::post('/health_hazard_applications/form/create', [HealthHazardApplicationController::class, 'HealthHazardApplicationFormCreate'])->name('HealthHazardApplicationFormCreate');

//แบบคำร้องใบอณุญาตสะสมอาหาร
Route::get('/food_storage_license', [FoodStorageLicenseController::class, 'FoodStorageLicenseFormPage'])->name('FoodStorageLicenseFormPage');
Route::post('/food_storage_license/form/create', [FoodStorageLicenseController::class, 'FoodStorageLicenseFormCreate'])->name('FoodStorageLicenseFormCreate');


Route::get('/forum/page', [ForumController::class, 'forum_pages'])->name('forum_pages');
//eservice
Route::get('/e-service/page', [TemporaryController::class, 'eservice_pages'])->name('eservice_pages');
Route::get('/e-service/general_requests/page', [TemporaryController::class, 'general_requests_pages'])->name('general_requests_pages');
Route::get('/e-service/disability/page', [TemporaryController::class, 'disability_pages'])->name('disability_pages');
Route::get('/e-service/elderly_allowance/page', [TemporaryController::class, 'elderly_allowance_pages'])->name('elderly_allowance_pages');
Route::get('/e-service/receive_assistance/page', [TemporaryController::class, 'receive_assistance_pages'])->name('receive_assistance_pages');

Route::get('/e-service/child_development/page', [TemporaryController::class, 'child_development_pages'])->name('child_development_pages');
Route::get('/e-service/child_development/surrender/page', [TemporaryController::class, 'surrender_pages'])->name('surrender_pages');
Route::get('/e-service/child_development/register/page', [TemporaryController::class, 'register_pages'])->name('register_pages');

Route::get('/e-service/page/test1', [TemporaryController::class, 'test1'])->name('test1');
Route::get('/e-service/page/test2', [TemporaryController::class, 'test2'])->name('test2');
Route::get('/e-service/page/test3', [TemporaryController::class, 'test3'])->name('test3');
Route::get('/e-service/page/test4', [TemporaryController::class, 'test4'])->name('test4');
Route::get('/e-service/page/test5', [TemporaryController::class, 'test5'])->name('test5');
Route::get('/e-service/page/test6', [TemporaryController::class, 'test6'])->name('test6');
Route::get('/e-service/page/test7', [TemporaryController::class, 'test7'])->name('test7');
Route::get('/e-service/page/test8', [TemporaryController::class, 'test8'])->name('test8');
Route::get('/e-service/page/test9', [TemporaryController::class, 'test9'])->name('test9');
Route::get('/e-service/page/test10', [TemporaryController::class, 'test10'])->name('test10');

//รับเรื่องราวร้องทุกข์
Route::get('/ReceiveComplaints/form', [TemporaryController::class, 'ReceiveComplaintsForm'])->name('ReceiveComplaintsForm');

//รับแจ้งร้องเรียนทุจริตประพฤติมิชอบ
Route::get('/Satisfaction/form', [TemporaryController::class, 'SatisfactionForm'])->name('SatisfactionForm');

Route::get('/', [WebIntroController::class, 'WebIntroPage'])->name('WebIntroPage');
Route::get('/home', [HomePageController::class, 'Home'])->name('Home');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');

//ข้อมูลพื้นฐาน
Route::get('/history/page', [HistoryController::class, 'HistoryPage'])->name('HistoryPage');
Route::get('/general_information/page', [GeneralInformationController::class, 'GeneralInformationPage'])->name('GeneralInformationPage');
Route::get('/landscape_gallery/page', [LandscapeGalleryController::class, 'LandscapeGalleryPage'])->name('LandscapeGalleryPage');
Route::get('/CommunityProducts/page', [CommunityProductsController::class, 'CommunityProductsPage'])->name('CommunityProductsPage');
Route::get('/CommunityProducts/showdetails/index/{id}', [CommunityProductsController::class, 'ShowDetails'])->name('ShowDetails');
Route::get('/ImportantPlaces/page', [ImportantPlacesController::class, 'ImportantPlacesPage'])->name('ImportantPlacesPage');
Route::get('/ImportantPlaces/showdetails/index/{id}', [ImportantPlacesController::class, 'ImportantPlacesShowDetails'])->name('ImportantPlacesShowDetails');
Route::get('/community_information/page', [CommunityInformationController::class, 'CommunityPage'])->name('CommunityPage');

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

//ita
Route::get('/ita/page', [ITAController::class, 'itaPage'])->name('itaPage');

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

//EGP
Route::get('/EGP/detail/{id}', [EGPController::class, 'EGPDetail'])->name('EGPDetail');
Route::get('/EGP/ShowData', [EGPController::class, 'EGPShowData'])->name('EGPShowData');

//ป้ายประกาศ
Route::get('/NoticeBoard/ShowData', [NoticeBoardController::class, 'NoticeBoardShowData'])->name('NoticeBoardShowData');
Route::get('/NoticeBoard/ShowDetails/{id}', [NoticeBoardController::class, 'NoticeBoardShowDetails'])->name('NoticeBoardShowDetails');

//สารจากนายก
Route::get('/message_from_pm/page', [MessageFromPMController::class, 'MessageFromPMPage'])->name('MessageFromPMPage');

//เจตจำนงสุจริตของผู้บริหาร
Route::get('/executive_intentions/page', [ExecutiveIntentionsController::class, 'ExecutiveIntentionsPage'])->name('ExecutiveIntentionsPage');

//LPA
Route::get('/performance_evaluation/ShowData', [PerformanceEvaluationController::class, 'PerformanceEvaluationPage'])->name('PerformanceEvaluationPage');
Route::get('/performance_evaluation/ShowDetails/{id}', [PerformanceEvaluationController::class, 'PerformanceEvaluationShowDetails'])->name('PerformanceEvaluationShowDetails');

//KM
Route::get('/learning_organization/ShowData', [LearningOrganizationController::class, 'LearningOrganizationPage'])->name('LearningOrganizationPage');
Route::get('/learning_organization/ShowDetails/{id}', [LearningOrganizationController::class, 'LearningOrganizationShowDetails'])->name('LearningOrganizationShowDetails');

//แนะนำสถานที่ท่องเที่ยว
Route::get('/tourist_attraction/ShowData', [TouristAttractionController::class, 'TouristAttractionShowData'])->name('TouristAttractionShowData');
Route::get('/tourist_attraction/ShowDetails/{id}', [TouristAttractionController::class, 'TouristAttractionShowDetails'])->name('TouristAttractionShowDetails');


Route::get('/Bannser/Pages', [HomePageController::class, 'BannserPages'])->name('BannserPages');

Route::middleware(['auth', 'check.auth:1'])->group(function () {
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

    //ITA
    Route::get('/Admin/ITA/type/page', [AdminITAController::class, 'AdminITAType'])->name('AdminITAType');
    Route::post('/Admin/ITA/type/create', [AdminITAController::class, 'ITATypeCreate'])->name('ITATypeCreate');
    Route::put('/Admin/ITA/type/update/{id}', [AdminITAController::class, 'ITATypeUpdate'])->name('ITATypeUpdate');
    Route::delete('/Admin/ITA/type/delete/{id}', [AdminITAController::class, 'ITATypeDelete'])->name('ITATypeDelete');

    Route::get('/Admin/ITA/type/detail/page/{id}', [AdminITAController::class, 'AdminITA'])->name('AdminITA');
    Route::post('/Admin/ITA/create/{id}', [AdminITAController::class, 'ITACreate'])->name('ITACreate');
    Route::put('/Admin/ITA/update/{id}', [AdminITAController::class, 'ITAUpdate'])->name('ITAUpdate');
    Route::delete('/Admin/ITA/delete/{id}', [AdminITAController::class, 'ITADelete'])->name('ITADelete');
    Route::delete('iTALink/{id}', [AdminITAController::class, 'destroy'])->name('ITAlink.destroy');

    //History
    Route::get('/Admin/History/page', [AdminHistoryController::class, 'HistoryAdmin'])->name('HistoryAdmin');
    Route::post('/Admin/History/create', [AdminHistoryController::class, 'HistoryCreate'])->name('HistoryCreate');
    Route::delete('/Admin/History/delete/{id}', [AdminHistoryController::class, 'HistoryDelete'])->name('HistoryDelete');

    //Community
    Route::get('/Admin/CommunityInformation/page', [AdminCommunityInformationController::class, 'CommunityAdmin'])->name('CommunityAdmin');
    Route::post('/Admin/CommunityInformation/create', [AdminCommunityInformationController::class, 'CommunityCreate'])->name('CommunityCreate');
    Route::delete('/Admin/CommunityInformation/delete/{id}', [AdminCommunityInformationController::class, 'CommunityDelete'])->name('CommunityDelete');

    //LandscapeGallery
    Route::get('/Admin/LandscapeGallery/page', [AdminLandscapeGalleryController::class, 'LandscapeGalleryAdmin'])->name('LandscapeGalleryAdmin');
    Route::post('/Admin/LandscapeGallery/create', [AdminLandscapeGalleryController::class, 'LandscapeGalleryCreate'])->name('LandscapeGalleryCreate');
    Route::delete('/Admin/LandscapeGallery/delete/{id}', [AdminLandscapeGalleryController::class, 'LandscapeGalleryDelete'])->name('LandscapeGalleryDelete');

    //GeneralInformation
    Route::get('/Admin/GeneralInformation/page', [AdminGeneralInformationController::class, 'GeneralInformationAdmin'])->name('GeneralInformationAdmin');
    Route::post('/Admin/GeneralInformation/create', [AdminGeneralInformationController::class, 'GeneralInformationCreate'])->name('GeneralInformationCreate');
    Route::delete('/Admin/GeneralInformation/delete/{id}', [AdminGeneralInformationController::class, 'GeneralInformationDelete'])->name('GeneralInformationDelete');

    //CommunityProducts
    Route::get('/Admin/CommunityProducts/page', [AdminCommunityProductsController::class, 'CommunityProductsAdmin'])->name('CommunityProductsAdmin');
    Route::post('/Admin/CommunityProducts/create/name', [AdminCommunityProductsController::class, 'CommunityProductsNameCreate'])->name('CommunityProductsNameCreate');
    Route::delete('/Admin/CommunityProducts/{id}/delete', [AdminCommunityProductsController::class, 'CommunityProductDelete'])->name('CommunityProductDelete');
    Route::post('/Admin/CommunityProducts/{id}/update', [AdminCommunityProductsController::class, 'CommunityProductsNameUpdate'])->name('CommunityProductsNameUpdate');
    Route::get('/Admin/CommunityProducts/show/details/{id}', [AdminCommunityProductsController::class, 'CommunityProductShowDertails'])->name('CommunityProductShowDertails');
    Route::post('/Admin/CommunityProducts/show/details/{id}/create', [AdminCommunityProductsController::class, 'CommunityProductDertailsCreate'])->name('CommunityProductDertailsCreate');
    Route::delete('/Admin/CommunityProducts/show/details/{id}/delete', [AdminCommunityProductsController::class, 'CommunityProductDetailsDelete'])->name('CommunityProductDetailsDelete');

    //ImportantPlaces
    Route::get('/Admin/ImportantPlaces/page', [AdminImportantPlacesController::class, 'ImportantPlacesAdmin'])->name('ImportantPlacesAdmin');
    Route::post('/Admin/ImportantPlaces/create/name', [AdminImportantPlacesController::class, 'ImportantPlacesNameCreate'])->name('ImportantPlacesNameCreate');
    Route::delete('/Admin/ImportantPlaces/{id}/delete', [AdminImportantPlacesController::class, 'ImportantPlacesDelete'])->name('ImportantPlacesDelete');
    Route::post('/Admin/ImportantPlaces/{id}/update', [AdminImportantPlacesController::class, 'ImportantPlacesNameUpdate'])->name('ImportantPlacesNameUpdate');
    Route::get('/Admin/ImportantPlaces/show/details/{id}', [AdminImportantPlacesController::class, 'ImportantPlacesShowDertails'])->name('ImportantPlacesShowDertails');
    Route::post('/Admin/ImportantPlaces/show/details/{id}/create', [AdminImportantPlacesController::class, 'ImportantPlacesDertailsCreate'])->name('ImportantPlacesDertailsCreate');
    Route::delete('/Admin/ImportantPlaces/show/details/{id}/delete', [AdminImportantPlacesController::class, 'ImportantPlacesDetailsDelete'])->name('ImportantPlacesDetailsDelete');

    //OrgStructure
    Route::get('/OrgStructure/page', [AdminPersonnelController::class, 'OrgStructureAdmin'])->name('OrgStructureAdmin');
    Route::post('/OrgStructure/create', [AdminPersonnelController::class, 'OrgStructureCreate'])->name('OrgStructureCreate');
    Route::delete('/OrgStructure/delete/{id}', [AdminPersonnelController::class, 'OrgStructureDelete'])->name('OrgStructureDelete');

    //MessageFromPM
    Route::get('/Admin/MessageFromPM/page', [AdminMessageFromPMController::class, 'MessageFromPMAdmin'])->name('MessageFromPMAdmin');
    Route::post('/Admin/MessageFromPM/create', [AdminMessageFromPMController::class, 'MessageFromPMCreate'])->name('MessageFromPMCreate');
    Route::delete('/Admin/MessageFromPM/delete/{id}', [AdminMessageFromPMController::class, 'MessageFromPMDelete'])->name('MessageFromPMDelete');

    //ExecutiveIntentions
    Route::get('/Admin/ExecutiveIntentions/page', [AdminExecutiveIntentionsController::class, 'ExecutiveIntentionsAdmin'])->name('ExecutiveIntentionsAdmin');
    Route::post('/Admin/ExecutiveIntentions/create', [AdminExecutiveIntentionsController::class, 'ExecutiveIntentionsCreate'])->name('ExecutiveIntentionsCreate');
    Route::delete('/Admin/ExecutiveIntentions/delete/{id}', [AdminExecutiveIntentionsController::class, 'ExecutiveIntentionsDelete'])->name('ExecutiveIntentionsDelete');

    //PerformanceEvaluation
    Route::get('/Admin/performance_evaluation/page', [AdminPerformanceEvaluationController::class, 'PerformanceEvaluationAdmin'])->name('PerformanceEvaluationAdmin');
    Route::post('/Admin/performance_evaluation/create/name', [AdminPerformanceEvaluationController::class, 'PerformanceEvaluationNameCreate'])->name('PerformanceEvaluationNameCreate');
    Route::delete('/Admin/performance_evaluation/{id}/delete', [AdminPerformanceEvaluationController::class, 'PerformanceEvaluationNameDelete'])->name('PerformanceEvaluationNameDelete');
    Route::post('/Admin/performance_evaluation/{id}/update', [AdminPerformanceEvaluationController::class, 'PerformanceEvaluationNameUpdate'])->name('PerformanceEvaluationNameUpdate');
    Route::get('/Admin/performance_evaluation/show/details/{id}', [AdminPerformanceEvaluationController::class, 'PerformanceEvaluationShowDertails'])->name('PerformanceEvaluationShowDertails');
    Route::post('/Admin/performance_evaluation/show/details/{id}/create', [AdminPerformanceEvaluationController::class, 'PerformanceEvaluationDetailsCreate'])->name('PerformanceEvaluationDetailsCreate');
    Route::delete('/Admin/performance_evaluation/show/details/{id}/delete', [AdminPerformanceEvaluationController::class, 'PerformanceEvaluationDetailsDelete'])->name('PerformanceEvaluationDetailsDelete');

    //LearningOrganization
    Route::get('/Admin/learning_organization/page', [AdminLearningOrganizationController::class, 'LearningOrganizationAdmin'])->name('LearningOrganizationAdmin');
    Route::post('/Admin/learning_organization/create/name', [AdminLearningOrganizationController::class, 'LearningOrganizationNameCreate'])->name('LearningOrganizationNameCreate');
    Route::delete('/Admin/learning_organization/{id}/delete', [AdminLearningOrganizationController::class, 'LearningOrganizationNameDelete'])->name('LearningOrganizationNameDelete');
    Route::post('/Admin/learning_organization/{id}/update', [AdminLearningOrganizationController::class, 'LearningOrganizationNameUpdate'])->name('LearningOrganizationNameUpdate');
    Route::get('/Admin/learning_organization/show/details/{id}', [AdminLearningOrganizationController::class, 'LearningOrganizationShowDertails'])->name('LearningOrganizationShowDertails');
    Route::post('/Admin/learning_organization/show/details/{id}/create', [AdminLearningOrganizationController::class, 'LearningOrganizationDetailsCreate'])->name('LearningOrganizationDetailsCreate');
    Route::delete('/Admin/learning_organization/show/details/{id}/delete', [AdminLearningOrganizationController::class, 'LearningOrganizationDetailsDelete'])->name('LearningOrganizationDetailsDelete');

    //admin egp
    Route::get('/egp/page', [AdminEGPController::class, 'EGPHome'])->name('EGPHome');
    Route::post('/egp/create', [AdminEGPController::class, 'EGPCreate'])->name('EGPCreate');
    Route::delete('/egp/delete{id}', [AdminEGPController::class, 'EGPDelete'])->name('EGPDelete');
    Route::put('/egp/update/{id}', [AdminEGPController::class, 'EGPUpdate'])->name('EGPUpdate');

    //WebIntro
    Route::get('/Admin/WebIntro/page', [AdminWebIntroController::class, 'AdminWebIntro'])->name('AdminWebIntro');
    Route::post('/Admin/WebIntro/create', [AdminWebIntroController::class, 'WebIntroCreate'])->name('WebIntroCreate');
    Route::delete('/Admin/WebIntro/delete/{id}', [AdminWebIntroController::class, 'WebIntroDelete'])->name('WebIntroDelete');
});

Route::middleware(['auth', 'check.auth:2'])->group(function () {
    Route::get('/admin/index', [TemporaryController::class, 'EserviceAdminAccount'])->name('EserviceAdminAccount');

    //คำร้องทั่วไป
    Route::get('/admin/general-requests/showdata', [AdminGeneralRequestsController::class, 'GeneralRequestsAdminShowData'])->name('GeneralRequestsAdminShowData');
    Route::get('/admin/general-requests/export-pdf/{id}', [AdminGeneralRequestsController::class, 'GeneralRequestsAdminExportPDF'])->name('GeneralRequestsAdminExportPDF');
    Route::post('/admin/general-requests/admin-reply/{id}', [AdminGeneralRequestsController::class, 'GeneralRequestsAdminReply'])->name('GeneralRequestsAdminReply');
    Route::post('/admin/general-requests/update-status/{id}', [AdminGeneralRequestsController::class, 'GeneralRequestsUpdateStatus'])->name('GeneralRequestsUpdateStatus');

    //แบบคำขอลงทะเบียนรับเงินเบี้ยความพิการ
    Route::get('/admin/disability/showdata', [AdminDisabilityController::class, 'DisabilityAdminShowData'])->name('DisabilityAdminShowData');
    Route::get('/admin/disability/export-pdf/{id}', [AdminDisabilityController::class, 'DisabilityExportPDF'])->name('DisabilityExportPDF');
    Route::post('/admin/disability/admin-reply/{id}', [AdminDisabilityController::class, 'DisabilityAdminReply'])->name('DisabilityAdminReply');
    Route::post('/admin/disability/update-status/{id}', [AdminDisabilityController::class, 'DisabilityUpdateStatus'])->name('DisabilityUpdateStatus');

    //แบบยืนยันสิทธิผู้สูงอายุ
    Route::get('/admin/elderly-allowance/showdata', [AdminElderlyAllowanceController::class, 'ElderlyAllowanceAdminShowData'])->name('ElderlyAllowanceAdminShowData');
    Route::get('/admin/elderly-allowance/export-pdf/{id}', [AdminElderlyAllowanceController::class, 'ElderlyAllowanceAdminExportPDF'])->name('ElderlyAllowanceAdminExportPDF');
    Route::post('/admin/elderly-allowance/admin-reply/{id}', [AdminElderlyAllowanceController::class, 'ElderlyAllowanceAdminReply'])->name('ElderlyAllowanceAdminReply');
    Route::post('/admin/elderly-allowance/update-status/{id}', [AdminElderlyAllowanceController::class, 'ElderlyAllowanceUpdateStatus'])->name('ElderlyAllowanceUpdateStatus');

    //แบบคำร้องใบอณุญาตประกอบกิจการที่เป็นอันตรายต่อสุขภาพ
    Route::get('/admin/health_hazard_applications/show-details', [AdminHealthHazardApplicationController::class, 'HealthHazardApplicationAdminShowData'])->name('HealthHazardApplicationAdminShowData');
    Route::get('/admin/health_hazard_applications/export-pdf/{id}', [AdminHealthHazardApplicationController::class, 'HealthHazardApplicationAdminExportPDF'])->name('HealthHazardApplicationAdminExportPDF');
    Route::post('/admin/health_hazard_applications/reply/{id}', [AdminHealthHazardApplicationController::class, 'HealthHazardApplicationAdminReply'])->name('HealthHazardApplicationAdminReply');
    Route::post('/admin/health_hazard_applications/update-status/{id}', [AdminHealthHazardApplicationController::class, 'HealthHazardApplicationUpdateStatus'])->name('HealthHazardApplicationUpdateStatus');

    //คำร้องขอแจ้งจำหน่ายหรือสะสมอาหาร
    Route::get('/admin/food_storage_license/show-details', [AdminFoodStorageLicenseController::class, 'FoodStorageLicenseShowData'])->name('FoodStorageLicenseShowData');
    Route::get('/admin/food_storage_license/export-pdf/{id}', [AdminFoodStorageLicenseController::class, 'FoodStorageLicenseAdminExportPDF'])->name('FoodStorageLicenseAdminExportPDF');
    Route::post('/admin/food_storage_license/reply/{id}', [AdminFoodStorageLicenseController::class, 'FoodStorageLicenseAdminReply'])->name('FoodStorageLicenseAdminReply');
    Route::post('/admin/food_storage_license/update-status/{id}', [AdminFoodStorageLicenseController::class, 'FoodStorageLicenseUpdateStatus'])->name('FoodStorageLicenseUpdateStatus');
});

Route::middleware(['auth', 'check.auth:3'])->group(function () {
    Route::get('/eservice-useraccount', [TemporaryController::class, 'EserviceUserAccount'])->name('EserviceUserAccount');

    //คำร้องทั่วไป
    Route::get('/user-account/general-requests/show-details', [GeneralRequestsController::class, 'GeneralRequestsShowDetails'])->name('GeneralRequestsShowDetails');
    Route::get('/user-account/general-requests/export-pdf/{id}', [GeneralRequestsController::class, 'GeneralRequestsUserExportPDF'])->name('GeneralRequestsUserExportPDF');
    Route::post('/user-account/general-requests/reply/{id}', [GeneralRequestsController::class, 'GeneralRequestsUserReply'])->name('GeneralRequestsUserReply');
    Route::get('/user-account/general-requests/show-edit/{id}', [GeneralRequestsController::class, 'GeneralRequestsUserShowFormEdit'])->name('GeneralRequestsUserShowFormEdit');
    Route::put('/user-account/general-requests/update-data/{id}', [GeneralRequestsController::class, 'GeneralRequestsUserUpdateForm'])->name('GeneralRequestsUserUpdateForm');

    //แบบคำขอลงทะเบียนรับเงินเบี้ยความพิการ
    Route::get('/user/account/Disability/record', [DisabilityController::class, 'TableDisabilityUsersPages'])->name('TableDisabilityUsersPages');
    Route::get('/user/account/Disability/{id}/edit', [DisabilityController::class, 'DisabilityUserShowEdit'])->name('DisabilityUserShowEdit');
    Route::put('/user/account/Disability/{id}/Update', [DisabilityController::class, 'DisabilityUserFormUpdate'])->name('DisabilityUserFormUpdate');
    Route::get('/user/account/Disability/{id}/pdf', [DisabilityController::class, 'DisabilityUserExportPDF'])->name('DisabilityUserExportPDF');
    Route::post('/user/account/Disability/{form}/reply', [DisabilityController::class, 'DisabilityUserReply'])->name('DisabilityUserReply');

    //แบบยืนยันสิทธิผู้สูงอายุ
    Route::get('/user-account/elderly-allowance/show-details', [ElderlyAllowanceController::class, 'ElderlyAllowanceShowDetails'])->name('ElderlyAllowanceShowDetails');
    Route::get('/user-account/elderly-allowance/export-pdf/{id}', [ElderlyAllowanceController::class, 'ElderlyAllowanceUserExportPDF'])->name('ElderlyAllowanceUserExportPDF');
    Route::post('/user-account/elderly-allowance/reply/{id}', [ElderlyAllowanceController::class, 'ElderlyAllowanceUserReply'])->name('ElderlyAllowanceUserReply');
    Route::get('/user-account/elderly-allowance/show-edit/{id}', [ElderlyAllowanceController::class, 'ElderlyAllowanceUserShowEdit'])->name('ElderlyAllowanceUserShowEdit');
    Route::put('/user-account/elderly-allowance/update-data/{id}', [ElderlyAllowanceController::class, 'ElderlyAllowanceUserUpdateForm'])->name('ElderlyAllowanceUserUpdateForm');

    //แบบคำร้องใบอณุญาตประกอบกิจการที่เป็นอันตรายต่อสุขภาพ
    Route::get('/user-account/health_hazard_applications/show-details', [HealthHazardApplicationController::class, 'HealthHazardApplicationShowDetails'])->name('HealthHazardApplicationShowDetails');
    Route::get('/user-account/health_hazard_applications/export-pdf/{id}', [HealthHazardApplicationController::class, 'HealthHazardApplicationUserExportPDF'])->name('HealthHazardApplicationUserExportPDF');
    Route::post('/user-account/health_hazard_applications/reply/{id}', [HealthHazardApplicationController::class, 'HealthHazardApplicationUserReply'])->name('HealthHazardApplicationUserReply');
    Route::get('/user-account/health_hazard_applications/show-edit/{id}', [HealthHazardApplicationController::class, 'HealthHazardApplicationUserShowFormEdit'])->name('HealthHazardApplicationUserShowFormEdit');

    //แบบคำร้องใบอณุญาตสะสมอาหาร
    Route::get('/user-account/food_storage_license/show-details', [FoodStorageLicenseController::class, 'FoodStorageLicenseShowDetails'])->name('FoodStorageLicenseShowDetails');
    Route::get('/user-account/food_storage_license/export-pdf/{id}', [FoodStorageLicenseController::class, 'FoodStorageLicenseUserExportPDF'])->name('FoodStorageLicenseUserExportPDF');
    Route::post('/user-account/food_storage_license/reply/{id}', [FoodStorageLicenseController::class, 'FoodStorageLicenseUserReply'])->name('FoodStorageLicenseUserReply');
    Route::get('/user-account/food_storage_license/show-edit/{id}', [FoodStorageLicenseController::class, 'FoodStorageLicenseUserShowFormEdit'])->name('FoodStorageLicenseUserShowFormEdit');
    
    //แบบคำร้องการขุดดินและถมดิน
    Route::get('/user-account/digging/show-details', [DiggingController::class, 'DiggingShowDetails'])->name('DiggingShowDetails');
    Route::post('/user-account/digging/reply/{id}', [DiggingController::class, 'DiggingUserReply'])->name('DiggingUserReply');
    Route::get('/user-account/digging/show-edit/{id}', [DiggingController::class, 'DiggingUserShowEdit'])->name('DiggingUserShowEdit');
});

Route::get('/showLoginForm', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/showRegistrationForm', [AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout/user-account', [AuthController::class, 'logoutUserAccount'])->name('logoutUserAccount');
