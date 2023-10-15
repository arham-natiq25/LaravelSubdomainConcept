<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Subdomain\AboutController;
use App\Http\Controllers\Subdomain\HomeController;
use App\Models\User;
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

Route::domain('{user:subdomain}.'.config('app.url'))->name('subdomain')->group(function () {
    // Define your subdomain-specific routes here
    Route::get('/', HomeController::class)->name('home');
    Route::get('/about',AboutController::class)->name('about');
    // Add more routes as needed for this subdomain
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
