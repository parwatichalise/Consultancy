<?php

use App\Http\Controllers\Frontend\AppointmentController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/faqs',[PageController::class,'faqs'])->name('faqs');
Route::get('/event',[PageController::class,'event'])->name('event');
Route::get('/details{id}',[PageController::class,'details'])->name('details');
Route::get('/testimonials',[PageController::class,'testimonials'])->name('testimonials');
Route::get('/success',[PageController::class,'success'])->name('success');
Route::get('/successstory',[PageController::class,'successstory'])->name('successstory');
Route::get('/countries',[PageController::class,'countries'])->name('countries');
Route::get('/university',[PageController::class,'university'])->name('university');
Route::get('/universities/{id}',[PageController::class,'universities'])->name('universities');
Route::get('/learning-center',[PageController::class,'learning'])->name('learning');
//Ielts Page
Route::get('/ielts',[PageController::class,'ielts'])->name('learning.ielts');
Route::get('/pte',[PageController::class,'pte'])->name('learning.pte');
Route::get('/toefl',[PageController::class,'toefl'])->name('learning.toefl');
Route::get('/sat',[PageController::class,'sat'])->name('learning.sat');
Route::get('/gre',[PageController::class,'gre'])->name('learning.gre');
Route::get('/gmat',[PageController::class,'gmat'])->name('learning.gmat');

//service routes
Route::get('/services',[PageController::class,'services'])->name('services');
Route::get('/predeparture',[PageController::class,'predeparture'])->name('predeparture');
Route::get('/testpreparation',[PageController::class,'testpreparation'])->name('testpreparation');
Route::get('/studentaccomodation',[PageController::class,'studentaccomodation'])->name('studentaccomodation');
Route::get('/educationcounseling',[PageController::class,'educationcounseling'])->name('educationcounseling');
Route::get('/scholarshipguidence',[PageController::class,'scholarshipguidence'])->name('scholarshipguidence');
Route::get('/counselordashboard',[PageController::class,'counselordashboard'])->name('counselordashboard');
Route::get('/predepartureguide',[PageController::class,'predepartureguide'])->name('predepartureguide');

ROute::post('/make-appointment',[AppointmentController::class,'makeAppointment'])->name('appointment.store');
require __DIR__.'/auth.php';
