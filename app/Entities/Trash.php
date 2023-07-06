<?php

namespace App\Entities;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'trash')]
class Trash
{
    #[Id, Column(name: 'id', type: 'integer'), GeneratedValue()]
    public int $id;

    #[Column(name: 'content', type: 'text',)]
    public string $content;
}
