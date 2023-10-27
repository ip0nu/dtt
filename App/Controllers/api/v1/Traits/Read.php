<?php

namespace App\Controllers\api\v1\Traits;

use App\Entities\ResponseItem;
use App\Entities\ResponsePageList;

trait read
{
    /**
     * Controller function outputs a page list
     * @return void
     */
    public function SingleItemById(int $id)
    {
        try {
            if ($result = $this->factory->buildById($id)) {
                $responseItem = new ResponseItem($result);
                $respond = (new Status\NotFound($responseItem));
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

    /**
     * Controller function outputs a page list
     * @return void
     */
    public function pageList(int $page)
    {
        try {
            if ($resultPageList = $this->factory->buildList($page)) {
                $responsePageList = new ResponsePageList($resultPageList, $page, $this->factory->getRowTotal());
                $respond = (new Status\ok($responsePageList));
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