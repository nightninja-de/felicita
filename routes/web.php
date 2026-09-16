
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\StaffAuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactController;

// Gutschein purchase
Route::get('/voucher', [VoucherController::class, 'form'])->name('voucher.form');
Route::post('/voucher/checkout', [VoucherController::class, 'checkout'])->name('voucher.checkout');
Route::get('/voucher/success', [VoucherController::class, 'success'])->name('voucher.success');
Route::post('/stripe/webhook', [VoucherController::class, 'stripeWebhook'])->name('stripe.webhook');

// Reservations
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

// Contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Staff auth
Route::get('/staff/login', [StaffAuthController::class, 'showLogin'])->name('staff.login');
Route::post('/staff/login', [StaffAuthController::class, 'login']);
Route::post('/staff/logout', [StaffAuthController::class, 'logout'])->name('staff.logout');

// Local-only dev shortcut: logs in as the seeded staff user, no credentials needed.
if (app()->environment('local')) {
    Route::get('/staff/dev-login', function () {
        $staff = \App\Models\User::first();
        auth()->login($staff);

        return redirect()->route('staff.scan');
    })->name('staff.dev-login');
}

// Staff Gutschein redemption
Route::middleware('auth')->prefix('staff')->group(function () {
    Route::get('/scan', [VoucherController::class, 'scanPage'])->name('staff.scan');
    Route::post('/vouchers/check', [VoucherController::class, 'checkCode'])->name('staff.voucher.check');
    Route::post('/vouchers/redeem', [VoucherController::class, 'redeemCode'])->name('staff.voucher.redeem');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

    // demos
Route::prefix('home')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/about','about')->name('about');
        Route::get('/blog','blog')->name('blog');
        Route::get('/blogDetails','blogDetails')->name('blogDetails');
        Route::get('/chef','chef')->name('chef');
        Route::get('/comming','comming')->name('comming');
        Route::get('/contact','contact')->name('contact');
        Route::get('/error','error404')->name('error404');
        Route::get('/gallery','gallery')->name('gallery');
        Route::get('/home2','home2')->name('home2');
        Route::get('/home3','home3')->name('home3');
        Route::get('/index','index')->name('index');
        Route::get('/meetTheChef','meetTheChef')->name('meetTheChef');
        Route::get('/menu','menu')->name('menu');
        Route::get('/portfolio','portfolio')->name('portfolio');
        Route::get('/reservations','reservations')->name('reservations');
        Route::get('/events','events')->name('events');
    });
});