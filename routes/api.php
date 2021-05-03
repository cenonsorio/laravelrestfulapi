<?php

use App\Models\Post;
use App\Http\Controllers\PostsApiController;
use App\Models\Questions;
use App\Http\Controllers\QuestionsApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostsApiController::class, 'index']);
Route::post('/posts', [PostsApiController::class, 'store']);
Route::put('/posts/{post}', [PostsApiController::class, 'update']);
Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);

Route::get('/questions', [QuestionsApiController::class, 'index']);
Route::get('/questions/{post}', [QuestionsApiController::class, 'findById']);
Route::post('/questions', [QuestionsApiController::class, 'store']);
Route::put('/questions/{post}', [QuestionsApiController::class, 'update']);
Route::delete('/questions/{post}', [QuestionsApiController::class, 'destroy']);