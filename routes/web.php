<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\activity\AdminActivityController;
use App\Http\Controllers\press_release\AdminPressReleaseController;
use App\Http\Controllers\procurement\AdminProcurementController;
use App\Http\Controllers\procurement_results\AdminProcurementResultsController;
use App\Http\Controllers\average_price\AdminAveragePriceController;
use App\Http\Controllers\procurement_report\AdminProcurementReportController;
use App\Http\Controllers\notice_board\AdminNoticeBoardController;
use App\Http\Controllers\tourist_attractions\AdminTouristAttractionController;
use App\Http\Controllers\awards_of_pride\AdminAwardsofPrideController;

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

// Route::get('/', function () {
//     return view('pages.home.app');
// });

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
});

Route::get('/', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('Login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/showRegistrationForm', [AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');
