<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;


use App\Http\Controllers\DepController;
use App\Http\Controllers\ReaderController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

 


/**
 * @OA\Get(
 *     path="/gethistory",
 *     summary="Get history list",
 *     tags={"History"},
 *     @OA\Response(response="200", description="Success"),
 *     @OA\Response(response="401", description="Unauthorized")
 * )
 */
Route::get('gethistory', 'App\Http\Controllers\HistoryController@GetList');
 
Route::get('gethistoryFromReaderIdx', 'App\Http\Controllers\HistoryController@GetHistoryList/{ReaderIdx}');


 
// Route::get('AllUsersCount', 'App\Http\Controllers\UsersController@AllUserCount');
 
// Route::get('AllUserfromPage', 'App\Http\Controllers\UsersController@AllUserfromPage/{page}');
 
// Route::get('AllUsers', 'App\Http\Controllers\UsersController@GetUser');
 
// Route::get('AllUsersInfo', 'App\Http\Controllers\UsersController@GetUserInfo/{userId}');
 
// Route::get('FirstUsers', 'App\Http\Controllers\UsersController@GetFirstUser');
 
// Route::get('LastUsers', 'App\Http\Controllers\UsersController@GetLastUser');


 
// Route::prefix('dep')->group(function () {
//     // Delete
//     Route::delete('delete', 'DepController@delete')->name('dep.delete');
    
//     // Insert
//     Route::post('store', 'App\Http\Controllers\DepController@store')->name('dep.store');
    
//     // Update
//     Route::put('update/{DepNo}', 'DepController@update')->name('dep.update');

//     Route::get('select', 'App\Http\Controllers\DepController@showDep')->name('dep.showDep');
// });

 
// Route::get('/blob-data/{id}', [ReaderController::class, 'getBlobData']);
 
 
// Route::get('Groups', 'App\Http\Controllers\GroupController@index');