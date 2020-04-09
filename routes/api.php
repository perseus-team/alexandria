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

Route::middleware('auth:sanctum')->group(function() {

    Route::get('/auth-user', function(Request $request) {
        return $request->user();
    });

    Route::apiResources([
        '/books' => 'BookController',
    ]);

    Route::any('{any}', function() {
        return response()->json([
            "status" => 404,
            "title" => "Not Found"
        ], 404);
    })->where('any', '.*');


});
