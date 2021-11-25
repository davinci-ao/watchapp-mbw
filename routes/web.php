<?php

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvide;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware' => ['auth', 'verified'] ], function() {


    Route::get('/notificationPage', [App\Http\Controllers\NotificationController::class, 'notificationButton'])->name('NotificationButton');
    Route::post('/notificationPage', [App\Http\Controllers\NotificationController::class, 'SendingNotification'])->name('SendingNotification');


});


require __DIR__.'/auth.php';
