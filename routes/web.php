<?php

use App\Http\Controllers\DashboardControlller;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/dashboard',[DashboardControlller::class,'index']);
Route::get('/create',[DashboardControlller::class,'create']);
Route::post('/create/store',[DashboardControlller::class,'store']);
Route::get('/dashboard/{id}/edit',[DashboardControlller::class,'edit']);
Route::put('/dashboard/{id}',[DashboardControlller::class,'update']);
Route::delete('/dashboard/{id}',[DashboardControlller::class,'destroy']);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
