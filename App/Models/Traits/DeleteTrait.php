<?php

namespace App\Models\Traits;

use App\Plugins\Http\Response as Status;

trait DeleteTrait
{
    /**
     * BaseModel method delete 1 row from db table by its primary key id
     *
     * @param int $id the id of a row that needs to be deleted .
     *
     * @return bool
     */
    public function delete(int $id): bool
    {
        $sql = sprintf("DELETE FROM %s WHERE id = :id", $this->tableName);
        if ( !$result = $this->db->executeQuery($sql, ['id' => $id])) {
            throw new \ExceptionException('query failed');
        }

        return $result;
    }
}