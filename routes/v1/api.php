<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//    return response()->json(['user' => $request->user()]);
//});

Route::middleware(['auth:sanctum'])->group(static function() {
    Route::get('/user',function (Request $request) {
        return response()->json(['user' => $request->user()]);
    });

    Route::apiResources([
        'users.programs' => \App\Http\Controllers\ProgramController::class,
        'programs.workouts' => \App\Http\Controllers\WorkoutController::class,
        'user_notifications' => \App\Http\Controllers\UserNotificationController::class,
        'users.user_habits' => \App\Http\Controllers\UserHabitController::class,
        'users.user_habits.user_habit_values' => \App\Http\Controllers\UserHabitValueController::class,
        'articles' => \App\Http\Controllers\ArticleController::class
    ]);
});
