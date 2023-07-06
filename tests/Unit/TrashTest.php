<?php

namespace Tests\Unit;


use App\Entities\Trash;

class TrashTest extends \Tests\TestCase
{
    public function testBasic()
    {
        $trash = entity(Trash::class)->create();

        $this->assertDatabaseHas('trash', [
            'id' => $trash->id,
            'content' => $trash->content
        ]);
    }
}
