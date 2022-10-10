<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontpage\PagesController;
use App\Http\Controllers\Personalcabinet\PersonalCabinetController;
use App\Http\Controllers\Programming\ProgrammingTopicController;
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
Route::get('/', function(){
    return redirect()->route('greetpage');
});

/** PagesController */
Route::get('/bird-in-flight-main', [PagesController::class, 'frontPageIndex'])->name('frontpage.index');
Route::get('/bird-in-flight', [PagesController::class, 'greetPage'])->name('greetpage');

/** RegisterController */
Route::get('/bird-in-flight-welcome', [RegisterController::class, 'index'])->name('register.index');
Route::get('/register-user-create', [RegisterController::class, 'createRegisterForm'])->name('register.create.get')->middleware('guest');
Route::post('/register-user-create', [RegisterController::class, 'storeRegisterForm'])->name('register.store.post')->middleware('guest');

/** LoginController */
Route::get('/login-user-create', [LoginController::class, 'createLoginForm'])->name('login.create.get')->middleware('guest');
Route::post('/login-user-store', [LoginController::class, 'storeLoginForm'])->name('login.store.post')->middleware('guest');

/** LogOutController */
Route::get('/logout-user', [LogOutController::class, 'destroy'])->name('destroy.user');

/** PersonalCabinetCOntroller */
Route::get('/personal-cabinet', [PersonalCabinetController::class, 'personalCabinetShow'])->name('personal.cabinet')->middleware('auth');

/** ProgrammingTopicController */
Route::get('/bird-in-flight/programming', [ProgrammingTopicController::class, 'indexList'])->name('programming.index');