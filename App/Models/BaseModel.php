<?php

namespace App\Models;

abstract class BaseModel
{
    protected string $tableName;
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
     * BaseModel method fetches al the rows of a db table in the specifiek offset, limit range
     * @param int $offset offset of in the sql query.
     * @param int $limit limit in the sql query.
     * @return mixed
     */
    public function getListResults(int $offset = 0, int $limit = 1000): mixed
    {
        $sql = sprintf("SELECT * FROM %s LIMIT %d OFFSET %d;", $this->tableName, $limit, $offset);
        if ( ! $this->db->executeQuery($sql)) {
            throw new \Exception('query failed');
        }

        return $this->db->fetchAll();
    }

    /**
     * BaseModel method that counts the rows in a db table
     * @return mixed
     */
    public function getTotalRowCount(): mixed
    {
        $sql = sprintf("SELECT count(*) FROM %s", $this->tableName);
        if ( ! $this->db->executeQuery($sql)) {
            throw new \Exception('query failed');
        }

        return $this->db->count();
    }

    /**
     * BaseModel method fetch 1 row from db table by row id
     * @param int $id the id of a row that needs to be queried .
     * @return mixed
     */
    public function getById(int $id): mixed
    {
        $sql = sprintf("SELECT * FROM %s WHERE id = :id", $this->tableName);
        if ( ! $this->db->executeQuery($sql, ['id' => $id])) {
            throw new \Exception('query failed');
        }

        return $this->db->fetch();
    }
}