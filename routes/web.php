<?php

use App\Http\Controllers\LogoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BtsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\ContactController as PublicContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;



Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('/products', [FrontendController::class, 'products'])->name('products');

Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');

Route::get('/bts', [FrontendController::class, 'bts'])->name('bts');

Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');

Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');

Route::get('/testimonials', [FrontendController::class, 'testimonials'])->name('testimonials');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');



Route::prefix('products')->group(function () {

    Route::get('/website', [ProductController::class, 'website'])->name('products.website');
    Route::get('/app', [ProductController::class, 'app'])->name('products.app');
    Route::get('/erp', [ProductController::class, 'erp'])->name('products.erp');
    Route::get('/oracle', [ProductController::class, 'oracle'])->name('products.oracle');
    Route::get('/seo', [ProductController::class, 'seo'])->name('products.seo');
    Route::get('/gbp', [ProductController::class, 'gbp'])->name('products.gbp');
    Route::get('/email', [ProductController::class, 'email'])->name('products.email');
    Route::get('/reel', [ProductController::class, 'reel'])->name('products.reel');
    Route::get('/brand', [ProductController::class, 'brand'])->name('products.brand');
    Route::get('/crm', [ProductController::class, 'crm'])->name('products.crm');
    Route::get('/design', [ProductController::class, 'design'])->name('products.design');
    Route::get('/cloud', [ProductController::class, 'cloud'])->name('products.cloud');
    Route::get('/sms', [ProductController::class, 'sms'])->name('products.sms');

    Route::get('/saas', [ProductController::class, 'saas'])->name('products.saas');
    Route::get('/web', [ProductController::class, 'web'])->name('products.web');
    Route::get('/ecommerce', [ProductController::class, 'ecommerce'])->name('products.ecommerce');
    Route::get('/smm', [ProductController::class, 'smm'])->name('products.smm');
    Route::get('/ads', [ProductController::class, 'ads'])->name('products.ads');
    Route::get('/whatsapp', [ProductController::class, 'whatsapp'])->name('products.whatsapp');
    Route::get('/poster', [ProductController::class, 'poster'])->name('products.poster');
    Route::get('/maintenance', [ProductController::class, 'maintenance'])->name('products.maintenance');
    Route::get('/uiux', [ProductController::class, 'uiux'])->name('products.uiux');
    Route::get('/software', [ProductController::class, 'software'])->name('products.software');
    Route::get('/ai', [ProductController::class, 'ai'])->name('products.ai');
    Route::get('/ppc', [ProductController::class, 'ppc'])->name('products.ppc');

});







Route::get('/admin/login', function () { return view('admin.auth.login');})->name('admin.login');

// Public Contact Routes
Route::get('/contact', [PublicContactController::class, 'index'])->name('contact');
Route::post('/contact', [PublicContactController::class, 'store'])->name('contact.store');
Route::get('/contact.html', function () {
    return redirect()->route('contact');
});

// Admin Authentication
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/logout', [AuthController::class, 'logout']);

// Admin Protected Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('contact-us', ContactController::class)->parameters(['contact-us' => 'contact']);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('bts', BtsController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('logos', LogoController::class);
});
