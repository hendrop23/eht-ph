<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Voyager\CustomDataMasukController;

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
Route::get('/data-report', [DocumentController::class, 'showReport']);
Route::get('/api/report-data/{id}', [DocumentController::class, 'getReportData']);
Route::get('/data-masuk', [DocumentController::class, 'showDataMasuk']);
Route::get('/api/data-masuk', [DocumentController::class, 'getDataMasuk']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('data-masuks', [CustomDataMasukController::class, 'index'])->name('voyager.data-masuks.index');
});
