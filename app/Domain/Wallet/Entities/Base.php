<?php

namespace App\Domain\Entities;

class Base
{
    /** @var  int */
    protected $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}