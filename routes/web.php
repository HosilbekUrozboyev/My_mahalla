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

Route::get('/test', function () {
    return view('admin_panel.dashboard');
})->name('test');

//Route::get('/test1', function () {
//    return view('admin_panel.employees.index');
//})->name('employees.index');

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('about', [\App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('service', [\App\Http\Controllers\PageController::class, 'service'])->name('service');
Route::get('news1', [\App\Http\Controllers\PageController::class, 'news1'])->name('news1');
Route::get('contact', [\App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('view', [\App\Http\Controllers\PageController::class, 'view'])->name('view');

//Route::get('/dashboard', function () {
//    return view('admin_panel.dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/news', function () {
        return view('admin_panel.news.index');
    })->name('news');

    Route::resource('news' , \App\Http\Controllers\NewsController::class);
    Route::resource('employee' , \App\Http\Controllers\EmployeeController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
