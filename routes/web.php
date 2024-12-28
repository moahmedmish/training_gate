<?php

use App\Http\Controllers\Admin\SubPageController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\LocalizationController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/services-details/{service}', [FrontController::class, 'serviceDetails'])->name('service-details');
Route::get('/collection', [FrontController::class, 'collectionDetails'])->name('collection');
Route::get('/collection-details/{collection}', [HomeController::class, 'collectionDetails'])->name('collection-details');
Route::get('/project-details/{project}', [FrontController::class, 'projectDetails'])->name('project-details');
Route::get('/contact-us', [FrontController::class, 'contactDetails'])->name('contact');
Route::get('/join-us', [FrontController::class, 'joinDetails'])->name('join');
Route::get('/catalog', [HomeController::class, 'catalog'])->name('catalog');
//Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('locale/{lang}', [LocalizationController::class, 'changeLang'])->name('locale');

Auth::routes();

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
    // Sub-pages routes that are scoped to a specific page
    Route::prefix('sub_pages')->group(function () {
        Route::get('/{page_id}', [SubPageController::class, 'index'])->name('sub_pages.index');
        Route::get('/{page_id}/create', [SubPageController::class, 'create'])->name('sub_pages.create');
        Route::post('/{page_id}', [SubPageController::class, 'store'])->name('sub_pages.store');
        Route::get('/{page_id}/{sub_page}', [SubPageController::class, 'show'])->name('sub_pages.show');
        Route::get('/{page_id}/{sub_page}/edit', [SubPageController::class, 'edit'])->name('sub_pages.edit');
        Route::put('/{page_id}/{sub_page}', [SubPageController::class, 'update'])->name('sub_pages.update');
        Route::delete('/{page_id}/{sub_page}', [SubPageController::class, 'destroy'])->name('sub_pages.destroy');
    });

});
