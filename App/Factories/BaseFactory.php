<?php

namespace App\Factories;

abstract class BaseFactory
{
    protected $db;
    protected $boundModel;
    public function __construct($db, string $boundModelName) {
        $this->db = $db;
        $this->boundModel = new $boundModelName($db);
    }

    public function buildList(int $page): array
    {
        return $this->boundModel->getListResults($page);
    }

    public function buildById(int $id) {
        return $this->boundModel->getById($id);
    }

    public function getTotalRowCount(): int
    {
        return $this->boundModel->getTotalRowCount();
    }
}