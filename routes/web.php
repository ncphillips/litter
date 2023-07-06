<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    $trash = new \App\Entities\Trash();
    $trash->id = 1;
    $trash->content = 'This is some unhinged trash content right here!';

    return Inertia::render('Welcome', [
        'message' => 'Hello inertia!',
        'trash' => [$trash]
    ]);
});
