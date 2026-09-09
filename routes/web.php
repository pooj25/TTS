<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminEnquiryController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminResourceController;
use App\Http\Controllers\ResourceController;


// ===============================
// Website Routes
// ===============================

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


// ===============================
// Solutions
// ===============================

Route::get('/solutions', [ServiceController::class, 'index'])
    ->name('solutions');


// ===============================
// Products
// ===============================

Route::get('/products', [ProductController::class, 'index'])
    ->name('products');

Route::get('/products/{slug}', [ProductController::class, 'show'])
    ->name('products.show');


// ===============================
// Industries
// ===============================

Route::get('/industries', function () {
    return view('industries');
});


// ===============================
// Resources
// ===============================

Route::get('/resources', [ResourceController::class, 'index'])
    ->name('resources');

Route::get('/resources/{slug}', [ResourceController::class, 'show'])
    ->name('resources.show');


// ===============================
// Contact
// ===============================

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');


// ===============================
// Admin Authentication Routes
// ===============================

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


// ===============================
// Protected Admin Routes
// ===============================

Route::middleware('admin')->group(function () {

    // ===============================
    // Admin Dashboard
    // ===============================

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');


    // ===============================
    // Admin Enquiry Routes
    // ===============================

    Route::get('/admin/enquiries', [AdminEnquiryController::class, 'index'])
        ->name('admin.enquiries');

    Route::get('/admin/enquiries/{id}', [AdminEnquiryController::class, 'show'])
        ->name('admin.enquiries.show');

    Route::delete('/admin/enquiries/{id}', [AdminEnquiryController::class, 'destroy'])
        ->name('admin.enquiries.destroy');


    // ===============================
    // Admin Service Routes
    // ===============================

    Route::get('/admin/services', [AdminServiceController::class, 'index'])
        ->name('admin.services');

    Route::get('/admin/services/create', [AdminServiceController::class, 'create'])
        ->name('admin.services.create');

    Route::post('/admin/services', [AdminServiceController::class, 'store'])
        ->name('admin.services.store');

    Route::get('/admin/services/{id}/edit', [AdminServiceController::class, 'edit'])
        ->name('admin.services.edit');

    Route::put('/admin/services/{id}', [AdminServiceController::class, 'update'])
        ->name('admin.services.update');

    Route::delete('/admin/services/{id}', [AdminServiceController::class, 'destroy'])
        ->name('admin.services.destroy');


    // ===============================
    // Admin Product Routes
    // ===============================

    Route::get('/admin/products', [AdminProductController::class, 'index'])
        ->name('admin.products');

    Route::get('/admin/products/create', [AdminProductController::class, 'create'])
        ->name('admin.products.create');

    Route::post('/admin/products', [AdminProductController::class, 'store'])
        ->name('admin.products.store');

    Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])
        ->name('admin.products.edit');

    Route::put('/admin/products/{id}', [AdminProductController::class, 'update'])
        ->name('admin.products.update');

    Route::delete('/admin/products/{id}', [AdminProductController::class, 'destroy'])
        ->name('admin.products.destroy');


    // ===============================
    // Admin Resource Routes
    // ===============================

    Route::get('/admin/resources', [AdminResourceController::class, 'index'])
        ->name('admin.resources');

    Route::get('/admin/resources/create', [AdminResourceController::class, 'create'])
        ->name('admin.resources.create');

    Route::post('/admin/resources', [AdminResourceController::class, 'store'])
        ->name('admin.resources.store');

    Route::get('/admin/resources/{id}/edit', [AdminResourceController::class, 'edit'])
        ->name('admin.resources.edit');

    Route::put('/admin/resources/{id}', [AdminResourceController::class, 'update'])
        ->name('admin.resources.update');

    Route::delete('/admin/resources/{id}', [AdminResourceController::class, 'destroy'])
        ->name('admin.resources.destroy');

});