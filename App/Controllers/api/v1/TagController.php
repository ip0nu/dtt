<?php

namespace App\Controllers\api\v1;

use App\Controllers\BaseController;
use App\Plugins\Http\Exceptions;

class TagController extends BaseController
{
    use \App\Controllers\Api\V1\Traits\CreateTrait;
    use \App\Controllers\Api\V1\Traits\UpdateTrait;
    use \App\Controllers\Api\V1\Traits\ReadTrait;
    use \App\Controllers\Api\V1\Traits\DeleteTrait;
    protected string $factoryName = 'App\Factories\TagFactory';
    protected string $boundModelName = 'App\Models\TagModel';
}
