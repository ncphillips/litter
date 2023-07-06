<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use Inertia\Inertia;
use App\Entities\Trash;

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

Route::get('/', function (\Doctrine\ORM\EntityManager $em) {
    $all_trash = $em->getRepository(Trash::class)->findAll();

    return Inertia::render('Welcome', [
        'message' => 'Hello inertia!',
        'trash' => $all_trash
    ]);
})->name('home');

Route::post('/trash', function(\Illuminate\Http\Request $request, \Doctrine\ORM\EntityManager $em) {
    $trash = new Trash();
    $trash->content = $request->input('content');

    $em->persist($trash);
    $em->flush();

    return to_route('home');
})->name('trash.create');


