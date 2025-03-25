<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UniversityController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
Route::get('site/setting',[SiteSettingController::class,'setting'])->name('site.setting');
Route::put('site/setting/{setting}',[SiteSettingController::class,'settingUpdate'])->name('site.setting.update');

Route::get('about-us',[AboutUsController::class,'show'])->name('about-us.show');
Route::get('about-us/edit',[AboutUsController::class,'edit'])->name('about-us.edit');
Route::put('about-us/update',[AboutUsController::class,'update'])->name('about-us.update');

Route::resource('/program',ProgramController::class);
Route::resource('/country',CountryController::class);
Route::resource('/course',CourseController::class);
Route::resource('/university',UniversityController::class);
Route::resource('/faqs',FaqsController::class);
Route::resource('/team',TeamController::class);
Route::resource('/appointment',AppointmentController::class);
Route::resource('/event',EventController::class);

});