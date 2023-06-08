<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TechnologyController;

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

Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function () {
    // Route to the dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //Route to the project
    Route::resource('projects', ProjectController::class)->parameters(['projects' => 'project:slug']);

    //Route to the technologies
    Route::resource('technologies', TechnologyController::class);
});


require __DIR__ . '/auth.php';