<?php

use App\Models\Association;
use App\Http\Controllers\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\RegisteredUserClient;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\registeredUserClient as ControllersRegisteredUserClient;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 //route pour reservation
//  Route::get('reservation', [ReservationController::class, 'index'])->name('reservation');
Route::get('reservation', [Association::class, 'index'])->name('reservation');

 //route pour association
 Route::get('association', [EvenementController::class, 'index'])->name('association');





//route pour evenement
Route::get('evenement', [EvenementController::class, 'index'])->name('evenement');
Route::post('bdevenement', [EvenementController::class, 'store'])->name('bdevenement');
Route::get('evenements_listage', [EvenementController::class, 'listage'])->name('evenements_listage');

//route pour update evenement
Route::get('update_evenement/{id}', [EvenementController::class, 'update']);  
Route::post('traitementEvenement', [EvenementController::class, 'traitementEvenma'])->name('traitementEvenement');  
//route pour la suppression devenement
Route::get('delete_evenement/{id}', [EvenementController::class, 'destroy']);  



//route pour client
Route::get('registerClient', [RegisteredUserClient::class, 'create'])
->name('registerClient');
Route::post('InscripClient', [RegisteredUserClient::class, 'store'])->name('InscripClient');


Route::get('logClient', [RegisteredUserClient::class, 'loginClient'])->name('logClient');      
Route::post('connexClient', [RegisteredUserClient::class, 'connexionClient'])->name('connexClient');





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
