<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitorsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('first-page');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/visitors', [VisitorsController::class,'index'])->middleware('auth');
Route::get('/visitors/create', [VisitorsController::class,'create'])->middleware('auth');
Route::post('/visitors', [VisitorsController::class,'store']);
Route::get('/visitors/{id}/edit', [VisitorsController::class, 'edit'])->middleware('auth');
Route::put('/visitors/{id}', [VisitorsController::class, 'update'])->middleware('auth');
Route::get('/visitors/{id}', [VisitorsController::class,'show'])->middleware('auth');
Route::delete('/visitors/{id}', [VisitorsController::class,'destroy']);

// These are all used for authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
