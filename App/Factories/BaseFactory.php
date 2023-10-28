<?php

namespace App\Factories;

abstract class BaseFactory
{
    protected $db;
    protected $boundModel;

    /**
     * Constructor of this class
     * @param $db
     * @param string $boundModelName the name of the model the factory is bound to
     */
    public function __construct($db, string $boundModelName)
    {
        $this->db         = $db;
        $this->boundModel = new $boundModelName($db);
    }

    /**
     * BaseFactory method builds a list of items
     * @param int $offset offset of the da table of where the list starts
     * @return void
     */
    public function buildList(int $offset): array
    {
        return $this->boundModel->getListResults($offset);
    }

    /**
     * BaseFactory method builds an item by its id
     * @param int $id the id of an item that need to be outputted.
     * @return mixed
     */
    public function buildById(int $id): mixed
    {
        return $this->boundModel->getById($id);
    }

    /**
     * BaseFactory method builds an item by its id
     * @param int $id the id of an item that need to be outputted.
     * @return void
     */
    public function getTotalRowCount(): int
    {
        return $this->boundModel->getTotalRowCount();
    }
}