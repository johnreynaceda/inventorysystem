<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
    // return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//admin routes
Route::prefix('administrator')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    Route::get('/category', function () {
        return view('admin.category');
    })->name('admin.category');
    Route::get('/products', function () {
        return view('admin.product');
    })->name('admin.product');
    Route::get('/stocks', function () {
        return view('admin.stocks');
    })->name('admin.stocks');
    Route::get('/sales', function () {
        return view('admin.sales');
    })->name('admin.sales');
    Route::get('/sales', function () {
        return view('admin.sales');
    })->name('admin.sales');
    Route::get('/report', function () {
        return view('admin.report');
    })->name('admin.report');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
