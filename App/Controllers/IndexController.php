<?php

namespace App\Controllers;

use App\Plugins\Http\Response as Status;
use App\Plugins\Http\Exceptions;

class IndexController extends BaseController {

    public function test() {
        // Respond with 200 (OK):
        (new Status\Ok(['message' => 'Hello world!']))->send();
    }
}
