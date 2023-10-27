<?php

namespace App\Entities;

class ResponsePageList
{
    public readonly array $items ;
    public readonly int $page ;
    public readonly int $total;

    public function __construct(array $items, int $page , int $total) {
        $this->items = $items;
        $this->page = $page;
        $this->total = $total;
    }
}