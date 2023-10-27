<?php

namespace App\Factories;

class BaseFactory
{
    protected App\Plugins\Db $db;
    protected $boundModel;
    public function __construct(App\Plugins\Db $db, string $boundModelName) {
        $this->db = $db;
        $this->boundModel = new $boundModelName($db);
    }
}