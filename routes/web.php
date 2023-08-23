<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;

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
//Before Click Save
Route::get('/', [QRCodeController::class, 'index']);
Route::post('/save-data', [QRCodeController::class, 'saveData']);

//After Click Save
Route::get('/qrcode/generate', [QRCodeController::class,'generateQRCode'])->name('qrcode.show');
Route::get('/qrcode/save', [QRCodeController::class,'saveQRCodeData'])->name('qrcode.save');
Route::get('/qrcode/show/', [QRCodeController::class,'showQRCode']);
