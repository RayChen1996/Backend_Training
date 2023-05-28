<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
// use PDO;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AttendController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DepController;
use App\Http\Controllers\WorkTimeController;
use App\Http\Controllers\UAController;
use App\Http\Controllers\SysParamController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\RealMonitorController;
 
use App\Http\Controllers\PollingController;
use App\Http\Controllers\OverTimeController;
use App\Http\Controllers\MailReportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LimitController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\GroupController;
 
use App\Http\Controllers\DataConvertController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\AutoUpdateTimeController;
use App\Http\Controllers\AutoUpdateCardController;
use App\Http\Controllers\AutoSendTimeController;
use App\Http\Controllers\AutoSendCardController;
use App\Http\Controllers\AutoRecvController;
use App\Http\Controllers\AutoDataConvController;
use App\Http\Controllers\AttrndRecordController;
 
use App\Http\Controllers\AbsenceItemController;
use App\Http\Controllers\AbsenceController;
use App\Http\Middleware\AuthenticatedMiddleware;



Route::resource("/Readers", ReaderController::class);

 
Route::get('/', function () {
    return view('main');
})->middleware(AuthenticatedMiddleware::class);


Route::get('/', function () {
    return view('main');
});
//首頁
Route::view('/index','layouts/application');
//讀卡機
Route::get('Reader', [ReaderController::class, 'index'])->name('root');
Route::get('Permission', [PermissionController::class, 'index'])->name('root');
//歷史紀錄頁
Route::get('History', [HistoryController::class, 'index'])->name('root');
 

Route::get('Users', [UsersController::class, 'index'])->name('root');
Route::get('Dep', [DepController::class, 'index'])->name('root');



Route::get('Group', [GroupController::class, 'index'])->name('root');
Route::get('HistoryReport', [DepController::class, 'index'])->name('root');
Route::get('HistoryDelete', [DepController::class, 'index'])->name('root');

Route::get('ConvertFormat', [DepController::class, 'index'])->name('root');
Route::get('ConvSetting', [DepController::class, 'index'])->name('root');
Route::get('AutoConvSetting', [DepController::class, 'index'])->name('root');

Route::get('WorkTime', [WorkTimeController::class, 'index'])->name('root');
Route::get('Holiday', [HolidayController::class, 'index'])->name('root');
Route::get('Absence', [AbsenceController::class, 'index'])->name('root');
Route::get('AttendRecord', [AttrndRecordController::class, 'index'])->name('root');
Route::get('AttendReport', [AttendController::class, 'index'])->name('root');
Route::get('RealMonitor', [RealMonitorController::class, 'index'])->name('root');
Route::get('Polling', [PollingController::class, 'index'])->name('root');


Route::get('MailReport', [MailReportController::class, 'index'])->name('root');
Route::get('AutoWriteTime', [AutoUpdateTimeController::class, 'index'])->name('root');
Route::get('AutoUpdatCard', [AutoUpdateCardController::class, 'index'])->name('root');
Route::get('AutoRecv', [AutoRecvController::class, 'index'])->name('root');
Route::get('DataBackup', [DepController::class, 'index'])->name('root');
Route::get('SystemParam', [SysParamController::class, 'index'])->name('root');

Route::get('Login', [LoginController::class, 'index'])->name('root');


Route::get('/info',function(){
    return view('info');
});


