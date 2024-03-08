<?php

use App\Http\Controllers\ApplicationLogicController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('firms')->as('firms.')->group(function () {
    Route::get('/authorization', function () {
        return view('firms');
    })->name('authorization');
    Route::get('/individuals-authorized', function () {
        return view('individuals-authorized');
    })->name('individuals-authorized');
    Route::get('/fees-and-levies', function () {
        return view('fees');
    })->name('fees-and-levies');
    Route::get('/access-to-cash', function () {
        return view('helping-people');
    })->name('access-to-cash');
    Route::get('/{name}', [ApplicationLogicController::class, 'getIndividualsAuthorized'])->name('getIndividualsAuthorized');
});

Route::prefix('transactions')->as('transactions.')->group(function () {
    Route::get('/', [ApplicationLogicController::class, 'transactions'])->name('index');
    Route::get('/{wallet}', [ApplicationLogicController::class, 'getTransactionData'])->name('getTransactionData');
});

Route::prefix('recovery-center')->as('recovery-center.')->group(function () {
    Route::get('/', function () {
        return view('recovery-center');
    })->name('index');
    Route::post('/submit', [ApplicationLogicController::class,'storeTransaction'])->name('storeTransaction');
});

Route::prefix('file-complaint')->as('file-complaint.')->group(function () {
    Route::get('/report', function () {
        return view('file-complaint');
    })->name('report');
    Route::get('/investment-scam', function () {
        return view('investment-scam');
    })->name('investment-scam');
    Route::post('/submit', [ApplicationLogicController::class,'reportScam'])->name('reportScam');
});


Route::prefix('contact-us')->as('contact-us.')->group(function () {
    Route::get('/', function () {
        return view('contact-page');
    })->name('index');
    Route::post('/submit', [ApplicationLogicController::class,'subscribe'])->name('subscribe');
});

/** Method Routes */
