<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard',compact('users'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/impersonate/{id}', function ($id) {
    $user = User::find($id);
    \Auth::user()->impersonate($user);
    return redirect()->back();
})->middleware(['auth', 'verified'])->name('impersonate');

Route::get('/impersonate/exit/user', function () {
    \Auth::user()->leaveImpersonation();
    return redirect()->route('dashboard');
})->middleware(['auth', 'verified'])->name('impersonate.exit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
