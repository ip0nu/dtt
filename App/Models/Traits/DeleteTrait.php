<?php

namespace App\Models\Traits;

use App\Plugins\Http\Response as Status;
trait DeleteTrait
{
    /**
     * BaseModel method delete 1 row from db table by its primary key id
     * @param int $id the id of a row that needs to be deleted .
     * @return mixed
     */
    public function delete(int $id)
    {
        $sql = sprintf("SELECT * FROM %s WHERE id = :id", $this->tableName);
        if ( ! $this->db->executeQuery($sql, ['id' => $id])) {
            throw new Exception('query failed');
        }

        return true;
    }
}