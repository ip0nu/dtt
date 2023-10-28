<?php

namespace App\Models;

abstract class BaseModel
{
    protected $table;
    protected $db;

    /**
     * Constructor of this class
     * @param $db
     */
    function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * BaseModel method that counts the rows in a db table
     * @return mixed
     */
    public function getTotalRowCount(): mixed
    {
        $sql = sprintf("SELECT count(*) FROM %s", $this->tableName);
        if ( ! $this->db->executeQuery($sql)) {
            throw new Exception('query failed');
        }

        return $this->db->count();
    }

    /**
     * BaseModel method fet
     * @param int $id the id of a row that needs to be queried .
     * @return mixed
     */
    public function getById(int $id): mixed
    {
        $sql = sprintf("SELECT * FROM %s WHERE id = :id", $this->tableName);
        if ( ! $this->db->executeQuery($sql, ['id' => $id])) {
            throw new Exception('query failed');
        }

        return $this->db->fetch();
    }
}