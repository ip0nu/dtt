<?php

namespace App\Controllers\api\v1\Traits;

use App\Entities\ResponseItem;

trait delete
{
    /**
     * Controller method deletes a item bu id
     * @param int $id the id of an item that will be deleted
     * @return void
     */
    public function delete(int $id)
    {
        try {
            if ($this->factory->buildById($id)) {
                $respond = (new Status\ok(['message' => "Item deleted"]));
            } else {
                $respond = (new Status\NotFound(['message' => "result not found"]));
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            // Respond with 500 (InternalServerError):
            $respond = (new Status\InternalServerError(['message' => "something is wrong query"]));
        }

        $respond->send();
    }
}