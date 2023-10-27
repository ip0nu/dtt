<?php

namespace App\Models;

abstract class BaseModel
{
    protected $table;
    protected App\Plugins\Db $db;
    function __construct(App\Plugins\Db $db) {
        $this->db = $db;
    }

    public function getListResults(int $page, int $limit = 10): mixed
    {
        $offset = ($page - 1) * 10;
        $sql = sprintf("SELECT * FROM %s LIMIT %d OFFSET %d;",$this->table, $limit , $offset);
        if ( ! $this->db->executeQuery($sql)) {
            throw new Exception('query failed');
        }

        return $this->db->fetch();
    }

    private function getTotalRowCount(): mixed
    {
        $sql = sprintf("SELECT count(*) FROM %s",$this->table);
        if ( ! $this->db->executeQuery($sql)) {
            throw new Exception('query failed');
        }

        return $this->db->count();
    }
    private function getById(int $id): mixed
    {
        $sql = sprintf("SELECT * FROM %s WHERE id = :id;", $this->table);
        if ( ! $this->db->executeQuery($sql, ['id' => $id])) {
            throw new Exception('query failed');
        }

        return $this->db->fetch();
    }
}