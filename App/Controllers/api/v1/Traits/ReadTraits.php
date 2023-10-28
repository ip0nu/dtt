<?php

namespace App\Controllers\api\v1\Traits;

use App\Entities\ResponseItem;
use App\Entities\ResponsePageList;
use App\Plugins\Http\Response as Status;
trait ReadTraits
{
    /**
     * Controller method outputs a page list
     * @param int $id the id of an item that need to be outputted.
     * @return void
     */
    public function SingleItemById(int $id)
    {
        try {
            if ($result = $this->factory->buildById($id)) {
                $responseItem = new ResponseItem($result);
                $respond = (new Status\ok($responseItem));
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
     * Controller method outputs a page list
     * @param int $id the $page the page number requested of the page list.
     * @return void
     */
    public function pageList(int $page)
    {
        try {
            $offset = ($page - 1) * 10;
            if ($resultPageList = $this->factory->buildList($offset)) {
                $responsePageList = new ResponsePageList($resultPageList, $page, $this->factory->getTotalRowCount());
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