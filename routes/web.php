<?php

use App\Http\Controllers\ControladorHabitacio;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->tipus !== 'Gerent') {
            return redirect('dashboard-basic');
        }
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard-basic', function () {
        if (Auth::user()->tipus === 'Gerent') {
            return redirect('dashboard');
        }
        return view('dashboard-basic');
    })->name('dashboard-basic');

    // Rutes per la gestió d'HABITACIONS
    Route::get('/habitacions/visualitza', 'ControladorHabitacio@visualitza')->name('habitacio.visualitza');
    Route::resource('/habitacions', 'ControladorHabitacio');

    // Rutes per la gestió de CLIENTS
    Route::get('/clients/visualitza', 'ControladorClient@visualitza')->name('client.visualitza');
    Route::resource('/clients', 'ControladorClient');

    // Rutes per la gestió de RESERVES
    Route::get('/reserves/visualitza', 'ControladorReserva@visualitza')->name('reserva.visualitza');
    Route::resource('/reserves', 'ControladorReserva');

    // Rutes per generar PDFs
    Route::get('/pdfReserves/{rid}', 'ControladorPDF@generarPDFReserves')->name('pdfReserves');
    Route::get('/pdfHabitacions/{codiHab}', 'ControladorPDF@generarPDFHabitacions')->name('pdfHabitacions');
    Route::get('/pdfClients/{dni}', 'ControladorPDF@generarPDFClients')->name('pdfClients');
});

Route::middleware(['auth', 'gerent'])->group(function () {
    // Rutes per la gestió d'usuaris
    Route::get('/pdfUsuaris/{id}', 'ControladorPDF@generarPDFUsuaris')->name('pdfUsuaris');
    Route::get('/usuaris/visualitza', 'ControladorUser@visualitza')->name('user.visualitza');
    Route::put('/usuaris/update/{id}', 'ControladorUser@update')->name('user.update');
    Route::resource('/usuaris', 'ControladorUser');
});

require __DIR__ . '/auth.php';