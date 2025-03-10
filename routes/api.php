<?php
/* 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
*/
/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/
/* 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
use App\Http\Controllers\Api\TimelineController;
use App\Http\Controllers\Api\TweetController;

Route::get('/timeline', [App\Http\Controllers\Api\TimelineController::class, 'index']);
Route::post('/tweets', [App\Http\Controllers\Api\TweetController::class, 'store']);