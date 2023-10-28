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

}
