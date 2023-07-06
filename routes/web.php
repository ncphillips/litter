<?php

use Doctrine\ORM\EntityManager;
use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use Inertia\Inertia;
use App\Entities\Trash;
use App\Http\Controllers\TrashController;

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

Route::get('/', function (EntityManager $em) {
    $all_trash = $em->getRepository(Trash::class)->findAll();

    return Inertia::render('Welcome', [
        'message' => 'Hello inertia!',
        'trash' => $all_trash
    ]);
})->name('home');

Route::controller(TrashController::class)->group(function () {
    Route::post('trash', 'store')->name('trash.store');
});

