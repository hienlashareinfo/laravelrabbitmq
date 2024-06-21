<?php

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
//    \App\Jobs\DemoJob::dispatch('hehehhehe')->onQueue('demo')->delay(\Carbon\Carbon::now()->addSeconds(250));
    for ($i =1;$i <=1000;$i++) {
        \App\Jobs\DemoJob::dispatch('hehehhehe')->onQueue('demo');
    }
    return view('welcome');
});
