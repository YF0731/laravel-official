<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Tests\Feature\ExampleTest;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('refresh', [ExampleTest::class, 'test_the_application_returns_a_successful_response']);

Route::get('/flight', [FlightController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
