<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;;
use App\Http\Controllers\InquiryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [InquiryController::class, 'inquiry'])->name('inquiry');
Route::post('/confirm', [InquiryController::class, 'confirm'])->name('confirm');
Route::get('/thanks', [InquiryController::class, 'thanks'])->name('thanks');
Route::get('/fix/{id}', [InquiryController::class, 'fix'])->name('fix');
Route::post('/update', [InquiryController::class, 'update'])->name('update');
Route::get('/management', [InquiryController::class, 'management'])->name('management');
Route::post('/delete', [InquiryController::class, 'delete'])->name('delete');