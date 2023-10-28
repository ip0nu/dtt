<?php

namespace App\Controllers\api\v1\Traits;

use App\Plugins\Http\Response as Status;

trait DeleteTraits
{
    /**
     * Controller method deletes a item bu id
     * @param int $id the id of an item that will be deleted
     * @return void
     */
    public function delete(int $id)
    {
        try {
            if ($this->factory->delete($id)) {
                $respond = (new Status\Ok(['message' => "Item deleted"]));
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