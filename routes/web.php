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

dd(\Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot'.env('TELEGRAM_BOT_TOKEN').'/sendMessage',
[
    'chat_id' => 862935999,
    'parse_mode' => 'html',
    'text' => 'ishladi'
])->json());



//Route::get('/', function () {
//    return view('welcome');
//});
