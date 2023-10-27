<?php

namespace App\Controllers\api\v1;

use App\Controllers\BaseController;
use App\Plugins\Http\Response as Status;
use App\Plugins\Http\Exceptions;

class FacilityController extends BaseController
{
    use \App\Controllers\Api\V1\Traits\Create;
    use \App\Controllers\Api\V1\Traits\update;
    use \App\Controllers\Api\V1\Traits\Read;
    use \App\Controllers\Api\V1\Traits\Delete;
    protected string $factoryName = 'App/Factories/facilityFactory';
    protected string $boundModelName = 'App/Models/factoryModel';

}
