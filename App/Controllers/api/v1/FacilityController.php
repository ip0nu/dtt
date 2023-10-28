<?php

namespace App\Controllers\api\v1;

use App\Controllers\BaseController;
use App\Plugins\Http\Exceptions;

class FacilityController extends BaseController
{
    use \App\Controllers\Api\V1\Traits\CreateTraits;
    use \App\Controllers\Api\V1\Traits\UpdateTraits;
    use \App\Controllers\Api\V1\Traits\ReadTraits;
    use \App\Controllers\Api\V1\Traits\DeleteTraits;
    protected string $factoryName = 'App\Factories\FacilityFactory';
    protected string $boundModelName = 'App\Models\FacilityModel';


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
