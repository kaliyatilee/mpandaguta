<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\SelfHelpController;
use App\Http\Controllers\ArchivementController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpensesController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SelfHelpController::class,'index']);
Route::get('//get-response/{id}', [SelfHelpController::class, 'show']);
Route::get('/site_notices',[NoticesController::class,'site_index']);
Route::get('/site_testimonies',[TestimonialsController::class,'site_index']);
Route::get('/site_events',[EventsController::class,'site_index']);
Route::get('/site_archivements',[ArchivementController::class,'site_index']);



Route::get('/login', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
	Route::get('/dashboard',[DashboardController::class,'index']);
	Route::get('/students',[StudentsController::class,'index']);
	Route::get('/notices',[NoticesController::class,'index']);
	Route::get('/testimonies',[TestimonialsController::class,'index']);
	Route::get('/events',[EventsController::class,'index']);
	Route::get('/archivements',[ArchivementController::class,'index']);
	Route::get('/payments',[IncomeController::class,'index']);
	Route::get('/expenditures',[ExpensesController::class,'index']);
	
	

	Route::get('/new_students',function () {return view('students/add');});
	Route::get('/new_notices',function () {return view('notices/add');});
	Route::get('/new_testimonies',function () {return view('testimonies/add');});
	Route::get('/new_events',function () {return view('events/add');});
	Route::get('/new_archivement',function () {return view('archivements/add');});
	Route::get('/new_expenditure',function () {return view('expenses/add');});
	Route::get('/new_payment',[IncomeController::class,'create']);


	Route::post('/save_students', [StudentsController::class,'store']);
    Route::post('/save_notices', [NoticesController::class,'store']);
	Route::post('/save_testimonies', [TestimonialsController::class,'store']);
	Route::post('/save_events',[EventsController::class,'store']);
	Route::post('/save_archivement',[ArchivementController::class,'store']);
	Route::post('/save_payment',[IncomeController::class,'store']);
	Route::post('/save_expense',[ExpensesController::class,'store']);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
