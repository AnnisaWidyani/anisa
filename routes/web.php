<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnisaController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\News1Controller;
use App\Http\Controllers\News2Controller;
use App\Http\Controllers\News3Controller;
use App\Http\Controllers\News4Controller;
use App\Http\Controllers\News5Controller;
use App\Http\Controllers\News6Controller;
use App\Http\Controllers\News7Controller;
use App\Http\Controllers\DashboardController;
use App\Models\Authors;
use App\Models\News;


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
    $news = News::all();
    $author = Authors::all();

    return view('welcome', compact("news", "author"));
});

Route::get('author', [AnisaController::class, 'author']);
Route::get('news', [AnisaController::class, 'news']);
Route::get('contact1', [AnisaController::class, 'contact']);
Route::get('about1', [AnisaController::class, 'about']);
Route::get('price1', [AnisaController::class, 'price']);
Route::get('violin1', [AnisaController::class, 'violin']);
Route::get('piano1', [AnisaController::class, 'piano']);
Route::get('gitar1', [AnisaController::class, 'gitar']);
Route::get('drum1', [AnisaController::class, 'drum']);
Route::get('terompet1', [AnisaController::class, 'terompet']);
Route::get('flute1', [AnisaController::class, 'flute']);
Route::get('kontrabass1', [AnisaController::class, 'kontrabass']);
Route::get('harpa1', [AnisaController::class, 'harpa']);
Route::resource('author', AuthorsController::class);
Route::resource('news', NewsController::class);
Route::resource('news1', News1Controller::class);
Route::resource('news2', News2Controller::class);
Route::resource('news3', News3Controller::class);
Route::resource('news4', News4Controller::class);
Route::resource('news5', News5Controller::class);
Route::resource('news6', News6Controller::class);
Route::resource('news7', News7Controller::class);
Route::resource('dashboard', DashboardController::class);