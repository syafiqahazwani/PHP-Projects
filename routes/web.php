<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('dashboard');
})->name('home');

// PDF
Route::get('/pdf', [PDFController::class, 'index'])->name('pdf.index');
Route::get('/pdf/create', [PDFController::class, 'create'])->name('pdf.create');
Route::post('/pdf', [PDFController::class, 'store'])->name('pdf.store');
Route::get('/download-pdf/{filename}', [PDFController::class, 'download'])->name('download.pdf');

// PICTURE
Route::get('/picture', [PictureController::class, 'index'])->name('picture.index');
Route::get('/picture/create', [PictureController::class, 'create'])->name('picture.create');
Route::post('/picture', [PictureController::class, 'store'])->name('picture.store');
Route::get('/download-picture/{filename}', [PictureController::class, 'download'])->name('download.picture');

// VIDEO
Route::get('/video', [VideoController::class, 'index'])->name('video.index');
Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
Route::post('/video', [VideoController::class, 'store'])->name('video.store');
Route::get('/download-video/{filename}', [VideoController::class, 'download'])->name('download.video');