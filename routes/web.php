<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'videos' => \App\Models\Video::orderBy('id', 'desc')->paginate(10)
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard', [
        'videos' => \App\Models\Video::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get()
    ]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/user/{user}', function (\App\Models\User $user) {
    if (! auth()->user()->access) {
        abort(403);
    }

    return view('dashboard', [
        'videos' => \App\Models\Video::where('user_id', $user->id)->orderBy('id', 'desc')->get()
    ]);
})->name('users.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/users', function () {
    if (! auth()->user()->access) {
        abort(403);
    }

    return view('users', [
        'users' => \App\Models\User::all(),
    ]);
})->name('users.index');
