<?php
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\informationsController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; //
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
Route::get('/login',[loginController::class,'show'])->name('login_show');
Route::post('/login',[loginController::class,'login'])->name('login_login');
Route::get('/',[homeController::class,'index'])->name('homepage');
Route::get('/logout',[loginController::class,'logt'])->name('login_logout');
Route::delete('/profile/{profile}',[ProfilController::class,'Supprimer'])->name('supprimerProfile');
Route::get('/profile/{profile}/edit',[ProfilController::class,'edit'])->name('editProfile');
Route::put('/profile/{profile}',[ProfilController::class,'update'])->name('updateProfile');
Route::get('/profile/profiles',[ProfilController::class,'index'])->name('profilename');
Route::get('/profile/profiles/{profile}',[ProfilController::class,'show'])->where('profile','\d+')->name('showprofil');
Route::get('/informations',[informationsController::class,'index'])->name('infomationsname');
Route::get('/profile/create',[ProfilController::class,'create'])->name('profilecreate');
Route::post('/profile/store',[ProfilController::class,'store'])->name('profilestore');