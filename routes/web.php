<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OverallController;
use App\Http\Controllers\DigimonController;
use App\Http\Controllers\Digimon02Controller;
use App\Http\Controllers\DigimonTamersController;
use App\Http\Controllers\DigimonFrontierController;
use App\Http\Controllers\DigimonSaversController;
use App\Http\Controllers\DigimonXrosWarsController;

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

Route::get('/dashboard', function () {
    return view('Backend_Studio.User_Page.dashboard_page');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Backend User Page
Route::middleware(['auth'])->group(function () {

    Route::controller(UserController::class)->group(function(){
        Route::get('/user/logout', 'UserLogout')->name('user.logout');
        Route::get('/user/dashboard', 'UserDashboard')->name('user.dashboard');
        Route::get('/user/profile', 'UserProfile')->name('user.profile');
    });
});

//Overall 
Route::controller(OverallController::class)->group(function () {
    Route::get('/dashboard','OverallPage')->name('overall.page');
    Route::get('/overall/add','OverallAdd')->name('overall.add');
    Route::post('/overall/store','OverallStore')->name('overall.store');
    Route::get('/overall/show/{id}','OverallShow')->name('overall.show');
    Route::get('/overall/edit/{id}','OverallEdit')->name('overall.edit');
    Route::post('/overall/update','OverallUpdate')->name('overall.update');
    Route::delete('/overall/delete/{id}','OverallDelete')->name('overall.delete');
});

//Digimon
Route::controller(DigimonController::class)->group(function () {
    Route::get('/digimon/page','index')->name('digimon.page');
    Route::get('/digimon/add','create')->name('digimon.add');
    Route::post('/digimon/store','store')->name('digimon.store');
    Route::get('/digimon/show/{id}','show')->name('digimon.show');
    Route::get('/digimon/edit/{id}','edit')->name('digimon.edit');
    Route::post('/digimon/update','update')->name('digimon.update');
    Route::delete('/digimon/delete/{id}','destroy')->name('digimon.delete');
});

//Digimon 02
Route::controller(Digimon02Controller::class)->group(function () {
    Route::get('/digimon02/page','index')->name('digimon02.page');
    Route::get('/digimon02/add','create')->name('digimon02.add');
    Route::post('/digimon02/store','store')->name('digimon02.store');
    Route::get('/digimon02/show/{id}','show')->name('digimon02.show');
    Route::get('/digimon02/edit/{id}','edit')->name('digimon02.edit');
    Route::post('/digimon02/update','update')->name('digimon02.update');
    Route::delete('/digimon02/delete/{id}','destroy')->name('digimon02.delete');
});

//Digimon Tamers
Route::controller(DigimonTamersController::class)->group(function () {
    Route::get('/digimontamers/page','index')->name('digimontamers.page');
    Route::get('/digimontamers/add','create')->name('digimontamers.add');
    Route::post('/digimontamers/store','store')->name('digimontamers.store');
    Route::get('/digimontamers/show/{id}','show')->name('digimontamers.show');
    Route::get('/digimontamers/edit/{id}','edit')->name('digimontamers.edit');
    Route::post('/digimontamers/update','update')->name('digimontamers.update');
    Route::delete('/digimontamers/delete/{id}','destroy')->name('digimontamers.delete');
});

//Digimon Frontier
Route::controller(DigimonFrontierController::class)->group(function () {
    Route::get('/digimonfrontier/page','index')->name('digimonfrontier.page');
    Route::get('/digimonfrontier/add','create')->name('digimonfrontier.add');
    Route::post('/digimonfrontier/store','store')->name('digimonfrontier.store');
    Route::get('/digimonfrontier/show/{id}','show')->name('digimonfrontier.show');
    Route::get('/digimonfrontier/edit/{id}','edit')->name('digimonfrontier.edit');
    Route::post('/digimonfrontier/update','update')->name('digimonfrontier.update');
    Route::delete('/digimonfrontier/delete/{id}','destroy')->name('digimonfrontier.delete');
});

//Digimon Savers
Route::controller(DigimonSaversController::class)->group(function () {
    Route::get('/digimonsavers/page','index')->name('digimonsavers.page');
    Route::get('/digimonsavers/add','create')->name('digimonsavers.add');
    Route::post('/digimonsavers/store','store')->name('digimonsavers.store');
    Route::get('/digimonsavers/show/{id}','show')->name('digimonsavers.show');
    Route::get('/digimonsavers/edit/{id}','edit')->name('digimonsavers.edit');
    Route::post('/digimonsavers/update','update')->name('digimonsavers.update');
    Route::delete('/digimonsavers/delete/{id}','destroy')->name('digimonsavers.delete');
});

//Digimon Xros Wars
Route::controller(DigimonXrosWarsController::class)->group(function () {
    Route::get('/digimonxroswars/page','index')->name('digimonxroswars.page');
    Route::get('/digimonxroswars/add','create')->name('digimonxroswars.add');
    Route::post('/digimonxroswars/store','store')->name('digimonxroswars.store');
    Route::get('/digimonxroswars/show/{id}','show')->name('digimonxroswars.show');
    Route::get('/digimonxroswars/edit/{id}','edit')->name('digimonxroswars.edit');
    Route::post('/digimonxroswars/update','update')->name('digimonxroswars.update');
    Route::delete('/digimonxroswars/delete/{id}','destroy')->name('digimonxroswars.delete');
});
