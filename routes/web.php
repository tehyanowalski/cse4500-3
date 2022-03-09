<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

URL::forceScheme('https');

Route::get('/todos', function () {
    return view('todos');
});

Route::get('/events-feed', function () {
    return view('calendar');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/db-test', function () {
    try {
        \DB::connection()->getPDO();
        $db_name = \DB::connection()->getDatabaseName();
        echo 'Database Connected: '.$db_name;
    } catch (\Exception $e) {
        echo 'None';
    }
});

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db_migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::fallback(function () {
    return view('fallback');
});
