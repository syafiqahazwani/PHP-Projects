<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NameusersController; //add the ControllerNameSpace
use App\Http\Controllers\MydatabaseController; //add the ControllerNameSpace
use App\Http\Controllers\AnimeController; //add the ControllerNameSpace
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\JapaneseController; //add the ControllerNameSpace
use App\Http\Controllers\KoreaController; //add the ControllerNameSpace
use App\Http\Controllers\EnglishController; //add the ControllerNameSpace


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


//Login & Register Page
Route::get('/login', [AuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/register', [AuthController::class,'register'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [AuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user', [AuthController::class,'loginUser'])->name('login-user');
Route::get('/logout', [AuthController::class,'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Nameusers Page
Route::get('/nameusers', [NameusersController::class, 'index'])->name('nameusers.index');
Route::get('/nameusers/create', [NameusersController::class, 'create'])->name('nameusers.create');
Route::post('/nameusers', [NameusersController::class, 'store'])->name('nameusers.store');
Route::get('/nameusers/{nameusers}', [NameusersController::class, 'show'])->name('nameusers.show');
Route::get('/nameusers/{nameusers}/edit', [NameusersController::class, 'edit'])->name('nameusers.edit');
Route::put('/nameusers/{nameusers}/edit', [NameusersController::class, 'update'])->name('nameusers.update');
Route::delete('nameusers/nameusers/{nameusers}', [NameusersController::class, 'destroy'])->name('nameusers.destroy');

//Calendar
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');


//Mydatabase Page
Route::get('/mydatabase', [MydatabaseController::class, 'index'])->name('mydatabase.index');
Route::get('/mydatabase/create', [MydatabaseController::class, 'create'])->name('mydatabase.create');
Route::post('/mydatabase', [MydatabaseController::class, 'store'])->name('mydatabase.store');
Route::get('/mydatabase/{mydatabase}', [MydatabaseController::class, 'show'])->name('mydatabase.show');
Route::get('/mydatabase/{mydatabase}/download', [MydatabaseController::class, 'download'])->name('mydatabase.download');
Route::get('/mydatabase/{mydatabase}/edit', [MydatabaseController::class, 'edit'])->name('mydatabase.edit');
Route::put('/mydatabase/{mydatabase}/edit', [MydatabaseController::class, 'update'])->name('mydatabase.update');
Route::delete('/mydatabase/{mydatabase}', [MydatabaseController::class, 'destroy'])->name('mydatabase.destroy');


//Anime Page
Route::get('/anime', [AnimeController::class, 'index'])->name('anime.index');
Route::get('/anime/create', [AnimeController::class, 'create'])->name('anime.create');
Route::post('/anime', [AnimeController::class, 'store'])->name('anime.store');
Route::get('/anime/{anime}', [AnimeController::class, 'show'])->name('anime.show');
Route::get('/anime/{anime}/edit', [AnimeController::class, 'edit'])->name('anime.edit');
Route::put('/anime/{anime}/edit', [AnimeController::class, 'update'])->name('anime.update');
Route::delete('/anime/{anime}', [AnimeController::class, 'destroy'])->name('anime.destroy');


//Japanese Page
Route::get('/japanese', [JapaneseController::class, 'index'])->name('japanese.index');
Route::get('/japanese/create', [JapaneseController::class, 'create'])->name('japanese.create');
Route::post('/japanese', [JapaneseController::class, 'store'])->name('japanese.store');
Route::get('/japanese/{japanese}', [JapaneseController::class, 'show'])->name('japanese.show');
Route::get('/japanese/{japanese}/edit', [JapaneseController::class, 'edit'])->name('japanese.edit');
Route::put('/japanese/{japanese}/edit', [JapaneseController::class, 'update'])->name('japanese.update');
Route::delete('/japanese/{japanese}', [JapaneseController::class, 'destroy'])->name('japanese.destroy');
 

//Korea Page
Route::get('/korea', [KoreaController::class, 'index'])->name('korea.index');
Route::get('/korea/create', [KoreaController::class, 'create'])->name('korea.create');
Route::post('/korea', [KoreaController::class, 'store'])->name('korea.store');
Route::get('/korea/{korea}', [KoreaController::class, 'show'])->name('korea.show');
Route::get('/korea/{korea}/edit', [KoreaController::class, 'edit'])->name('korea.edit');
Route::put('/korea/{korea}/edit', [KoreaController::class, 'update'])->name('korea.update');
Route::delete('/korea/{korea}', [KoreaController::class, 'destroy'])->name('korea.destroy');


//English Page
Route::get('/english', [EnglishController::class, 'index'])->name('english.index');
Route::get('/english/create', [EnglishController::class, 'create'])->name('english.create');
Route::post('/english', [EnglishController::class, 'store'])->name('english.store');
Route::get('/english/{english}', [EnglishController::class, 'show'])->name('english.show');
Route::get('/english/{english}/edit', [EnglishController::class, 'edit'])->name('english.edit');
Route::put('/english/{english}/edit', [EnglishController::class, 'update'])->name('english.update');
Route::delete('/english/{english}', [EnglishController::class, 'destroy'])->name('english.destroy');












