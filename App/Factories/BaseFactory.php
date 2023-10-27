<?php

namespace App\Factories;

abstract class BaseFactory
{
    protected App\Plugins\Db $db;
    protected $boundModel;
    public function __construct(App\Plugins\Db $db, string $boundModelName) {
        $this->db = $db;
        $this->boundModel = new $boundModelName($db);
    }

    public function buildList(int $page): array
    {
        return $this->boundModel->getListResults($page);
    }

    public function getTotalRowCount(): array
    {
        return $this->boundModel->getTotalRowCount();
    }
}