<?php

use App\Http\Controllers\HomeController;
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
/*Route::get('/',[HomeController::class,'index']);*/

Route::get('/', function () {
    return view('user.home');
});

//filter
Route::get( '/users', [UserController::class, 'index']);


//Recherche Parking
Route::get('/recherche', 'ParkingController@recherche')->name('parking.recherche');
/*Route::get('/home',[HomeController::class,'redirect']);*/





/*Route::get('clients', function () {
    return view('layouts.clients');
});

Route::get('codespromo', function () {
    return view('layouts.codespromo');
});

Route::get('login', function () {
    return view('layouts.login');
});

Route::get('parkings', function () {
    return view('layouts.parking');
});

Route::get('register', function () {
    return view('layouts.register');
});

Route::get('réservations', function () {
    return view('layouts.réservations');
});

Route::get('tableau-de-bord', function () {
    return view('layouts.tableau-de-bord');
});

Route::get('véhicules', function () {
    return view('layouts.véhicules');
});

Route::get('ajouterclient', function () {
    return view('layouts.ajouter-client');
});

Route::get('ajoutercodepromo', function () {
    return view('layouts.ajouter-codepromo');
});

Route::get('ajouterparking', function () {
    return view('layouts.ajouter-parking');
});

Route::get('ajouterrésevation', function () {
    return view('layouts.ajouter-réservation');
});
Route::get('ajoutervéhicule', function () {
    return view('layouts.ajouter-véhicule');
});
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
