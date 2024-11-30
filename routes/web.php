<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\SliderController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('/services-details/{service}', [App\Http\Controllers\FrontController::class, 'serviceDetails'])->name('service-details');
Route::get('/collection', [App\Http\Controllers\FrontController::class, 'collectionDetails'])->name('collection');
Route::get('/collection-details/{collection}', [App\Http\Controllers\FrontController::class, 'collectionDetails'])->name('collection-details');
Route::get('/project-details/{project}', [App\Http\Controllers\FrontController::class, 'projectDetails'])->name('project-details');
Route::get('/contact-us', [App\Http\Controllers\FrontController::class, 'contactDetails'])->name('contact');
Route::get('/join-us', [App\Http\Controllers\FrontController::class, 'joinDetails'])->name('join');
Route::get('/catalog', [App\Http\Controllers\FrontController::class, 'catalog'])->name('catalog');


Route::get('locale/{lang}', [LocalizationController::class, 'changeLang'])->name('locale');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/', function () {
        return redirect()->route('sliders.index');
    });

    Route::resource('sliders', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class);
    Route::resource('settings', App\Http\Controllers\Admin\SettingController::class);
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('members', App\Http\Controllers\Admin\MemberController::class);
    Route::resource('photo-settings', App\Http\Controllers\Admin\PhotoSettingController::class);
    Route::resource('galleries', App\Http\Controllers\Admin\GalleryController::class);
    Route::resource('contacts', App\Http\Controllers\Admin\ContactController::class);
    Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('project-photos', App\Http\Controllers\Admin\ProjectPhotoController::class);
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::resource('clients', App\Http\Controllers\Admin\ClientController::class);
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('joins', App\Http\Controllers\Admin\JoinController::class);


});

