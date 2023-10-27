<?php

namespace App\Entities;

class ResponseItem
{
    public readonly array $item ;

    public function __construct(array $item) {
        $this->item = $item;
    }
}