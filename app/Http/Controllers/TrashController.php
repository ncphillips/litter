<?php

namespace App\Http\Controllers;

use App\Entities\Trash;
use Doctrine\ORM\EntityManager;
use Illuminate\Http\Request;

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
}
