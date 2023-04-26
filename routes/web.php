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

    Route::get('/habitacions', 'ControladorHabitacio@index')->name('habitacions.index');
    Route::get('/habitacions/visualitza', 'ControladorHabitacio@visualitza')->name('habitacio.visualitza');
    Route::get('/habitacions/modifica/{codiHab}', 'ControladorHabitacio@modifica')->name('habitacio.modifica');
    Route::get('/habitacions/elimina', 'ControladorHabitacio@elimina')->name('habitacio.elimina');
    Route::get('/habitacions/mostra', 'ControladorHabitacio@mostra')->name('habitacio.mostra');
    Route::patch('/habitacions/update/{codiHab}', 'ControladorHabitacio@update')->name('habitacio.update');
    // Route::get('trebs/index_basic', 'ControladorTreballador@index_basic')->name('trebs.index_basic');
    // Route::get('trebs/show_basic/{tid}', 'ControladorTreballador@show_basic')->name('trebs.show_basic');
    
    Route::resource('habitacions', 'ControladorHabitacio');
    
});

require __DIR__.'/auth.php';
