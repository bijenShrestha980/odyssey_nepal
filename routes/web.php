<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePage;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomePage::class, 'index']);


/*Aboutus*/
Route::get('/about_us', [HomePage::class, 'aboutUsIndex']);

/*Gallery*/
Route::get('/gallery', [HomePage::class, 'galleryIndex']);

/*Departments*/
Route::get('/departments', [HomePage::class, 'departmentsIndex']);

/*OurTeam*/
Route::get('/our_team', [HomePage::class, 'ourTeamIndex']);

/*OurTeam*/
Route::get('/contact_us', [HomePage::class, 'contactUsIndex']);

/*BloodDonation*/
Route::get('/blood_donation', [HomePage::class, 'bloodDonationIndex']);

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
