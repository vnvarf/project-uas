<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Models\Item;

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

Auth::routes();

Route::get('/', function () { return view('apps.home'); })->name('wel')->middleware('protect');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::prefix('apps')->group(function () {
    Route::resource('item', ItemController::class)->middleware('protect');
});
// routes/web.php

Route::post('/item/upload-image', [ItemController::class, 'uploadImage'])->name('item.upload-image');

Route::get('exportExcel', [ItemController::class, 'exportExcel'])->name('employees.exportExcel');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
