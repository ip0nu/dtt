<?php

namespace App\Models;

abstract class BaseModel
{
    protected $table;
    protected $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    public function getListResults(int $offset = 0, int $limit = 1000): mixed
    {
        $sql = sprintf("SELECT * FROM %s LIMIT %d OFFSET %d;", $this->tableName, $limit, $offset);
        if ( ! $this->db->executeQuery($sql)) {
            throw new Exception('query failed');
        }

        return $this->db->fetchAll();
    }

    public function getTotalRowCount(): mixed
    {
        $sql = sprintf("SELECT count(*) FROM %s", $this->tableName);
        if ( ! $this->db->executeQuery($sql)) {
            throw new Exception('query failed');
        }

        return $this->db->count();
    }

    public function getById(int $id): mixed
    {
        $sql = sprintf("SELECT * FROM %s WHERE id = :id", $this->tableName);
        if ( ! $this->db->executeQuery($sql, ['id' => $id])) {
            throw new Exception('query failed');
        }

        return $this->db->fetch();
    }
}