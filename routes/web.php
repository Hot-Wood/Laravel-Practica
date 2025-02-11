<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::resource('projectos', ProjectoController::class)->except(['show']);
});
Route::get('/', function () {
    return redirect()->route('projectos.index');
});

Route::get('projectos/pdf', [App\Http\Controllers\ProjectoController::class,'getpdf'])->name('projectos.pdf');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
