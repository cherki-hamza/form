<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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




// admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        // admin link for generate the form wizzard
        Route::get('/form/{project_id}/{client_name}' , [ProjectController::class , 'form_link'])->name('form_link')->middleware('secure_form');

        // route for form wizard
        Route::post('/store_products', [ProductController::class, 'store_products'])->name('store_products');


        // route for store the form
        Route::post('/form/{project_id}/store_form_wizzard', [ProjectController::class, 'store_form_wizzard'])->name('store_form_wizzard');

        // route for get the document
        Route::get('/form/{project_id}/{client_name}/document' , [ProjectController::class , 'document'])->name('document');

        // route for you  already filled out the form.
        Route::get('/form/{project_id}/{client_name}/form_done' , [ProjectController::class , 'form_done'])->name('form_done');

   }
);
