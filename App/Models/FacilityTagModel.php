<?php

namespace App\Models;

class FacilityTagModel extends BaseModel
{
    protected string $tableName = 'facility_tag';
    protected array $fillble = [];

    public function getByFaciletyid(int $facilityId): mixed
    {
        $sql = sprintf("SELECT * FROM %s WHERE facility_id = ?;", $this->tableName);
        if ( ! $this->db->executeQuery($sql, [$facilityId])) {
            throw new Exception('query failed');
        }

        return $this->db->fetchAll();
    }
}