<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/auth/login');
});

Route::group(['middleware' => 'auth', 'prefix' => '/'], function() {

    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'component', 'as' => 'component.'], function() {
        Route::get('accordion', function() {
            return view('mazer.components.accordion');
        })->name('accordion');
    });

    Route::resource('companies', CompanyController::class);

});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/auth/login');
})->name('logout');

require_once __DIR__ . "/auth.php";
