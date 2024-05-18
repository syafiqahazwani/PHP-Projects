<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend_Backend\QuotesController;
use App\Http\Controllers\Frontend_Backend\WorkController;
use App\Http\Controllers\Frontend_Backend\CityController;
use App\Http\Controllers\Frontend_Backend\FoodController;
use App\Http\Controllers\Frontend_Backend\AnimalController;
use App\Http\Controllers\Frontend_Backend\AboutController;
use App\Http\Controllers\Frontend_Backend\ContactController;

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
    return view('Frontend.Admin.dashboard_page_front');
});

Route::get('/dashboard', function () {
    return view('Backend.Admin.dashboard_page');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Backend Page Admin
Route::middleware(['auth'])->group(function () {

    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');
        Route::post('/admin/profile/store', 'AdminProfileStore')->name('admin.profile.store');
        Route::get('/admin/change/password', 'AdminChangePassword')->name('admin.change.password');
        Route::post('/admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');
        Route::get('/admin/register', 'AdminRegister')->name('admin.register');
        Route::get('/admin/calendar', 'AdminCalendar')->name('admin.calendar');

        Route::get('/', 'MainDashboard')->name('main.dashboard');
    });
});

//Quotes Page
Route::controller(QuotesController::class)->group(function () {
    //Backend Quotes Page
    Route::get('/quotes/page','QuotesPage')->name('quotes.page');
    Route::get('/quotes/add','QuotesAdd')->name('quotes.add');
    Route::post('/quotes/store','QuotesStore')->name('quotes.store');
    Route::get('/quotes/edit/{id}','QuotesEdit')->name('quotes.edit');
    Route::post('/quotes/update','QuotesUpdate')->name('quotes.update');
    Route::get('/quotes/show/{id}','QuotesShow')->name('quotes.show');
    Route::delete('/quotes/delete/{id}','QuotesDelete')->name('quotes.delete');
    //Frontend Quotes Page
    Route::get('/quotes/main','QuotesMain')->name('quotes.main');
});

//Work Page
Route::controller(WorkController::class)->group(function () {
    //Backend Work Page
    Route::get('/work/page','WorkPage')->name('work.page');
    Route::get('/work/add','WorkAdd')->name('work.add');
    Route::post('/work/store','WorkStore')->name('work.store');
    Route::get('/work/edit/{id}','WorkEdit')->name('work.edit');
    Route::post('/work/update','WorkUpdate')->name('work.update');
    Route::delete('/work/delete/{id}','WorkDelete')->name('work.delete');
    //Frontend Work Page
    Route::get('/work/main','WorkMain')->name('work.main');
});

//City Page
Route::controller(CityController::class)->group(function () {
    //Backend City Page
    Route::get('/city/page','CityPage')->name('city.page');
    Route::get('/city/add','CityAdd')->name('city.add');
    Route::post('/city/store','CityStore')->name('city.store');
    Route::get('/city/edit/{id}','CityEdit')->name('city.edit');
    Route::post('/city/update','CityUpdate')->name('city.update');
    Route::get('/city/show/{id}','CityShow')->name('city.show');
    Route::delete('/city/delete/{id}','CityDelete')->name('city.delete');
    //Frontend City Page
    Route::get('/city/main','CityMain')->name('city.main');
});

//Food Page
Route::controller(FoodController::class)->group(function () {
    //Backend Food Page
    Route::get('/food/page','FoodPage')->name('food.page');
    Route::get('/food/add','FoodAdd')->name('food.add');
    Route::post('/food/store','FoodStore')->name('food.store');
    Route::get('/food/edit/{id}','FoodEdit')->name('food.edit');
    Route::post('/food/update','FoodUpdate')->name('food.update');
    Route::get('/food/show/{id}','FoodShow')->name('food.show');
    Route::delete('/food/delete/{id}','FoodDelete')->name('food.delete');
    //Frontend Food Page
    Route::get('/food/main','FoodMain')->name('food.main');
});

//Animal Page
Route::controller(AnimalController::class)->group(function () {
    //Backend Animal Page
    Route::get('/animal/page','AnimalPage')->name('animal.page');
    Route::get('/animal/add','AnimalAdd')->name('animal.add');
    Route::post('/animal/store','AnimalStore')->name('animal.store');
    Route::get('/animal/edit/{id}','AnimalEdit')->name('animal.edit');
    Route::post('/animal/update','AnimalUpdate')->name('animal.update');
    Route::get('/animal/show/{id}','AnimalShow')->name('animal.show');
    Route::delete('/animal/delete/{id}','AnimalDelete')->name('animal.delete');
    //Frontend Animal Page
    Route::get('/animal/main','AnimalMain')->name('animal.main');
});

//About Page
Route::controller(AboutController::class)->group(function () {
    //Backend About Page
    Route::get('/about/add','AboutAdd')->name('about.add');
    Route::post('/about/update','AboutUpdate')->name('about.update');
    //Frontend About Page
    Route::get('/about/main','AboutMain')->name('about.main');
});

//Contact Page
Route::controller(ContactController::class)->group(function () {
    //Frontend Contact Page
    Route::get('/contact/main','ContactMain')->name('contact.main');
    Route::post('/contact/store','ContactStore')->name('contact.store');
    //Backend Contact Page
    Route::get('/contact/page','ContactPage')->name('contact.page');
    Route::delete('/contact/delete/{id}','ContactDelete')->name('contact.delete');
});
