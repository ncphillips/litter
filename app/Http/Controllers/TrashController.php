<?php

namespace App\Http\Controllers;

use App\Entities\Trash;
use Doctrine\ORM\EntityManager;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TrashController extends Controller
{
    public function store(Request $request, EntityManager $em)
    {
        $trash = new Trash();
        $trash->content = $request->input('content');

        $em->persist($trash);
        $em->flush();

        return to_route('home');
    }

    public function show(string $id, EntityManager $em)
    {
        $trash = $em->getRepository(Trash::class)->findOneBy(['id' => $id]);

        if (!$trash) {
            abort(404);
        }

        return Inertia::render('Trash/Show', [
            'trash' => $trash
        ]);
    }
}
