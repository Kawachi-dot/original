<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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
Route::get('/login',[AccountController::class,'login']);
//Account
Route::get('/account/info',[AccountController::class, 'account_info']);
Route::get('/account/create',[AccountController::class, 'account_create']);
Route::post('/account/confirm',[AccountController::class, 'account_confirm']);
Route::post('/account/register',[AccountController::class, 'account_register']);
Route::get('/account/edit/{account_id}',[AccountController::class, 'account_edit']);
Route::post('/account/update/{account_id}',[AccountController::class, 'account_update']);
//Money
Route::get('/money/list',[AccountController::class, 'money_list']);
Route::get('/money/add',[AccountController::class, 'money_add']);
Route::post('/money/add/complete',[AccountController::class, 'money_add_complete']);
Route::get('/money/edit/{money_id}',[AccountController::class, 'money_edit']);
Route::post('/money/update/{money_id}',[AccountController::class, 'money_update']);
Route::post('/money/delete/{money_id}',[AccountController::class, 'money_delete']);
//Plan
Route::get('/plan/list',[AccountController::class, 'plan_list']);
Route::get('/plan/create',[AccountController::class, 'plan_create']);
Route::post('/plan/create/complete',[AccountController::class, 'plan_create_complete']);
Route::get('/plan/edit/{plan_id}',[AccountController::class, 'plan_edit']);
Route::post('/plan/update/{plan_id}',[AccountController::class, 'plan_update']);
//graph
Route::get('/graph',[AccountController::class, 'graph']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
