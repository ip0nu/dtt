<?php

namespace App\Controllers\api\v1;

use App\Controllers\BaseController;
use App\Plugins\Http\Exceptions;

class LocationController extends BaseController
{
    use \App\Controllers\Api\V1\Traits\ReadTrait;
    protected string $factoryName = 'App\Factories\LocationFactory';
    protected string $boundModelName = 'App\Models\LocationModel';
}
