<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\NewsEventController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TeamMemberController;
use App\Http\Controllers\CareerPageController;
use App\Http\Controllers\ContactUsPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomePageController::class, 'frontend'])->name('home');
Route::get('/contact-us', [ContactUsPageController::class, 'contact']);
Route::get('/team', [AboutUsPageController::class, 'team']);
Route::get('/company', [AboutUsPageController::class, 'company']);
Route::get('/awards', [AboutUsPageController::class, 'awards']);
Route::get('/industries', [AboutUsPageController::class, 'industries']);
Route::get('/partners', [AboutUsPageController::class, 'partners']);

Route::get('/whyWork', [CareerPageController::class, 'WhyWork']);
Route::get('/vacancies', [CareerPageController::class, 'vacancies']);

Route::get('/associateBusiness', [CareerPageController::class, 'associateBusiness']);
Route::get('/callCentre', [CareerPageController::class, 'CallCentre']);
Route::get('/seniorBusiness', [CareerPageController::class, 'SeniorBusiness']);

Route::get('/resume', [CareerPageController::class, 'resume']);


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});


Route::middleware('auth')->group(callback: function () {

    //Slider Section
    Route::get('/slider-list', [SliderController::class, 'index'])->name('slider.list');
    Route::post('/slider-store', [SliderController::class, 'store'])->name('slider.store');
    Route::put('/slider-update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider-delete/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');


    //Team
    Route::get('/team-section', [TeamMemberController::class, 'index'])->name('team.section');
    Route::post('/team-store', [TeamMemberController::class, 'store'])->name('team.store');
    Route::put('/team-update/{id}', [TeamMemberController::class, 'update'])->name('team.update');
    Route::get('/team-delete/{id}', [TeamMemberController::class, 'destroy'])->name('team.destroy');

    Route::get('/event-list', [NewsEventController::class, 'index'])->name('event.section');
    Route::post('/event-store', [NewsEventController::class, 'store'])->name('event.store');
    Route::put('/event-update/{id}', [NewsEventController::class, 'update'])->name('event.update');
    Route::get('/event-delete/{id}', [NewsEventController::class, 'destroy'])->name('event.destroy');

    Route::get('/blog-section', [BlogController::class, 'index'])->name('blog.section');
    Route::post('/blog-store', [BlogController::class, 'store'])->name('blog.store');
    Route::put('/blog-update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog-delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/unauthorized-action', [AdminDashboardController::class, 'unauthorized'])->name('unauthorized.action');


    //Role and User Section
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);


});

require __DIR__.'/auth.php';
