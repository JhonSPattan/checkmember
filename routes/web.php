<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Database2Controller;
use App\Http\Controllers\MemberinputController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mem',[Database2Controller::class,'getAllMembers'])->name('allmem');
// Route::get('/checkin',[MemberinputController::class,'memberCheckin']);




// Search auto complete
Route::get('/api/memsearch',[Database2Controller::class,'findMemberlikeId'])->name('apimemsearch');

//render view for submit
Route::get('/memsearchcheckin',[MemberinputController::class,'memberSearchCheckin']);


// for checkin
Route::post('/checkinpost',[MemberinputController::class,'memberSaveCheckin']);
