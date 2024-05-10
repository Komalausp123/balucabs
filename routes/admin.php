<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\TermsAndConditionsController;
use App\Http\Controllers\admin\PrivacyController;
use App\Http\Controllers\admin\SocialLinkController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\TestimonialController;




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
    Route::get('/logout', [AdminProfileController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [AdminProfileController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/view-profile', [AdminProfileController::class, 'view_profile'])->name('view_profile');
    Route::post('/profile-update', [AdminProfileController::class, 'profileupdate'])->name('admin-update-profile');
    Route::post('/change-password', [AdminProfileController::class, 'changepassword'])->name('admin-change-password');
    
    //About
    Route::get('about/index', [AboutController::class, 'index'])->name('about-index');
    Route::get('about/create', [AboutController::class, 'create'])->name('about-create');
    Route::post('about/store', [AboutController::class, 'store'])->name('about-store');
    Route::get('about/edit/{id}', [AboutController::class, 'edit'])->name('about-edit');
    Route::get('about/destroy/{id}', [AboutController::class, 'destroy'])->name('about-destroy');
    Route::post('about/update/{id}', [AboutController::class, 'update'])->name('about-update');

       // Terms & Condition //
       Route::get('/add-termsandcondition', [TermsAndConditionsController::class, 'index'])->name('add-termsandcondition');
       Route::post('/add-termsandcondition', [TermsAndConditionsController::class, 'store']);
       Route::get('/edit-termsandcondition/{slug}', [TermsAndConditionsController::class, 'edit'])->name('edit-termsandcondition');
       Route::post('/edit-termsandcondition/{slug}', [TermsAndConditionsController::class, 'update']);
       Route::get('/delete-termsandcondition/{id}', [TermsAndConditionsController::class, 'destroy'])->name('delete-termsandcondition');
       Route::get('/view-termsandcondition', [TermsAndConditionsController::class, 'view'])->name('view-termsandcondition');
   
        //Privacy
        Route::get('privacy/index', [PrivacyController::class, 'index'])->name('privacy-index');
        Route::get('privacy/create', [PrivacyController::class, 'create'])->name('privacy-create');
        Route::post('privacy/store', [PrivacyController::class, 'store'])->name('privacy-store');
        Route::get('privacy/edit/{id}', [PrivacyController::class, 'edit'])->name('privacy-edit');
        Route::get('privacy/destroy/{id}', [PrivacyController::class, 'destroy'])->name('privacy-destroy');
        Route::post('privacy/update/{id}', [PrivacyController::class, 'update'])->name('privacy-update');

         // social Media
         Route::get('social', [SocialLinkController::class, 'social'])->name('social-update');
         Route::post('social', [SocialLinkController::class, 'socialupdate'])->name('social-update-submit');

         //blog
        Route::get('blog/index', [BlogController::class, 'index'])->name('blog-index');
        Route::get('blog/create', [BlogController::class, 'create'])->name('blog-create');
        Route::post('blog/store', [BlogController::class, 'store'])->name('blog-store');
        Route::get('blog/edit/{id}', [BlogController::class, 'edit'])->name('blog-edit');
        Route::get('blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog-destroy');
        Route::post('blog/update/{id}', [BlogController::class, 'update'])->name('blog-update');
        Route::get('blogcomment-view', [BlogController::class, 'blogcomment_view'])->name('blogcomment-view');

        //testimonial
        Route::get('testimonial/index', [TestimonialController::class, 'index'])->name('testimonial-index');
        Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonial-create');
        Route::post('testimonial/store', [TestimonialController::class, 'store'])->name('testimonial-store');
        Route::get('testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial-edit');
        Route::get('testimonial/destroy/{id}', [TestimonialController::class, 'destroy'])->name('testimonial-destroy');
        Route::post('testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonial-update');
    });
});
