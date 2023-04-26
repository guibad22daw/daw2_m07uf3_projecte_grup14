<?php

use App\Http\Controllers\ControladorHabitacio;
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

Route::get('/', function () {
    return view('inici');
});

# Route::resource('trebs', ControladorTreballador::class);

/*
Route::get('/dashboard', function () {   
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');       
    })->name('dashboard');

    Route::get('/dashboard-basic', function () {
        return view('dashboard-basic');       
    })->name('dashboard-basic');
    
    // Rutes per la gestió d'HABITACIONS
    Route::get('/habitacions/visualitza', 'ControladorHabitacio@visualitza')->name('habitacio.visualitza');
    Route::resource('/habitacions', 'ControladorHabitacio');
    
});

require __DIR__.'/auth.php';
