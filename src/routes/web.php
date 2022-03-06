<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Log\Logger;
use App\Models\User;

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
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        return 'hello world';
    })->name('users');
});

Route::get('/here', function () {
    return route('admin.users');
});

Route::get('/users/{user}', function (User $user) {
    return $user->email;
});
