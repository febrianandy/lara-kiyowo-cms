<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [ArticleController::class, 'index']);

Route::get("/create", [ArticleController::class, "create"]);
Route::get("/article/{id}", [ArticleController::class, "show"]);
Route::POST("/create", [ArticleController::class, "createArticle"]);
Route::get("/update/{id}", [ArticleController::class, "update"]);
Route::put("/update/{id}", [ArticleController::class, "updateArticle"]);
Route::get("delete/{id}", [ArticleController::class, "delete"]);
