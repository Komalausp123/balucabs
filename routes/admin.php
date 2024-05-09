<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\admin\AdminProfileController;


Route::get('/clear-cache', function () {

    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/route-clear', function () {
    Artisan::call('route:clear');
    return "Route is cleared";
});

Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return "view is cleared";
});

Route::get('/config-clear', function () {
    Artisan::call('config:clear');
    return "config is cleared";
});

Route::get('/route-clear', function () {
    Artisan::call('route:clear');
    return "Route is cleared";
});
Route::get('migrate', function () {
    Artisan::call('migrate');
    return "Migrate Completed!";
});
Route::get('optimize', function () {
    Artisan::call('optimize:clear');
    return "optimized!";
});
Route::get('storage-link', function () {
    Artisan::call('storage:link');
    return "storage linked!";
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminProfileController::class, 'login'])->name('admin_login');
    Route::post('/login-post', [AdminProfileController::class, 'login_post'])->name('login_post');
});
