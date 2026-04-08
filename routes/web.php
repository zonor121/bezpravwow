<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reports', [ReportController::class, 'index'])
    ->name('reports.index');

Route::get('/reports/create', function () {
    return view('reports.create');
})->name('reports.create');

route::delete('/reports/{report}', [ReportController::class,'destroy']) 
-> name('reports.delete');