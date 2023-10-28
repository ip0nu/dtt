<?php

namespace App\Models;

class FacilityTagModel extends BaseModel
{
    protected string $tableName = 'facility_tag';
    protected array $fillble = [];

    /**
     * FacilityTagModel method fetches al rows of table by the facilitiyID
     * @param int $id the id of a row that needs to be queried .
     * @return mixed
     */
    public function getByFaciletyid(int $facilityId): mixed
    {
        $sql = sprintf("SELECT * FROM %s WHERE facility_id = ?;", $this->tableName);
        if ( ! $this->db->executeQuery($sql, [$facilityId])) {
            throw new Exception('query failed');
        }

        return $this->db->fetchAll();
    }
}